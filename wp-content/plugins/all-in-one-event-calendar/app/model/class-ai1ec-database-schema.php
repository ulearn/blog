<?php

/**
 * Manage database schema updates
 *
 * @author     Time.ly Network, Inc.
 * @since      1.11
 *
 * @package    AllInOneCalendar
 * @subpackage AllInOneCalendar.Model.Schema
 */
class Ai1ec_Database_Schema
{

	/**
	 * @var bool If set to true - no operations will be performed
	 */
	protected $_dry_run  = false;

	/**
	 * @var wpdb Instance of wpdb class
	 */
	protected $_db       = NULL;

	/**
	 * @var Ai1ec_Database Instance of Ai1ec_Database class
	 */
	protected $_ai1ec_db = NULL;

	/**
	 * Constructor
	 *
	 * @param bool $dry_run Enable dry run by setting this to true
	 *
	 * @return void Constructor does not return
	 */
	public function __construct( $dry_run = false ) {
		global $wpdb;
		$this->_dry_run  = (bool)$dry_run;
		$this->_db       = $wpdb;
		$this->_ai1ec_db = Ai1ec_Database::instance();
	}

	/**
	 * upgrade method
	 *
	 * Using reflection API retrieve list of methods, that have `@since` comment
	 * set to value no lower than requested version and call these methods.
	 *
	 * @param int $target_ver Target version, to upgrade to
	 *
	 * @return bool Success
	 */
	public function upgrade( $target_ver = NULL ) {
		if ( NULL === $target_ver ) {
			$target_ver = AI1EC_DB_VERSION;
		}
		$target_ver  = (int)$target_ver;
		$curr_class  = get_class( $this );
		$reflection  = new ReflectionClass( $this );
		$method_list = $reflection->getMethods( ReflectionMethod::IS_PUBLIC );
		$since_regex = '#@since\s+(\d+)[^\d]#sx';
		foreach ( $method_list as $method ) {
			if (
				$method->getDeclaringClass()->getName() !== $curr_class ||
				( $name = $method->getName() ) === __FUNCTION__
			) {
				continue;
			}
			$doc_comment = $method->getDocComment();
			if ( ! preg_match( $since_regex, $doc_comment, $matches ) ) {
				continue;
			}
			$since       = (int)$matches[1];
			try {
				if (
					$since <= $target_ver &&
					! $this->{$name}()
				) {
					return false;
				}
			} catch ( Ai1ec_Database_Schema_Exception $exception ) {
				return false;
			}
		}
		return true;
	}

	/**
	 * is_dry method
	 *
	 * Check if dry run is enabled
	 *
	 * @return bool Dryness of run
	 */
	public function is_dry() {
		return $this->_dry_run;
	}

	/**
	 * get_columns method
	 *
	 * Get map of columns defined for table.
	 *
	 * @NOTICE: no optimization will be performed here, and response will not
	 * be cached, to allow checking result of DDL statements.
	 *
	 * @param string $table Name of table to retrieve column names for
	 *
	 * @return array Map of column names and their representation
	 *
	 * @throws Ai1ec_Database_Schema_Exception If an error occurs
	 */
	public function get_columns( $table ) {
		$sql_query = 'SHOW FULL COLUMNS FROM ' .
			$this->_ai1ec_db->table( $table );
		$result    = $this->_db->get_results( $sql_query );
		$columns   = array();
		foreach ( $result as $column ) {
			$columns[$column->Field] = array(
				'name' => $column->Field,
				'type' => preg_replace(
					'#\s+#',
					' ',
					strtolower( $column->Type )
				),
				'null' => $column->Null,
			);
		}
		return $columns;
	}

	/**
	 * get_indices method
	 *
	 * Get map of indices defined for table.
	 *
	 * @NOTICE: no optimization will be performed here, and response will not
	 * be cached, to allow checking result of DDL statements.
	 *
	 * @param string $table Name of table to retrieve index names for
	 *
	 * @return array Map of index names and their representation
	 *
	 * @throws Ai1ec_Database_Schema_Exception If an error occurs
	 */
	public function get_indices( $table ) {
		$sql_query = 'SHOW INDEXES FROM ' . $this->_ai1ec_db->table( $table );
		$result    = $this->_db->get_results( $sql_query );
		$indices   = array();
		foreach ( $result as $index ) {
			$name = $index->Key_name;
			if ( ! isset( $indices[$name] ) ) {
				$indices[$name] = array(
					'name'     => $name,
					'contents' => array(),
					'unique'   => ! (bool)intval( $index->Non_unique ),
				);
			}
			$indices[$name]['contents'][$index->Column_name] = $index->Sub_part;
		}
		return $indices;
	}

