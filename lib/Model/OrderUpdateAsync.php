<?php
/**
 * OrderUpdateAsync
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
 * OrderUpdateAsync Class Doc Comment
 *
 * @category    Class
 * @package     \VoloCommerce\Api\v1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderUpdateAsync implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderUpdateAsync';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'esp_order_no' => 'int',
        'order_status' => 'string',
        'on_hold_notes' => 'string',
        'courier' => 'string',
        'courier_service' => 'string',
        'courier_tracking' => 'string',
        'notes' => 'string',
        'flag1' => 'string',
        'flag2' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'esp_order_no' => 'int32',
        'order_status' => null,
        'on_hold_notes' => null,
        'courier' => null,
        'courier_service' => null,
        'courier_tracking' => null,
        'notes' => null,
        'flag1' => null,
        'flag2' => null
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
        'esp_order_no' => 'espOrderNo',
        'order_status' => 'orderStatus',
        'on_hold_notes' => 'onHoldNotes',
        'courier' => 'courier',
        'courier_service' => 'courierService',
        'courier_tracking' => 'courierTracking',
        'notes' => 'notes',
        'flag1' => 'flag1',
        'flag2' => 'flag2'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'esp_order_no' => 'setEspOrderNo',
        'order_status' => 'setOrderStatus',
        'on_hold_notes' => 'setOnHoldNotes',
        'courier' => 'setCourier',
        'courier_service' => 'setCourierService',
        'courier_tracking' => 'setCourierTracking',
        'notes' => 'setNotes',
        'flag1' => 'setFlag1',
        'flag2' => 'setFlag2'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'esp_order_no' => 'getEspOrderNo',
        'order_status' => 'getOrderStatus',
        'on_hold_notes' => 'getOnHoldNotes',
        'courier' => 'getCourier',
        'courier_service' => 'getCourierService',
        'courier_tracking' => 'getCourierTracking',
        'notes' => 'getNotes',
        'flag1' => 'getFlag1',
        'flag2' => 'getFlag2'
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

    const ORDER_STATUS_WAITING_FOR_DELIVERY = 'WAITING_FOR_DELIVERY';
    const ORDER_STATUS_DELIVERED = 'DELIVERED';
    const ORDER_STATUS_CANCELLED = 'CANCELLED';
    const ORDER_STATUS_ON_HOLD = 'ON_HOLD';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_WAITING_FOR_DELIVERY,
            self::ORDER_STATUS_DELIVERED,
            self::ORDER_STATUS_CANCELLED,
            self::ORDER_STATUS_ON_HOLD,
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
        $this->container['esp_order_no'] = isset($data['esp_order_no']) ? $data['esp_order_no'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['on_hold_notes'] = isset($data['on_hold_notes']) ? $data['on_hold_notes'] : null;
        $this->container['courier'] = isset($data['courier']) ? $data['courier'] : null;
        $this->container['courier_service'] = isset($data['courier_service']) ? $data['courier_service'] : null;
        $this->container['courier_tracking'] = isset($data['courier_tracking']) ? $data['courier_tracking'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['flag1'] = isset($data['flag1']) ? $data['flag1'] : null;
        $this->container['flag2'] = isset($data['flag2']) ? $data['flag2'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['order_status'] === null) {
            $invalid_properties[] = "'order_status' can't be null";
        }
        $allowed_values = $this->getOrderStatusAllowableValues();
        if (!in_array($this->container['order_status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'order_status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['on_hold_notes'] === null) {
            $invalid_properties[] = "'on_hold_notes' can't be null";
        }
        if ($this->container['courier'] === null) {
            $invalid_properties[] = "'courier' can't be null";
        }
        if ($this->container['courier_service'] === null) {
            $invalid_properties[] = "'courier_service' can't be null";
        }
        if ($this->container['courier_tracking'] === null) {
            $invalid_properties[] = "'courier_tracking' can't be null";
        }
        if ($this->container['notes'] === null) {
            $invalid_properties[] = "'notes' can't be null";
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

        if ($this->container['order_status'] === null) {
            return false;
        }
        $allowed_values = $this->getOrderStatusAllowableValues();
        if (!in_array($this->container['order_status'], $allowed_values)) {
            return false;
        }
        if ($this->container['on_hold_notes'] === null) {
            return false;
        }
        if ($this->container['courier'] === null) {
            return false;
        }
        if ($this->container['courier_service'] === null) {
            return false;
        }
        if ($this->container['courier_tracking'] === null) {
            return false;
        }
        if ($this->container['notes'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets esp_order_no
     * @return int
     */
    public function getEspOrderNo()
    {
        return $this->container['esp_order_no'];
    }

    /**
     * Sets esp_order_no
     * @param int $esp_order_no
     * @return $this
     */
    public function setEspOrderNo($esp_order_no)
    {
        $this->container['esp_order_no'] = $esp_order_no;

        return $this;
    }

    /**
     * Gets order_status
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     * @param string $order_status
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $allowed_values = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets on_hold_notes
     * @return string
     */
    public function getOnHoldNotes()
    {
        return $this->container['on_hold_notes'];
    }

    /**
     * Sets on_hold_notes
     * @param string $on_hold_notes
     * @return $this
     */
    public function setOnHoldNotes($on_hold_notes)
    {
        $this->container['on_hold_notes'] = $on_hold_notes;

        return $this;
    }

    /**
     * Gets courier
     * @return string
     */
    public function getCourier()
    {
        return $this->container['courier'];
    }

    /**
     * Sets courier
     * @param string $courier
     * @return $this
     */
    public function setCourier($courier)
    {
        $this->container['courier'] = $courier;

        return $this;
    }

    /**
     * Gets courier_service
     * @return string
     */
    public function getCourierService()
    {
        return $this->container['courier_service'];
    }

    /**
     * Sets courier_service
     * @param string $courier_service
     * @return $this
     */
    public function setCourierService($courier_service)
    {
        $this->container['courier_service'] = $courier_service;

        return $this;
    }

    /**
     * Gets courier_tracking
     * @return string
     */
    public function getCourierTracking()
    {
        return $this->container['courier_tracking'];
    }

    /**
     * Sets courier_tracking
     * @param string $courier_tracking
     * @return $this
     */
    public function setCourierTracking($courier_tracking)
    {
        $this->container['courier_tracking'] = $courier_tracking;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets flag1
     * @return string
     */
    public function getFlag1()
    {
        return $this->container['flag1'];
    }

    /**
     * Sets flag1
     * @param string $flag1
     * @return $this
     */
    public function setFlag1($flag1)
    {
        $this->container['flag1'] = $flag1;

        return $this;
    }

    /**
     * Gets flag2
     * @return string
     */
    public function getFlag2()
    {
        return $this->container['flag2'];
    }

    /**
     * Sets flag2
     * @param string $flag2
     * @return $this
     */
    public function setFlag2($flag2)
    {
        $this->container['flag2'] = $flag2;

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

