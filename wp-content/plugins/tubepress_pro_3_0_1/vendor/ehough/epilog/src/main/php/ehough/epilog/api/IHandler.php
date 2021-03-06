<?php
/**
 * Copyright 2012 Eric D. Hough (http://ehough.com)
 *
 * This file is part of epilog (https://github.com/ehough/epilog)
 *
 * epilog is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * epilog is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with TubePress.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

/**
 * Original author...
 *
 * Copyright (c) Jordi Boggiano
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

/**
 * Interface that all epilog Handlers must implement
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface ehough_epilog_api_IHandler
{
    /**
     * Checks whether the given record will be handled by this handler.
     *
     * This is mostly done for performance reasons, to avoid calling processors for nothing.
     *
     * @param array $record Records to check for.
     *
     * @return bool True if this handler is handling this record, false otherwise.
     */
    function isHandling(array $record);

    /**
     * Handles a record.
     *
     * The return value of this function controls the bubbling process of the handler stack.
     *
     * @param array $record The record to handle.
     *
     * @return bool True means that this handler handled the record, and that bubbling is not permitted.
     *                 False means the record was either not processed or that this handler allows bubbling.
     */
    function handle(array $record);

    /**
     * Handles a set of records at once.
     *
     * @param array $records The records to handle (an array of record arrays).
     *
     * @return void
     */
    function handleBatch(array $records);

    /**
     * Adds a processor in the stack.
     *
     * @param ehough_epilog_api_IProcessor $callback The processor to push.
     *
     * @return void
     */
    function pushProcessor(ehough_epilog_api_IProcessor $callback);

    /**
     * Removes the processor on top of the stack and returns it.
     *
     * @return ehough_epilog_api_IProcessor
     */
    function popProcessor();

    /**
     * Sets the formatter.
     *
     * @param ehough_epilog_api_IFormatter $formatter The new formatter.
     *
     * @return void
     */
    function setFormatter(ehough_epilog_api_IFormatter $formatter);

    /**
     * Gets the formatter.
     *
     * @return ehough_epilog_api_IFormatter
     */
    function getFormatter();
}