	/**
	 * convert_instance_times_to_uint method
	 *
	 * Make event_instances `start` and `end` fields INT(10) UNSIGNED
	 * instead of previous - DATE.
	 *
	 * @since 118
	 *
	 * @return bool Success
	 *
	 * @throws Ai1ec_Database_Schema_Exception On failure
	 */
	public function convert_instance_times_to_uint() {
		try {
			$table   = $this->_ai1ec_db->table( 'event_instances' );
		} catch ( Ai1ec_Database_Schema_Exception $exception ) {
			return true; // it will be created - no need to convert
		}
		$columns = array( 'start', 'end' );
		$target  = 'int(10) unsigned';
		$method  = 'UNIX_TIMESTAMP';

		if ( ! $this->_check_column_types( $table, $columns, $target ) ) {
			$indices = $this->get_indices( $table );
			$index   = 'evt_instance';
			if (
				isset( $indices[$index] ) && ! $this->_dry_query(
					'ALTER TABLE ' . $table . ' DROP INDEX ' . $index
				) ||
				! $this->_change_column_type(
					$table,
					$columns,
					$target,
					$method
				) ||
				! $this->_dry_query(
					'ALTER TABLE ' . $table . ' ADD UNIQUE KEY' .
					' ' . $index . ' (post_id, start)'
				)
			) {
				return false;
			}
		}

		$table = $this->_ai1ec_db->table( 'events' );
		if (
			! $this->_check_column_types( $table, $columns, $target ) &&
			! $this->_change_column_type(
				$table,
				$columns,
				$target,
				$method
			)
		) {
			return false;
		}

		$table   = $this->_ai1ec_db->table( 'facebook_users_events' );
		$columns = array( 'start' );
		if (
			! $this->_check_column_types( $table, $columns, $target ) &&
			! $this->_change_column_type(
				$table,
				$columns,
				$target,
				$method
			)
		) {
			return false;
		}

		return true;
	}

	/**
	 * _dry_query method
	 *
	 * Perform query, unless `dry_run` is selected. In later case just output
	 * the final query and return true.
	 *
	 * @param string $query SQL Query to execute
	 *
	 * @return mixed Query state, or true in dry run mode
	 */
	protected function _dry_query( $query ) {
		if ( $this->is_dry() ) {
			pr( $query );
			return true;
		}
		return $this->_db->query( $query );
	}

	/**
	 * _check_column_types method
	 *
	 * Check types of given columns in requested table.
	 *
	 * @param string $table        Name of table to perform checks against
	 * @param array  $column_names List of columns to validate
	 * @param string $target_type  Expected column type
	 * @param bool   $return_count Set to true, to return count of matching
	 *                             columns, otherwise returns true on match
	 *
	 * @return bool|int True if columns matches, false otherwise, or match count
	 */
	protected function _check_column_types(
		$table,
		array $column_names,
		$target_type,
		$return_count = false
	) {
		$columns = array();
		try {
			$columns   = $this->get_columns( $table );
		} catch ( Ai1ec_Database_Schema_Exception $exception ) {
			return true;
		}
		$converted = 0;
		foreach ( $column_names as $name ) {
			if ( ! isset( $columns[$name] ) ) {
				throw new Ai1ec_Database_Schema_Exception(
					'Column ' . $name . ' is expected on ' .
					$table . ' but does not exist'
				);
			}
			if ( $target_type === $columns[$name]['type'] ) {
				++$converted;
			}
		}
		if ( $return_count ) {
			return $converted;
		}
		if ( $converted !== count( $columns ) ) {
			return false;
		}
		return true;
	}

	/**
	 * _change_column_type method
	 *
	 * Convert requested columns to other type
	 *
	 * @param string $table        Name of table to perform conversion against
	 * @param array  $column_names List of columns to convert
	 * @param string $target_type  Type to convert to
	 * @param string $converter    MySQL function to use for data conversion
	 *
	 * @return bool Success
	 *
	 * @throws Ai1ec_Database_Schema_Exception If unrecoverable error occurs
	 */
	protected function _change_column_type(
		$table,
		array $column_names,
		$target_type,
		$converter
	) {
		$suffix    = '_intermediate';
		$col_extra = ' NOT NULL';
		$columns   = $this->get_columns( $table );

		$converted = $this->_check_column_types(
			$table,
			$column_names,
			$target_type,
			true
		);
		if ( $converted === count( $column_names ) ) {
			return true;
		} elseif ( $converted > 0 ) {
			throw new Ai1ec_Database_Schema_Exception(
				'Some columns on ' . $table . ' not converted to ' .
				$target_type
			);
		}

		$sql_query = 'ALTER TABLE ' . $table;
		$perform   = false;
		foreach ( $column_names as $name ) {
			$new_name = $name . $suffix;
			if ( ! isset( $columns[$new_name] ) ) {
				if ( $perform ) {
					$sql_query .= ', ';
				}
				$sql_query .= ' ADD COLUMN ' . $new_name . ' ' .
					$target_type . $col_extra;
				$perform    = true;
			}
		}
		if ( $perform && ! $this->_dry_query( $sql_query ) ) {
			throw new Ai1ec_Database_Schema_Exception(
				'Failed to add intermediate columns for ' .
				implode( ',', $column_names ) . ' to ' . $table
			);
		}

		$sql_query = 'UPDATE ' . $table . ' SET ';
		$not_first = false;
		foreach ( $column_names as $name ) {
			if ( $not_first ) {
				$sql_query .= ', ';
			}
			$sql_query .= $name . $suffix . ' = ' . $converter .
				'(' . $name . ')';
			$not_first = true;
		}
		$this->_dry_query( $sql_query );

		$sql_query = 'ALTER TABLE ' . $table;
		$not_first = false;
		foreach ( $column_names as $name ) {
			if ( $not_first ) {
				$sql_query .= ', ';
			}
			$sql_query .= ' DROP COLUMN ' . $name
				. ', CHANGE COLUMN ' . $name . $suffix . ' ' .
				$name . ' ' . $target_type . $col_extra;
			$not_first = true;
		}

		if ( ! $this->_dry_query( $sql_query ) ) {
			throw new Ai1ec_Database_Schema_Exception(
				'Failed to restore table ' . $table . ' to correct order'
			);
		}

		return true;
	}

}
