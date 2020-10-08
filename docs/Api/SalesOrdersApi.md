# \VoloCommerce\Api\v1\SalesOrdersApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderHistories**](SalesOrdersApi.md#addOrderHistories) | **PUT** /salesOrders/histories | Add history entries/notes to sales orders
[**addOrderItem**](SalesOrdersApi.md#addOrderItem) | **POST** /salesOrders/{espOrderNo}/orderItems | Add Order Items for sales order
[**deleteOrderItems**](SalesOrdersApi.md#deleteOrderItems) | **DELETE** /salesOrders/{espOrderNo}/orderItems/{orderItemId} | Deletes order items from order
[**getAmazonRefundReasons**](SalesOrdersApi.md#getAmazonRefundReasons) | **GET** /salesOrders/amazon/refund/reasons | Returns a list of Amazon refund reasons
[**getOrderCredits**](SalesOrdersApi.md#getOrderCredits) | **GET** /salesOrders/credits | Returns array of order credits
[**getOrderHistories**](SalesOrdersApi.md#getOrderHistories) | **GET** /salesOrders/histories | Returns order histories for given order numbers
[**getOrderStatuses**](SalesOrdersApi.md#getOrderStatuses) | **GET** /salesOrders/statuses | Returns List of all Sales Order Statuses
[**getOrders**](SalesOrdersApi.md#getOrders) | **GET** /salesOrders | Returns a list of orders
[**getSalesOrderFlags**](SalesOrdersApi.md#getSalesOrderFlags) | **GET** /salesOrders/flags/{flagType} | Returns List Sales order flags
[**getSellerIds**](SalesOrdersApi.md#getSellerIds) | **GET** /salesOrders/sellers | Returns a list of seller ids
[**getStockActions**](SalesOrdersApi.md#getStockActions) | **GET** /salesOrders/refund/stockActions | Returns stock actions to process refunds
[**issueRefund**](SalesOrdersApi.md#issueRefund) | **POST** /salesOrders/{espOrderNo}/refund | Issue Refund
[**saveOrders**](SalesOrdersApi.md#saveOrders) | **POST** /salesOrders | Create orders within Volo
[**savePayment**](SalesOrdersApi.md#savePayment) | **POST** /salesOrders/{espOrderNo}/payments | Payment details for SalesOrder within Volo
[**updateOrderItems**](SalesOrdersApi.md#updateOrderItems) | **PUT** /salesOrders/{espOrderNo}/orderItems | Update to an order Item
[**updateOrders**](SalesOrdersApi.md#updateOrders) | **PUT** /salesOrders | Update order details
[**updateOrdersAsync**](SalesOrdersApi.md#updateOrdersAsync) | **PUT** /salesOrders/async | Updates order details
[**updateSalesOrderPayment**](SalesOrdersApi.md#updateSalesOrderPayment) | **PUT** /salesOrders/{espOrderNo}/payments/{paymentId} | Update payment details of sales order


# **addOrderHistories**
> \VoloCommerce\Api\v1\Model\MessageResponse addOrderHistories($authorization, $x_api_key, $body)

Add history entries/notes to sales orders



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\OrderHistories(); // \VoloCommerce\Api\v1\Model\OrderHistories | 

try {
    $result = $api_instance->addOrderHistories($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->addOrderHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\OrderHistories**](../Model/OrderHistories.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOrderItem**
> \VoloCommerce\Api\v1\Model\AddOrderItemResponse addOrderItem($esp_order_no, $authorization, $x_api_key, $body)

Add Order Items for sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | EspOrderNo
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddSalesOrderItemsRequest(); // \VoloCommerce\Api\v1\Model\AddSalesOrderItemsRequest | Add Sales OrderItem

try {
    $result = $api_instance->addOrderItem($esp_order_no, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->addOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**| EspOrderNo |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddSalesOrderItemsRequest**](../Model/AddSalesOrderItemsRequest.md)| Add Sales OrderItem | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\AddOrderItemResponse**](../Model/AddOrderItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderItems**
> \VoloCommerce\Api\v1\Model\DeleteOrderItemsResponse deleteOrderItems($esp_order_no, $order_item_id, $authorization, $x_api_key)

Deletes order items from order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | EspOrderNo to fetch relevant Order
$order_item_id = 56; // int | orderItemId to fetch relevant item
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->deleteOrderItems($esp_order_no, $order_item_id, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->deleteOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**| EspOrderNo to fetch relevant Order |
 **order_item_id** | **int**| orderItemId to fetch relevant item |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\DeleteOrderItemsResponse**](../Model/DeleteOrderItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAmazonRefundReasons**
> \VoloCommerce\Api\v1\Model\AmazonRefundReasonResponse getAmazonRefundReasons($authorization, $x_api_key)

Returns a list of Amazon refund reasons



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getAmazonRefundReasons($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getAmazonRefundReasons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\AmazonRefundReasonResponse**](../Model/AmazonRefundReasonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderCredits**
> \VoloCommerce\Api\v1\Model\OrderCreditResponse getOrderCredits($authorization, $x_api_key, $start_date, $end_date)

Returns array of order credits



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using order creation date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using order creation date

try {
    $result = $api_instance->getOrderCredits($authorization, $x_api_key, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getOrderCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **start_date** | **\DateTime**| Start date for comparison by using order creation date | [optional]
 **end_date** | **\DateTime**| End date for comparison by using order creation date | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\OrderCreditResponse**](../Model/OrderCreditResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderHistories**
> \VoloCommerce\Api\v1\Model\OrderHistoryResponse getOrderHistories($authorization, $x_api_key, $esp_order_no)

Returns order histories for given order numbers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$esp_order_no = array(56); // int[] | 

try {
    $result = $api_instance->getOrderHistories($authorization, $x_api_key, $esp_order_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getOrderHistories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **esp_order_no** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\OrderHistoryResponse**](../Model/OrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderStatuses**
> \VoloCommerce\Api\v1\Model\OrderStatusResponse getOrderStatuses($authorization, $x_api_key)

Returns List of all Sales Order Statuses



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getOrderStatuses($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\OrderStatusResponse**](../Model/OrderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \VoloCommerce\Api\v1\Model\OrdersResponse getOrders($authorization, $x_api_key, $start_date, $end_date, $order_source, $seller_id, $paid, $entries_per_page, $page_number, $customer_email, $include_credits, $start_modified_date, $end_modified_date, $esp_order_no, $order_status, $flag1, $flag2, $courier_name, $fulfilment_type, $trade_sale, $supplier_id, $paid_status, $picked, $posted_batch_id, $back_order, $external_order_reference, $invoice_number, $stock_number, $courier_service, $currency_code)

Returns a list of orders



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using order creation date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using order creation date
$order_source = "order_source_example"; // string | Source of the order
$seller_id = 56; // int | Indicates sellerId of the order
$paid = true; // bool | Flag indicates the orders is paid or not
$entries_per_page = 56; // int | No of records in a page to be retrieved
$page_number = 56; // int | The Page number for pagination
$customer_email = "customer_email_example"; // string | Customer Email
$include_credits = true; // bool | Include Credits?
$start_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using order update date
$end_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using order update date
$esp_order_no = 56; // int | ESP Order Number
$order_status = "order_status_example"; // string | Indicates status of the order
$flag1 = "flag1_example"; // string | Order flag type 1
$flag2 = "flag2_example"; // string | Order flag type 2
$courier_name = "courier_name_example"; // string | Order Courier Name
$fulfilment_type = "fulfilment_type_example"; // string | Fulfilment Type: Valid values : \"MERCHANT\" OR \"AMAZON_FBA\"
$trade_sale = true; // bool | isTradeSale?
$supplier_id = 56; // int | Supplier ID
$paid_status = "paid_status_example"; // string | Paid status
$picked = true; // bool | Indicates picked status
$posted_batch_id = 56; // int | Payment postedBatch Id
$back_order = true; // bool | Indicates Back Order status
$external_order_reference = "external_order_reference_example"; // string | External Order Reference
$invoice_number = "invoice_number_example"; // string | Invoice Number
$stock_number = "stock_number_example"; // string | Stock Number
$courier_service = "courier_service_example"; // string | Courier Service
$currency_code = "currency_code_example"; // string | Currency Code

try {
    $result = $api_instance->getOrders($authorization, $x_api_key, $start_date, $end_date, $order_source, $seller_id, $paid, $entries_per_page, $page_number, $customer_email, $include_credits, $start_modified_date, $end_modified_date, $esp_order_no, $order_status, $flag1, $flag2, $courier_name, $fulfilment_type, $trade_sale, $supplier_id, $paid_status, $picked, $posted_batch_id, $back_order, $external_order_reference, $invoice_number, $stock_number, $courier_service, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **start_date** | **\DateTime**| Start date for comparison by using order creation date | [optional]
 **end_date** | **\DateTime**| End date for comparison by using order creation date | [optional]
 **order_source** | **string**| Source of the order | [optional]
 **seller_id** | **int**| Indicates sellerId of the order | [optional]
 **paid** | **bool**| Flag indicates the orders is paid or not | [optional]
 **entries_per_page** | **int**| No of records in a page to be retrieved | [optional]
 **page_number** | **int**| The Page number for pagination | [optional]
 **customer_email** | **string**| Customer Email | [optional]
 **include_credits** | **bool**| Include Credits? | [optional]
 **start_modified_date** | **\DateTime**| Start date for comparison by using order update date | [optional]
 **end_modified_date** | **\DateTime**| End date for comparison by using order update date | [optional]
 **esp_order_no** | **int**| ESP Order Number | [optional]
 **order_status** | **string**| Indicates status of the order | [optional]
 **flag1** | **string**| Order flag type 1 | [optional]
 **flag2** | **string**| Order flag type 2 | [optional]
 **courier_name** | **string**| Order Courier Name | [optional]
 **fulfilment_type** | **string**| Fulfilment Type: Valid values : \&quot;MERCHANT\&quot; OR \&quot;AMAZON_FBA\&quot; | [optional]
 **trade_sale** | **bool**| isTradeSale? | [optional]
 **supplier_id** | **int**| Supplier ID | [optional]
 **paid_status** | **string**| Paid status | [optional]
 **picked** | **bool**| Indicates picked status | [optional]
 **posted_batch_id** | **int**| Payment postedBatch Id | [optional]
 **back_order** | **bool**| Indicates Back Order status | [optional]
 **external_order_reference** | **string**| External Order Reference | [optional]
 **invoice_number** | **string**| Invoice Number | [optional]
 **stock_number** | **string**| Stock Number | [optional]
 **courier_service** | **string**| Courier Service | [optional]
 **currency_code** | **string**| Currency Code | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\OrdersResponse**](../Model/OrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSalesOrderFlags**
> \VoloCommerce\Api\v1\Model\FlagsResponse getSalesOrderFlags($flag_type, $authorization, $x_api_key)

Returns List Sales order flags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$flag_type = "flag_type_example"; // string | Flag Type
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getSalesOrderFlags($flag_type, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSalesOrderFlags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **flag_type** | **string**| Flag Type |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\FlagsResponse**](../Model/FlagsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSellerIds**
> \VoloCommerce\Api\v1\Model\SellerIdResponse getSellerIds($authorization, $x_api_key, $id, $source, $seller_name)

Returns a list of seller ids



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$id = 56; // int | Id to fetch relevant sellers
$source = "source_example"; // string | Source - possible values are WWW,Amazon,Ebay,Manual,Marketplace
$seller_name = "seller_name_example"; // string | Seller name to compare and fetch seller details

try {
    $result = $api_instance->getSellerIds($authorization, $x_api_key, $id, $source, $seller_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getSellerIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **id** | **int**| Id to fetch relevant sellers | [optional]
 **source** | **string**| Source - possible values are WWW,Amazon,Ebay,Manual,Marketplace | [optional]
 **seller_name** | **string**| Seller name to compare and fetch seller details | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\SellerIdResponse**](../Model/SellerIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStockActions**
> \VoloCommerce\Api\v1\Model\StockActionsResultBean getStockActions($authorization, $x_api_key)

Returns stock actions to process refunds



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getStockActions($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->getStockActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\StockActionsResultBean**](../Model/StockActionsResultBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueRefund**
> \VoloCommerce\Api\v1\Model\SalesOrdersRefundResponseDTO issueRefund($esp_order_no, $authorization, $x_api_key, $body)

Issue Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | 
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\IssueRefundParams(); // \VoloCommerce\Api\v1\Model\IssueRefundParams | Issue refund params

try {
    $result = $api_instance->issueRefund($esp_order_no, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->issueRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**|  |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\IssueRefundParams**](../Model/IssueRefundParams.md)| Issue refund params | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\SalesOrdersRefundResponseDTO**](../Model/SalesOrdersRefundResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveOrders**
> \VoloCommerce\Api\v1\Model\AddOrderResponse saveOrders($authorization, $x_api_key, $body)

Create orders within Volo



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddSalesOrdersBean(); // \VoloCommerce\Api\v1\Model\AddSalesOrdersBean | 

try {
    $result = $api_instance->saveOrders($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->saveOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddSalesOrdersBean**](../Model/AddSalesOrdersBean.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\AddOrderResponse**](../Model/AddOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **savePayment**
> \VoloCommerce\Api\v1\Model\CreateSalesOrderPaymentResponse savePayment($esp_order_no, $authorization, $x_api_key, $body)

Payment details for SalesOrder within Volo



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | EspOrderNo
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\CreateSalesOrderPaymentBean(); // \VoloCommerce\Api\v1\Model\CreateSalesOrderPaymentBean | Payment details for SalesOrder

try {
    $result = $api_instance->savePayment($esp_order_no, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->savePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**| EspOrderNo |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\CreateSalesOrderPaymentBean**](../Model/CreateSalesOrderPaymentBean.md)| Payment details for SalesOrder | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\CreateSalesOrderPaymentResponse**](../Model/CreateSalesOrderPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderItems**
> \VoloCommerce\Api\v1\Model\UpdateOrderItemsResponse updateOrderItems($esp_order_no, $authorization, $x_api_key, $body)

Update to an order Item



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | EspOrderNo to fetch relevant Order
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\ItemUpdateInputList(); // \VoloCommerce\Api\v1\Model\ItemUpdateInputList | list of updated items

try {
    $result = $api_instance->updateOrderItems($esp_order_no, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->updateOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**| EspOrderNo to fetch relevant Order |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\ItemUpdateInputList**](../Model/ItemUpdateInputList.md)| list of updated items | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\UpdateOrderItemsResponse**](../Model/UpdateOrderItemsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrders**
> \VoloCommerce\Api\v1\Model\MessageResponse updateOrders($authorization, $x_api_key, $body)

Update order details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\UpdateSalesOrdersBean(); // \VoloCommerce\Api\v1\Model\UpdateSalesOrdersBean | 

try {
    $result = $api_instance->updateOrders($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->updateOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateSalesOrdersBean**](../Model/UpdateSalesOrdersBean.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrdersAsync**
> \VoloCommerce\Api\v1\Model\UpdateAsyncResponse updateOrdersAsync($authorization, $x_api_key, $body)

Updates order details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\UpdateSalesOrderAsyncBean(); // \VoloCommerce\Api\v1\Model\UpdateSalesOrderAsyncBean | List of IncomingOrdersUpdate to update

try {
    $result = $api_instance->updateOrdersAsync($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->updateOrdersAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateSalesOrderAsyncBean**](../Model/UpdateSalesOrderAsyncBean.md)| List of IncomingOrdersUpdate to update | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\UpdateAsyncResponse**](../Model/UpdateAsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSalesOrderPayment**
> \VoloCommerce\Api\v1\Model\UpdateSalesOrderPaymentResponse updateSalesOrderPayment($esp_order_no, $payment_id, $authorization, $x_api_key, $body)

Update payment details of sales order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SalesOrdersApi();
$esp_order_no = 56; // int | EspOrderNo
$payment_id = 56; // int | Id of PaymentTransactions
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\UpdateSalesOrderPaymentRequest(); // \VoloCommerce\Api\v1\Model\UpdateSalesOrderPaymentRequest | Update payment detail of salesorder

try {
    $result = $api_instance->updateSalesOrderPayment($esp_order_no, $payment_id, $authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->updateSalesOrderPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_order_no** | **int**| EspOrderNo |
 **payment_id** | **int**| Id of PaymentTransactions |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateSalesOrderPaymentRequest**](../Model/UpdateSalesOrderPaymentRequest.md)| Update payment detail of salesorder | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\UpdateSalesOrderPaymentResponse**](../Model/UpdateSalesOrderPaymentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

