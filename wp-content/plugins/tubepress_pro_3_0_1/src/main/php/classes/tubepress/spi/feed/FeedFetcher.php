<?php
/**
 * Copyright 2006 - 2013 TubePress LLC (http://tubepress.org)
 *
 * This file is part of TubePress (http://tubepress.org)
 *
 * This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.
 */

/**
 * TubePress's feed retrieval mechanism
 */
interface tubepress_spi_feed_FeedFetcher
{
    const _ = 'tubepress_spi_feed_FeedFetcher';

    /**
     * Fetches the feed from the remote provider
     *
     * @param string  $url      The URL to fetch.
     * @param boolean $useCache Whether or not to use the network cache.
     *
     * @return mixed The raw feed from the provider, or null if there was a problem.
     */
    function fetch($url, $useCache);
}
