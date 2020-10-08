<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category    Class
 * @package     \VoloCommerce\Api\v1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Order implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_type' => 'string',
        'order_source' => 'string',
        'external_reference' => 'string',
        'date' => '\DateTime',
        'customer_company' => 'string',
        'customer_name' => 'string',
        'customer_address1' => 'string',
        'customer_address2' => 'string',
        'customer_address3' => 'string',
        'customer_city' => 'string',
        'customer_county' => 'string',
        'customer_postcode' => 'string',
        'customer_country' => 'string',
        'customer_email' => 'string',
        'customer_telephone' => 'string',
        'customer_reference' => 'string',
        'customer_notes' => 'string',
        'delivery_company' => 'string',
        'delivery_name' => 'string',
        'delivery_address1' => 'string',
        'delivery_address2' => 'string',
        'delivery_address3' => 'string',
        'delivery_city' => 'string',
        'delivery_county' => 'string',
        'delivery_postcode' => 'string',
        'delivery_country' => 'string',
        'delivery_telephone' => 'string',
        'shipping_method' => 'string',
        'shipping_cost' => 'float',
        'insurance' => 'float',
        'discount' => 'float',
        'voucher_code' => 'string',
        'order_total' => 'float',
        'payment_complete' => 'bool',
        'payments' => '\VoloCommerce\Api\v1\Model\Payments',
        'currency_code' => 'string',
        'seller_username' => 'string',
        'order_items' => '\VoloCommerce\Api\v1\Model\CreateOrderItems',
        'order_status' => 'string',
        'web_order_id' => 'int',
        'trade_sale' => 'bool',
        'actual_courier_cost' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_type' => null,
        'order_source' => null,
        'external_reference' => null,
        'date' => 'date-time',
        'customer_company' => null,
        'customer_name' => null,
        'customer_address1' => null,
        'customer_address2' => null,
        'customer_address3' => null,
        'customer_city' => null,
        'customer_county' => null,
        'customer_postcode' => null,
        'customer_country' => null,
        'customer_email' => null,
        'customer_telephone' => null,
        'customer_reference' => null,
        'customer_notes' => null,
        'delivery_company' => null,
        'delivery_name' => null,
        'delivery_address1' => null,
        'delivery_address2' => null,
        'delivery_address3' => null,
        'delivery_city' => null,
        'delivery_county' => null,
        'delivery_postcode' => null,
        'delivery_country' => null,
        'delivery_telephone' => null,
        'shipping_method' => null,
        'shipping_cost' => null,
        'insurance' => null,
        'discount' => null,
        'voucher_code' => null,
        'order_total' => null,
        'payment_complete' => null,
        'payments' => null,
        'currency_code' => null,
        'seller_username' => null,
        'order_items' => null,
        'order_status' => null,
        'web_order_id' => 'int64',
        'trade_sale' => null,
        'actual_courier_cost' => 'double'
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
        'order_type' => 'orderType',
        'order_source' => 'orderSource',
        'external_reference' => 'externalReference',
        'date' => 'date',
        'customer_company' => 'customerCompany',
        'customer_name' => 'customerName',
        'customer_address1' => 'customerAddress1',
        'customer_address2' => 'customerAddress2',
        'customer_address3' => 'customerAddress3',
        'customer_city' => 'customerCity',
        'customer_county' => 'customerCounty',
        'customer_postcode' => 'customerPostcode',
        'customer_country' => 'customerCountry',
        'customer_email' => 'customerEmail',
        'customer_telephone' => 'customerTelephone',
        'customer_reference' => 'customerReference',
        'customer_notes' => 'customerNotes',
        'delivery_company' => 'deliveryCompany',
        'delivery_name' => 'deliveryName',
        'delivery_address1' => 'deliveryAddress1',
        'delivery_address2' => 'deliveryAddress2',
        'delivery_address3' => 'deliveryAddress3',
        'delivery_city' => 'deliveryCity',
        'delivery_county' => 'deliveryCounty',
        'delivery_postcode' => 'deliveryPostcode',
        'delivery_country' => 'deliveryCountry',
        'delivery_telephone' => 'deliveryTelephone',
        'shipping_method' => 'shippingMethod',
        'shipping_cost' => 'shippingCost',
        'insurance' => 'insurance',
        'discount' => 'discount',
        'voucher_code' => 'voucherCode',
        'order_total' => 'orderTotal',
        'payment_complete' => 'paymentComplete',
        'payments' => 'payments',
        'currency_code' => 'currencyCode',
        'seller_username' => 'sellerUsername',
        'order_items' => 'orderItems',
        'order_status' => 'orderStatus',
        'web_order_id' => 'webOrderID',
        'trade_sale' => 'tradeSale',
        'actual_courier_cost' => 'actualCourierCost'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'order_type' => 'setOrderType',
        'order_source' => 'setOrderSource',
        'external_reference' => 'setExternalReference',
        'date' => 'setDate',
        'customer_company' => 'setCustomerCompany',
        'customer_name' => 'setCustomerName',
        'customer_address1' => 'setCustomerAddress1',
        'customer_address2' => 'setCustomerAddress2',
        'customer_address3' => 'setCustomerAddress3',
        'customer_city' => 'setCustomerCity',
        'customer_county' => 'setCustomerCounty',
        'customer_postcode' => 'setCustomerPostcode',
        'customer_country' => 'setCustomerCountry',
        'customer_email' => 'setCustomerEmail',
        'customer_telephone' => 'setCustomerTelephone',
        'customer_reference' => 'setCustomerReference',
        'customer_notes' => 'setCustomerNotes',
        'delivery_company' => 'setDeliveryCompany',
        'delivery_name' => 'setDeliveryName',
        'delivery_address1' => 'setDeliveryAddress1',
        'delivery_address2' => 'setDeliveryAddress2',
        'delivery_address3' => 'setDeliveryAddress3',
        'delivery_city' => 'setDeliveryCity',
        'delivery_county' => 'setDeliveryCounty',
        'delivery_postcode' => 'setDeliveryPostcode',
        'delivery_country' => 'setDeliveryCountry',
        'delivery_telephone' => 'setDeliveryTelephone',
        'shipping_method' => 'setShippingMethod',
        'shipping_cost' => 'setShippingCost',
        'insurance' => 'setInsurance',
        'discount' => 'setDiscount',
        'voucher_code' => 'setVoucherCode',
        'order_total' => 'setOrderTotal',
        'payment_complete' => 'setPaymentComplete',
        'payments' => 'setPayments',
        'currency_code' => 'setCurrencyCode',
        'seller_username' => 'setSellerUsername',
        'order_items' => 'setOrderItems',
        'order_status' => 'setOrderStatus',
        'web_order_id' => 'setWebOrderId',
        'trade_sale' => 'setTradeSale',
        'actual_courier_cost' => 'setActualCourierCost'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'order_type' => 'getOrderType',
        'order_source' => 'getOrderSource',
        'external_reference' => 'getExternalReference',
        'date' => 'getDate',
        'customer_company' => 'getCustomerCompany',
        'customer_name' => 'getCustomerName',
        'customer_address1' => 'getCustomerAddress1',
        'customer_address2' => 'getCustomerAddress2',
        'customer_address3' => 'getCustomerAddress3',
        'customer_city' => 'getCustomerCity',
        'customer_county' => 'getCustomerCounty',
        'customer_postcode' => 'getCustomerPostcode',
        'customer_country' => 'getCustomerCountry',
        'customer_email' => 'getCustomerEmail',
        'customer_telephone' => 'getCustomerTelephone',
        'customer_reference' => 'getCustomerReference',
        'customer_notes' => 'getCustomerNotes',
        'delivery_company' => 'getDeliveryCompany',
        'delivery_name' => 'getDeliveryName',
        'delivery_address1' => 'getDeliveryAddress1',
        'delivery_address2' => 'getDeliveryAddress2',
        'delivery_address3' => 'getDeliveryAddress3',
        'delivery_city' => 'getDeliveryCity',
        'delivery_county' => 'getDeliveryCounty',
        'delivery_postcode' => 'getDeliveryPostcode',
        'delivery_country' => 'getDeliveryCountry',
        'delivery_telephone' => 'getDeliveryTelephone',
        'shipping_method' => 'getShippingMethod',
        'shipping_cost' => 'getShippingCost',
        'insurance' => 'getInsurance',
        'discount' => 'getDiscount',
        'voucher_code' => 'getVoucherCode',
        'order_total' => 'getOrderTotal',
        'payment_complete' => 'getPaymentComplete',
        'payments' => 'getPayments',
        'currency_code' => 'getCurrencyCode',
        'seller_username' => 'getSellerUsername',
        'order_items' => 'getOrderItems',
        'order_status' => 'getOrderStatus',
        'web_order_id' => 'getWebOrderId',
        'trade_sale' => 'getTradeSale',
        'actual_courier_cost' => 'getActualCourierCost'
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

    const ORDER_TYPE_ORDER = 'ORDER';
    const ORDER_TYPE_QUOTE = 'QUOTE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_ORDER,
            self::ORDER_TYPE_QUOTE,
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
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['order_source'] = isset($data['order_source']) ? $data['order_source'] : null;
        $this->container['external_reference'] = isset($data['external_reference']) ? $data['external_reference'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['customer_company'] = isset($data['customer_company']) ? $data['customer_company'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_address1'] = isset($data['customer_address1']) ? $data['customer_address1'] : null;
        $this->container['customer_address2'] = isset($data['customer_address2']) ? $data['customer_address2'] : null;
        $this->container['customer_address3'] = isset($data['customer_address3']) ? $data['customer_address3'] : null;
        $this->container['customer_city'] = isset($data['customer_city']) ? $data['customer_city'] : null;
        $this->container['customer_county'] = isset($data['customer_county']) ? $data['customer_county'] : null;
        $this->container['customer_postcode'] = isset($data['customer_postcode']) ? $data['customer_postcode'] : null;
        $this->container['customer_country'] = isset($data['customer_country']) ? $data['customer_country'] : null;
        $this->container['customer_email'] = isset($data['customer_email']) ? $data['customer_email'] : null;
        $this->container['customer_telephone'] = isset($data['customer_telephone']) ? $data['customer_telephone'] : null;
        $this->container['customer_reference'] = isset($data['customer_reference']) ? $data['customer_reference'] : null;
        $this->container['customer_notes'] = isset($data['customer_notes']) ? $data['customer_notes'] : null;
        $this->container['delivery_company'] = isset($data['delivery_company']) ? $data['delivery_company'] : null;
        $this->container['delivery_name'] = isset($data['delivery_name']) ? $data['delivery_name'] : null;
        $this->container['delivery_address1'] = isset($data['delivery_address1']) ? $data['delivery_address1'] : null;
        $this->container['delivery_address2'] = isset($data['delivery_address2']) ? $data['delivery_address2'] : null;
        $this->container['delivery_address3'] = isset($data['delivery_address3']) ? $data['delivery_address3'] : null;
        $this->container['delivery_city'] = isset($data['delivery_city']) ? $data['delivery_city'] : null;
        $this->container['delivery_county'] = isset($data['delivery_county']) ? $data['delivery_county'] : null;
        $this->container['delivery_postcode'] = isset($data['delivery_postcode']) ? $data['delivery_postcode'] : null;
        $this->container['delivery_country'] = isset($data['delivery_country']) ? $data['delivery_country'] : null;
        $this->container['delivery_telephone'] = isset($data['delivery_telephone']) ? $data['delivery_telephone'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['voucher_code'] = isset($data['voucher_code']) ? $data['voucher_code'] : null;
        $this->container['order_total'] = isset($data['order_total']) ? $data['order_total'] : null;
        $this->container['payment_complete'] = isset($data['payment_complete']) ? $data['payment_complete'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['seller_username'] = isset($data['seller_username']) ? $data['seller_username'] : null;
        $this->container['order_items'] = isset($data['order_items']) ? $data['order_items'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['web_order_id'] = isset($data['web_order_id']) ? $data['web_order_id'] : null;
        $this->container['trade_sale'] = isset($data['trade_sale']) ? $data['trade_sale'] : null;
        $this->container['actual_courier_cost'] = isset($data['actual_courier_cost']) ? $data['actual_courier_cost'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getOrderTypeAllowableValues();
        if (!in_array($this->container['order_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
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

        $allowed_values = $this->getOrderTypeAllowableValues();
        if (!in_array($this->container['order_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets order_type
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     * @param string $order_type orderType
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowed_values = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'order_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets order_source
     * @return string
     */
    public function getOrderSource()
    {
        return $this->container['order_source'];
    }

    /**
     * Sets order_source
     * @param string $order_source
     * @return $this
     */
    public function setOrderSource($order_source)
    {
        $this->container['order_source'] = $order_source;

        return $this;
    }

    /**
     * Gets external_reference
     * @return string
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     * @param string $external_reference
     * @return $this
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets customer_company
     * @return string
     */
    public function getCustomerCompany()
    {
        return $this->container['customer_company'];
    }

    /**
     * Sets customer_company
     * @param string $customer_company
     * @return $this
     */
    public function setCustomerCompany($customer_company)
    {
        $this->container['customer_company'] = $customer_company;

        return $this;
    }

    /**
     * Gets customer_name
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     * @param string $customer_name
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_address1
     * @return string
     */
    public function getCustomerAddress1()
    {
        return $this->container['customer_address1'];
    }

    /**
     * Sets customer_address1
     * @param string $customer_address1
     * @return $this
     */
    public function setCustomerAddress1($customer_address1)
    {
        $this->container['customer_address1'] = $customer_address1;

        return $this;
    }

    /**
     * Gets customer_address2
     * @return string
     */
    public function getCustomerAddress2()
    {
        return $this->container['customer_address2'];
    }

    /**
     * Sets customer_address2
     * @param string $customer_address2
     * @return $this
     */
    public function setCustomerAddress2($customer_address2)
    {
        $this->container['customer_address2'] = $customer_address2;

        return $this;
    }

    /**
     * Gets customer_address3
     * @return string
     */
    public function getCustomerAddress3()
    {
        return $this->container['customer_address3'];
    }

    /**
     * Sets customer_address3
     * @param string $customer_address3
     * @return $this
     */
    public function setCustomerAddress3($customer_address3)
    {
        $this->container['customer_address3'] = $customer_address3;

        return $this;
    }

    /**
     * Gets customer_city
     * @return string
     */
    public function getCustomerCity()
    {
        return $this->container['customer_city'];
    }

    /**
     * Sets customer_city
     * @param string $customer_city
     * @return $this
     */
    public function setCustomerCity($customer_city)
    {
        $this->container['customer_city'] = $customer_city;

        return $this;
    }

    /**
     * Gets customer_county
     * @return string
     */
    public function getCustomerCounty()
    {
        return $this->container['customer_county'];
    }

    /**
     * Sets customer_county
     * @param string $customer_county
     * @return $this
     */
    public function setCustomerCounty($customer_county)
    {
        $this->container['customer_county'] = $customer_county;

        return $this;
    }

    /**
     * Gets customer_postcode
     * @return string
     */
    public function getCustomerPostcode()
    {
        return $this->container['customer_postcode'];
    }

    /**
     * Sets customer_postcode
     * @param string $customer_postcode
     * @return $this
     */
    public function setCustomerPostcode($customer_postcode)
    {
        $this->container['customer_postcode'] = $customer_postcode;

        return $this;
    }

    /**
     * Gets customer_country
     * @return string
     */
    public function getCustomerCountry()
    {
        return $this->container['customer_country'];
    }

    /**
     * Sets customer_country
     * @param string $customer_country
     * @return $this
     */
    public function setCustomerCountry($customer_country)
    {
        $this->container['customer_country'] = $customer_country;

        return $this;
    }

    /**
     * Gets customer_email
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     * @param string $customer_email
     * @return $this
     */
    public function setCustomerEmail($customer_email)
    {
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets customer_telephone
     * @return string
     */
    public function getCustomerTelephone()
    {
        return $this->container['customer_telephone'];
    }

    /**
     * Sets customer_telephone
     * @param string $customer_telephone
     * @return $this
     */
    public function setCustomerTelephone($customer_telephone)
    {
        $this->container['customer_telephone'] = $customer_telephone;

        return $this;
    }

    /**
     * Gets customer_reference
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     * @param string $customer_reference
     * @return $this
     */
    public function setCustomerReference($customer_reference)
    {
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets customer_notes
     * @return string
     */
    public function getCustomerNotes()
    {
        return $this->container['customer_notes'];
    }

    /**
     * Sets customer_notes
     * @param string $customer_notes
     * @return $this
     */
    public function setCustomerNotes($customer_notes)
    {
        $this->container['customer_notes'] = $customer_notes;

        return $this;
    }

    /**
     * Gets delivery_company
     * @return string
     */
    public function getDeliveryCompany()
    {
        return $this->container['delivery_company'];
    }

    /**
     * Sets delivery_company
     * @param string $delivery_company
     * @return $this
     */
    public function setDeliveryCompany($delivery_company)
    {
        $this->container['delivery_company'] = $delivery_company;

        return $this;
    }

    /**
     * Gets delivery_name
     * @return string
     */
    public function getDeliveryName()
    {
        return $this->container['delivery_name'];
    }

    /**
     * Sets delivery_name
     * @param string $delivery_name
     * @return $this
     */
    public function setDeliveryName($delivery_name)
    {
        $this->container['delivery_name'] = $delivery_name;

        return $this;
    }

    /**
     * Gets delivery_address1
     * @return string
     */
    public function getDeliveryAddress1()
    {
        return $this->container['delivery_address1'];
    }

    /**
     * Sets delivery_address1
     * @param string $delivery_address1
     * @return $this
     */
    public function setDeliveryAddress1($delivery_address1)
    {
        $this->container['delivery_address1'] = $delivery_address1;

        return $this;
    }

    /**
     * Gets delivery_address2
     * @return string
     */
    public function getDeliveryAddress2()
    {
        return $this->container['delivery_address2'];
    }

    /**
     * Sets delivery_address2
     * @param string $delivery_address2
     * @return $this
     */
    public function setDeliveryAddress2($delivery_address2)
    {
        $this->container['delivery_address2'] = $delivery_address2;

        return $this;
    }

    /**
     * Gets delivery_address3
     * @return string
     */
    public function getDeliveryAddress3()
    {
        return $this->container['delivery_address3'];
    }

    /**
     * Sets delivery_address3
     * @param string $delivery_address3
     * @return $this
     */
    public function setDeliveryAddress3($delivery_address3)
    {
        $this->container['delivery_address3'] = $delivery_address3;

        return $this;
    }

    /**
     * Gets delivery_city
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->container['delivery_city'];
    }

    /**
     * Sets delivery_city
     * @param string $delivery_city
     * @return $this
     */
    public function setDeliveryCity($delivery_city)
    {
        $this->container['delivery_city'] = $delivery_city;

        return $this;
    }

    /**
     * Gets delivery_county
     * @return string
     */
    public function getDeliveryCounty()
    {
        return $this->container['delivery_county'];
    }

    /**
     * Sets delivery_county
     * @param string $delivery_county
     * @return $this
     */
    public function setDeliveryCounty($delivery_county)
    {
        $this->container['delivery_county'] = $delivery_county;

        return $this;
    }

    /**
     * Gets delivery_postcode
     * @return string
     */
    public function getDeliveryPostcode()
    {
        return $this->container['delivery_postcode'];
    }

    /**
     * Sets delivery_postcode
     * @param string $delivery_postcode
     * @return $this
     */
    public function setDeliveryPostcode($delivery_postcode)
    {
        $this->container['delivery_postcode'] = $delivery_postcode;

        return $this;
    }

    /**
     * Gets delivery_country
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->container['delivery_country'];
    }

    /**
     * Sets delivery_country
     * @param string $delivery_country
     * @return $this
     */
    public function setDeliveryCountry($delivery_country)
    {
        $this->container['delivery_country'] = $delivery_country;

        return $this;
    }

    /**
     * Gets delivery_telephone
     * @return string
     */
    public function getDeliveryTelephone()
    {
        return $this->container['delivery_telephone'];
    }

    /**
     * Sets delivery_telephone
     * @param string $delivery_telephone
     * @return $this
     */
    public function setDeliveryTelephone($delivery_telephone)
    {
        $this->container['delivery_telephone'] = $delivery_telephone;

        return $this;
    }

    /**
     * Gets shipping_method
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     * @param string $shipping_method
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_cost
     * @return float
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     * @param float $shipping_cost
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets insurance
     * @return float
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     * @param float $insurance
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets discount
     * @return float
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param float $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets voucher_code
     * @return string
     */
    public function getVoucherCode()
    {
        return $this->container['voucher_code'];
    }

    /**
     * Sets voucher_code
     * @param string $voucher_code
     * @return $this
     */
    public function setVoucherCode($voucher_code)
    {
        $this->container['voucher_code'] = $voucher_code;

        return $this;
    }

    /**
     * Gets order_total
     * @return float
     */
    public function getOrderTotal()
    {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total
     * @param float $order_total
     * @return $this
     */
    public function setOrderTotal($order_total)
    {
        $this->container['order_total'] = $order_total;

        return $this;
    }

    /**
     * Gets payment_complete
     * @return bool
     */
    public function getPaymentComplete()
    {
        return $this->container['payment_complete'];
    }

    /**
     * Sets payment_complete
     * @param bool $payment_complete
     * @return $this
     */
    public function setPaymentComplete($payment_complete)
    {
        $this->container['payment_complete'] = $payment_complete;

        return $this;
    }

    /**
     * Gets payments
     * @return \VoloCommerce\Api\v1\Model\Payments
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     * @param \VoloCommerce\Api\v1\Model\Payments $payments
     * @return $this
     */
    public function setPayments($payments)
    {
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets currency_code
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     * @param string $currency_code
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets seller_username
     * @return string
     */
    public function getSellerUsername()
    {
        return $this->container['seller_username'];
    }

    /**
     * Sets seller_username
     * @param string $seller_username
     * @return $this
     */
    public function setSellerUsername($seller_username)
    {
        $this->container['seller_username'] = $seller_username;

        return $this;
    }

    /**
     * Gets order_items
     * @return \VoloCommerce\Api\v1\Model\CreateOrderItems
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     * @param \VoloCommerce\Api\v1\Model\CreateOrderItems $order_items
     * @return $this
     */
    public function setOrderItems($order_items)
    {
        $this->container['order_items'] = $order_items;

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
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets web_order_id
     * @return int
     */
    public function getWebOrderId()
    {
        return $this->container['web_order_id'];
    }

    /**
     * Sets web_order_id
     * @param int $web_order_id
     * @return $this
     */
    public function setWebOrderId($web_order_id)
    {
        $this->container['web_order_id'] = $web_order_id;

        return $this;
    }

    /**
     * Gets trade_sale
     * @return bool
     */
    public function getTradeSale()
    {
        return $this->container['trade_sale'];
    }

    /**
     * Sets trade_sale
     * @param bool $trade_sale
     * @return $this
     */
    public function setTradeSale($trade_sale)
    {
        $this->container['trade_sale'] = $trade_sale;

        return $this;
    }

    /**
     * Gets actual_courier_cost
     * @return double
     */
    public function getActualCourierCost()
    {
        return $this->container['actual_courier_cost'];
    }

    /**
     * Sets actual_courier_cost
     * @param double $actual_courier_cost
     * @return $this
     */
    public function setActualCourierCost($actual_courier_cost)
    {
        $this->container['actual_courier_cost'] = $actual_courier_cost;

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


