<?php
/**
 * InventoryendpointsApi
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

namespace com.d4dl.oredox.api;

use \com.d4dl.oredox\Configuration;
use \com.d4dl.oredox\ApiClient;
use \com.d4dl.oredox\ApiException;
use \com.d4dl.oredox\ObjectSerializer;

/**
 * InventoryendpointsApi Class Doc Comment
 *
 * @category Class
 * @package  com.d4dl.oredox
 * @author    jdeford
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link   https://oredox.com
 */
class InventoryendpointsApi
{

    /**
     * API Client
     * @var \com.d4dl.oredox\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \com.d4dl.oredox\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost:8080/');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \com.d4dl.oredox\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \com.d4dl.oredox\ApiClient $apiClient set the API client
     * @return InventoryendpointsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * getCategoriesUsingPOST
     *
     * Hello
     *
     * @param \com.d4dl.oredox.model\ResourceRequest $greeting greeting (required)
     * @return \com.d4dl.oredox.model\ResourceType[]
     * @throws \com.d4dl.oredox\ApiException on non-2xx response
     */
    public function getCategoriesUsingPOST($greeting)
    {
        
        // verify the required parameter 'greeting' is set
        if ($greeting === null) {
            throw new \InvalidArgumentException('Missing the required parameter $greeting when calling getCategoriesUsingPOST');
        }
  
        // parse inputs
        $resourcePath = "/oRedox/inventory/query/categories";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array('application/json'));
  
        
        
        
        
        // body params
        $_tempBody = null;
        if (isset($greeting)) {
            $_tempBody = $greeting;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\com.d4dl.oredox.model\ResourceType[]'
            );
            
            if (!$response) {
                return null;
            }

            return $this->apiClient->getSerializer()->deserialize($response, '\com.d4dl.oredox.model\ResourceType[]', $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.d4dl.oredox.model\ResourceType[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 201:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\com.d4dl.oredox.model\ResourceType[]', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        return null;
        
    }
    
}
