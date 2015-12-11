<?php
/**
 * ModelAndView
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
 * ModelAndView Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     com.d4dl.oredox
 * @author    jdeford
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        
 */
class ModelAndView implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $oRedoxAPIType = array(
        'empty' => 'bool',
        'model' => 'object',
        'modelMap' => 'map[string,object]',
        'reference' => 'bool',
        'view' => '\com.d4dl.oredox.model\View',
        'viewName' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'empty' => 'empty',
        'model' => 'model',
        'modelMap' => 'modelMap',
        'reference' => 'reference',
        'view' => 'view',
        'viewName' => 'viewName'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'empty' => 'setEmpty',
        'model' => 'setModel',
        'modelMap' => 'setModelMap',
        'reference' => 'setReference',
        'view' => 'setView',
        'viewName' => 'setViewName'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'empty' => 'getEmpty',
        'model' => 'getModel',
        'modelMap' => 'getModelMap',
        'reference' => 'getReference',
        'view' => 'getView',
        'viewName' => 'getViewName'
    );
  
    
    /**
      * $empty 
      * @var bool
      */
    protected $empty;
    
    /**
      * $model 
      * @var object
      */
    protected $model;
    
    /**
      * $modelMap 
      * @var map[string,object]
      */
    protected $modelMap;
    
    /**
      * $reference 
      * @var bool
      */
    protected $reference;
    
    /**
      * $view 
      * @var \com.d4dl.oredox.model\View
      */
    protected $view;
    
    /**
      * $viewName 
      * @var string
      */
    protected $viewName;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->empty = $data["empty"];
            $this->model = $data["model"];
            $this->modelMap = $data["modelMap"];
            $this->reference = $data["reference"];
            $this->view = $data["view"];
            $this->viewName = $data["viewName"];
        }
    }
    
    /**
     * Gets empty
     * @return bool
     */
    public function getEmpty()
    {
        return $this->empty;
    }
  
    /**
     * Sets empty
     * @param bool $empty 
     * @return $this
     */
    public function setEmpty($empty)
    {
        
        $this->empty = $empty;
        return $this;
    }
    
    /**
     * Gets model
     * @return object
     */
    public function getModel()
    {
        return $this->model;
    }
  
    /**
     * Sets model
     * @param object $model 
     * @return $this
     */
    public function setModel($model)
    {
        
        $this->model = $model;
        return $this;
    }
    
    /**
     * Gets modelMap
     * @return map[string,object]
     */
    public function getModelMap()
    {
        return $this->modelMap;
    }
  
    /**
     * Sets modelMap
     * @param map[string,object] $modelMap 
     * @return $this
     */
    public function setModelMap($modelMap)
    {
        
        $this->modelMap = $modelMap;
        return $this;
    }
    
    /**
     * Gets reference
     * @return bool
     */
    public function getReference()
    {
        return $this->reference;
    }
  
    /**
     * Sets reference
     * @param bool $reference 
     * @return $this
     */
    public function setReference($reference)
    {
        
        $this->reference = $reference;
        return $this;
    }
    
    /**
     * Gets view
     * @return \com.d4dl.oredox.model\View
     */
    public function getView()
    {
        return $this->view;
    }
  
    /**
     * Sets view
     * @param \com.d4dl.oredox.model\View $view 
     * @return $this
     */
    public function setView($view)
    {
        
        $this->view = $view;
        return $this;
    }
    
    /**
     * Gets viewName
     * @return string
     */
    public function getViewName()
    {
        return $this->viewName;
    }
  
    /**
     * Sets viewName
     * @param string $viewName 
     * @return $this
     */
    public function setViewName($viewName)
    {
        
        $this->viewName = $viewName;
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
