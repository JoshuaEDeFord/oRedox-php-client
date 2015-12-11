<?php
/**
 * ApiException
 * PHP version 5
 *
 * @category Class
 * @package  com.d4dl.oredox
 * @author    jdeford
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link   https://oredox.com
 */
/**
 *  Copyright 2015 DeFord Logistics LLC
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * Never trust a human to do the job of a machine.
 * 
 * How far down the rabbit hole are you willing to go?
 */

namespace com.d4dl.oredox;

use \Exception;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 * @package  com.d4dl.oredox
 * @author    jdeford
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link   https://oredox.com
 */
class ApiException extends Exception
{

    /**
     * The HTTP body of the server response either as Json or string.
     * @var mixed
     */
    protected $responseBody;

    /**
     * The HTTP header of the server response.
     * @var string[]
     */
    protected $responseHeaders;

    /**
     * The deserialized response object
     * @var $responseObject;
     */
    protected $responseObject;

    /**
     * Constructor
     * @param string $message         Error message
     * @param int    $code            HTTP status code
     * @param string $responseHeaders HTTP response header
     * @param mixed  $responseBody    HTTP body of the server response either as Json or string
     */
    public function __construct($message="", $code=0, $responseHeaders=null, $responseBody=null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string HTTP response header
     */
    public function getResponseHeaders()
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return mixed HTTP body of the server response either as Json or string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }

    /**
     * Sets the deseralized response object (during deserialization)
     * @param mixed $obj Deserialized response object
     * @return void
     */
    public function setResponseObject($obj)
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deseralized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject()
    {
        return $this->responseObject;
    }
}
