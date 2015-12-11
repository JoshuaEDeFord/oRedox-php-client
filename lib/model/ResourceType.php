<?php
/**
 * ResourceType
 *
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

namespace com.d4dl.oredox.model;

use \ArrayAccess;
/**
 * ResourceType Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     com.d4dl.oredox
 * @author    jdeford
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        
 */
class ResourceType implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $oRedoxAPIType = array(
        'resourceList' => '\com.d4dl.oredox.model\Resource[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'resourceList' => 'resourceList'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'resourceList' => 'setResourceList'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'resourceList' => 'getResourceList'
    );
  
    
    /**
      * $resourceList 
      * @var \com.d4dl.oredox.model\Resource[]
      */
    protected $resourceList;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->resourceList = $data["resourceList"];
        }
    }
    
    /**
     * Gets resourceList
     * @return \com.d4dl.oredox.model\Resource[]
     */
    public function getResourceList()
    {
        return $this->resourceList;
    }
  
    /**
     * Sets resourceList
     * @param \com.d4dl.oredox.model\Resource[] $resourceList 
     * @return $this
     */
    public function setResourceList($resourceList)
    {
        
        $this->resourceList = $resourceList;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}