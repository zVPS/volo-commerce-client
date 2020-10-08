<?php
/**
 * OrderHistoryResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  \VoloCommerce\Api\v1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Volo Public APIs
 *
 * Volo Public APIs
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VoloCommerce\Api\v1\Model;

use \ArrayAccess;

/**
 * OrderHistoryResponse Class Doc Comment
 *
 * @category    Class
 * @package     \VoloCommerce\Api\v1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderHistoryResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderHistoryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_histories' => '\VoloCommerce\Api\v1\Model\OrderHistory[]',
        'page_context' => '\VoloCommerce\Api\v1\Model\PageContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_histories' => null,
        'page_context' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'order_histories' => 'orderHistories',
        'page_context' => 'pageContext'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'order_histories' => 'setOrderHistories',
        'page_context' => 'setPageContext'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'order_histories' => 'getOrderHistories',
        'page_context' => 'getPageContext'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_histories'] = isset($data['order_histories']) ? $data['order_histories'] : null;
        $this->container['page_context'] = isset($data['page_context']) ? $data['page_context'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets order_histories
     * @return \VoloCommerce\Api\v1\Model\OrderHistory[]
     */
    public function getOrderHistories()
    {
        return $this->container['order_histories'];
    }

    /**
     * Sets order_histories
     * @param \VoloCommerce\Api\v1\Model\OrderHistory[] $order_histories
     * @return $this
     */
    public function setOrderHistories($order_histories)
    {
        $this->container['order_histories'] = $order_histories;

        return $this;
    }

    /**
     * Gets page_context
     * @return \VoloCommerce\Api\v1\Model\PageContext
     */
    public function getPageContext()
    {
        return $this->container['page_context'];
    }

    /**
     * Sets page_context
     * @param \VoloCommerce\Api\v1\Model\PageContext $page_context
     * @return $this
     */
    public function setPageContext($page_context)
    {
        $this->container['page_context'] = $page_context;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\VoloCommerce\Api\v1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\VoloCommerce\Api\v1\ObjectSerializer::sanitizeForSerialization($this));
    }
}


