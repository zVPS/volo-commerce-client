# \VoloCommerce\Api\v1\PurchaseOrdersApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmDelivery**](PurchaseOrdersApi.md#confirmDelivery) | **POST** /purchaseOrders/{purchaseOrderId}/delivery | Confirm Delivery.
[**confirmOrder**](PurchaseOrdersApi.md#confirmOrder) | **POST** /purchaseOrders/{purchaseOrderId}/confirm | Confirm Purchase Order.
[**doUpdate**](PurchaseOrdersApi.md#doUpdate) | **PUT** /purchaseOrders | Update Purchase Order.
[**getDetails**](PurchaseOrdersApi.md#getDetails) | **GET** /purchaseOrders | Get Purchase Order Details
[**removePurchaseOrder**](PurchaseOrdersApi.md#removePurchaseOrder) | **DELETE** /purchaseOrders/{purchaseOrderId} | Remove Purchase Order
[**removePurchaseOrderItems**](PurchaseOrdersApi.md#removePurchaseOrderItems) | **DELETE** /purchaseOrders/{purchaseOrderId}/orderItem/{purchaseOrderItemId} | Remove Purchase Order Item
[**savePurchaseOrders**](PurchaseOrdersApi.md#savePurchaseOrders) | **POST** /purchaseOrders | Add a list of Purchase Order
[**updateDeliveries**](PurchaseOrdersApi.md#updateDeliveries) | **PUT** /purchaseOrders/{purchaseOrderId}/delivery | Update deliveries.


# **confirmDelivery**
> confirmDelivery($purchase_order_id, $authorization, $x_api_key, $body)

Confirm Delivery.

This is a Delivery Confirm order service call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$purchase_order_id = 56; // int | 
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddConfirmDeliveryRequest(); // \VoloCommerce\Api\v1\Model\AddConfirmDeliveryRequest | 

try {
    $api_instance->confirmDelivery($purchase_order_id, $authorization, $x_api_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->confirmDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **int**|  |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddConfirmDeliveryRequest**](../Model/AddConfirmDeliveryRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmOrder**
> confirmOrder($purchase_order_id, $authorization, $x_api_key)

Confirm Purchase Order.

This is a Purchase Orders Confirm order service call. If supplier not assigned to the purchase order then throws an error, otherwise confirms the order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$purchase_order_id = 56; // int | 
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $api_instance->confirmOrder($purchase_order_id, $authorization, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->confirmOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **int**|  |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doUpdate**
> doUpdate($authorization, $x_api_key, $body)

Update Purchase Order.

Update Purchase Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\UpdatePurchaseOrder(); // \VoloCommerce\Api\v1\Model\UpdatePurchaseOrder | 

try {
    $api_instance->doUpdate($authorization, $x_api_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->doUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\UpdatePurchaseOrder**](../Model/UpdatePurchaseOrder.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDetails**
> \VoloCommerce\Api\v1\Model\PurchaseOrderResponse getDetails($authorization, $x_api_key, $id, $purchase_order_number, $start_creation_date, $end_creation_date, $start_confirm_date, $end_confirm_date, $order_status, $order_type, $location_id, $supplier_id, $page_number, $entries_per_page)

Get Purchase Order Details



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$id = 56; // int | Purchase Order ID
$purchase_order_number = "purchase_order_number_example"; // string | Purchase Order Number
$start_creation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using purchase order creation date
$end_creation_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using purchase order creation date
$start_confirm_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using purchase order confirm date
$end_confirm_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using purchase order confirm date
$order_status = "order_status_example"; // string | Order Status
$order_type = "order_type_example"; // string | Order Type
$location_id = 56; // int | Location Id
$supplier_id = 56; // int | Supplier Id
$page_number = 56; // int | Page number
$entries_per_page = 56; // int | No of entries per page

try {
    $result = $api_instance->getDetails($authorization, $x_api_key, $id, $purchase_order_number, $start_creation_date, $end_creation_date, $start_confirm_date, $end_confirm_date, $order_status, $order_type, $location_id, $supplier_id, $page_number, $entries_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **id** | **int**| Purchase Order ID | [optional]
 **purchase_order_number** | **string**| Purchase Order Number | [optional]
 **start_creation_date** | **\DateTime**| Start date for comparison by using purchase order creation date | [optional]
 **end_creation_date** | **\DateTime**| End date for comparison by using purchase order creation date | [optional]
 **start_confirm_date** | **\DateTime**| Start date for comparison by using purchase order confirm date | [optional]
 **end_confirm_date** | **\DateTime**| End date for comparison by using purchase order confirm date | [optional]
 **order_status** | **string**| Order Status | [optional]
 **order_type** | **string**| Order Type | [optional]
 **location_id** | **int**| Location Id | [optional]
 **supplier_id** | **int**| Supplier Id | [optional]
 **page_number** | **int**| Page number | [optional]
 **entries_per_page** | **int**| No of entries per page | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\PurchaseOrderResponse**](../Model/PurchaseOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePurchaseOrder**
> removePurchaseOrder($purchase_order_id, $authorization, $x_api_key)

Remove Purchase Order

Delete Purchase Order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$purchase_order_id = 56; // int | Purchase Order ID
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $api_instance->removePurchaseOrder($purchase_order_id, $authorization, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->removePurchaseOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **int**| Purchase Order ID |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removePurchaseOrderItems**
> removePurchaseOrderItems($purchase_order_id, $purchase_order_item_id, $authorization, $x_api_key)

Remove Purchase Order Item

This is a Purchase Order remove product service call. Removes the associated product mapping for the purchase order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$purchase_order_id = 56; // int | Purchase Order ID
$purchase_order_item_id = 56; // int | Purchase Order Item ID
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $api_instance->removePurchaseOrderItems($purchase_order_id, $purchase_order_item_id, $authorization, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->removePurchaseOrderItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **int**| Purchase Order ID |
 **purchase_order_item_id** | **int**| Purchase Order Item ID |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **savePurchaseOrders**
> \VoloCommerce\Api\v1\Model\PurchaseOrderResponseBeanList savePurchaseOrders($authorization, $x_api_key, $body)

Add a list of Purchase Order



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddPurchaseOrders(); // \VoloCommerce\Api\v1\Model\AddPurchaseOrders | 

try {
    $result = $api_instance->savePurchaseOrders($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->savePurchaseOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddPurchaseOrders**](../Model/AddPurchaseOrders.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\PurchaseOrderResponseBeanList**](../Model/PurchaseOrderResponseBeanList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDeliveries**
> updateDeliveries($purchase_order_id, $authorization, $x_api_key, $body)

Update deliveries.

Update deliveries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\PurchaseOrdersApi();
$purchase_order_id = 56; // int | 
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\UpdateDelivery(); // \VoloCommerce\Api\v1\Model\UpdateDelivery | 

try {
    $api_instance->updateDeliveries($purchase_order_id, $authorization, $x_api_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->updateDeliveries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_order_id** | **int**|  |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateDelivery**](../Model/UpdateDelivery.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

