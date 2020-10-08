<?php
/**
 * BatchStatusBean
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
 * BatchStatusBean Class Doc Comment
 *
 * @category    Class
 * @package     \VoloCommerce\Api\v1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BatchStatusBean implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BatchStatusBean';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_id' => 'string',
        'entries' => '\VoloCommerce\Api\v1\Model\UpdateResponseJsonEntries',
        'status' => 'string',
        'update_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_id' => null,
        'entries' => null,
        'status' => null,
        'update_type' => null
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
        'batch_id' => 'batchId',
        'entries' => 'entries',
        'status' => 'status',
        'update_type' => 'updateType'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'batch_id' => 'setBatchId',
        'entries' => 'setEntries',
        'status' => 'setStatus',
        'update_type' => 'setUpdateType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'batch_id' => 'getBatchId',
        'entries' => 'getEntries',
        'status' => 'getStatus',
        'update_type' => 'getUpdateType'
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

    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_PROCESSED = 'PROCESSED';
    const STATUS_ERROR = 'ERROR';
    const UPDATE_TYPE_ORDERS = 'UPDATE_ORDERS';
    const UPDATE_TYPE_PRODUCTS = 'UPDATE_PRODUCTS';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBMITTED,
            self::STATUS_PROCESSED,
            self::STATUS_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getUpdateTypeAllowableValues()
    {
        return [
            self::UPDATE_TYPE_ORDERS,
            self::UPDATE_TYPE_PRODUCTS,
        ];
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
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['entries'] = isset($data['entries']) ? $data['entries'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['update_type'] = isset($data['update_type']) ? $data['update_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getUpdateTypeAllowableValues();
        if (!in_array($this->container['update_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'update_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getUpdateTypeAllowableValues();
        if (!in_array($this->container['update_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets batch_id
     * @return string
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     * @param string $batch_id
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets entries
     * @return \VoloCommerce\Api\v1\Model\UpdateResponseJsonEntries
     */
    public function getEntries()
    {
        return $this->container['entries'];
    }

    /**
     * Sets entries
     * @param \VoloCommerce\Api\v1\Model\UpdateResponseJsonEntries $entries
     * @return $this
     */
    public function setEntries($entries)
    {
        $this->container['entries'] = $entries;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets update_type
     * @return string
     */
    public function getUpdateType()
    {
        return $this->container['update_type'];
    }

    /**
     * Sets update_type
     * @param string $update_type
     * @return $this
     */
    public function setUpdateType($update_type)
    {
        $allowed_values = $this->getUpdateTypeAllowableValues();
        if (!is_null($update_type) && !in_array($update_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'update_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['update_type'] = $update_type;

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


