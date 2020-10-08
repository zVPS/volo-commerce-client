# \VoloCommerce\Api\v1\ProductsApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllExportableFields**](ProductsApi.md#getAllExportableFields) | **GET** /products/fieldNames | Returns a list of Exportable Fields
[**getCourierName**](ProductsApi.md#getCourierName) | **GET** /products/ebay/courierNames | Returns the courier name used on eBay template for products
[**getInventoryFlags**](ProductsApi.md#getInventoryFlags) | **GET** /products/flags/{flagType} | Returns a list of inventory flags
[**getPartialProducts**](ProductsApi.md#getPartialProducts) | **GET** /products/partial | Returns smaller standard set of product data
[**getProductImages**](ProductsApi.md#getProductImages) | **GET** /products/images | Returns a list of Product Image
[**getProductPriceNames**](ProductsApi.md#getProductPriceNames) | **GET** /products/priceLevels | Returns a list of Product Price Names
[**getProductPrices**](ProductsApi.md#getProductPrices) | **GET** /products/prices | Returns a list of Product Image
[**getProducts**](ProductsApi.md#getProducts) | **GET** /products | Returns standard set of product data for products matching given search criteria
[**getQuestionMessage**](ProductsApi.md#getQuestionMessage) | **GET** /products/question/message | Returns eBay question content
[**getQuestions**](ProductsApi.md#getQuestions) | **GET** /products/questions | Returns a list of eBay product question data
[**getStockLevels**](ProductsApi.md#getStockLevels) | **GET** /products/stockLevels | Returns product stock levels
[**getStockLevels_0**](ProductsApi.md#getStockLevels_0) | **GET** /products/stockLevels/locations | Returns the locations and quantity of where given stock numbers are stored
[**importProducts**](ProductsApi.md#importProducts) | **POST** /products/import | Import product data
[**searchProductsByField**](ProductsApi.md#searchProductsByField) | **POST** /products/searchByField | Define product data to be retrieved
[**sendProductAnswer**](ProductsApi.md#sendProductAnswer) | **POST** /products/question/reply | Send reply to eBay product questions
[**updateProducts**](ProductsApi.md#updateProducts) | **PUT** /products/partial | Update stock level and prices of products
[**updateProductsAsync**](ProductsApi.md#updateProductsAsync) | **PUT** /products/partial/async | Update stock level and prices of products asynchronously


# **getAllExportableFields**
> \VoloCommerce\Api\v1\Model\ProductPriceNamesResponse getAllExportableFields($authorization, $x_api_key)

Returns a list of Exportable Fields



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getAllExportableFields($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getAllExportableFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\ProductPriceNamesResponse**](../Model/ProductPriceNamesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourierName**
> \VoloCommerce\Api\v1\Model\EbayCourierNameResponse getCourierName($authorization, $x_api_key, $stock_number)

Returns the courier name used on eBay template for products



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | 

try {
    $result = $api_instance->getCourierName($authorization, $x_api_key, $stock_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getCourierName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\EbayCourierNameResponse**](../Model/EbayCourierNameResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryFlags**
> \VoloCommerce\Api\v1\Model\FlagsResponse getInventoryFlags($flag_type, $authorization, $x_api_key)

Returns a list of inventory flags



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$flag_type = "flag_type_example"; // string | Flag Type
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getInventoryFlags($flag_type, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getInventoryFlags: ', $e->getMessage(), PHP_EOL;
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

# **getPartialProducts**
> \VoloCommerce\Api\v1\Model\PartialProductResult getPartialProducts($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $available_qty1, $available_qty2, $available_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued)

Returns smaller standard set of product data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number
$isbn = "isbn_example"; // string | ISBN
$upc = "upc_example"; // string | UPC
$title = "title_example"; // string | Product Title
$list_on = "list_on_example"; // string | list on
$on_hand_qty1 = 56; // int | On Hand Quantity 1
$on_hand_qty2 = 56; // int | On Hand Quantity 2
$on_hand_comparator = "on_hand_comparator_example"; // string | On Hand Comparator
$available_qty1 = 56; // int | Available Quantity 1
$available_qty2 = 56; // int | Available Quantity 2
$available_comparator = "available_comparator_example"; // string | Available Comparator
$status = "status_example"; // string | Product Status
$supplier_id = 56; // int | Supplier ID
$is_drop_ship = true; // bool | Is Dropship item?
$page_number = 56; // int | Page number
$entries_per_page = 56; // int | No of entries per page
$exclude_listing_sk_us = true; // bool | Exclude Listing SKUs?
$discontinued = true; // bool | Product discontinued?

try {
    $result = $api_instance->getPartialProducts($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $available_qty1, $available_qty2, $available_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getPartialProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]
 **isbn** | **string**| ISBN | [optional]
 **upc** | **string**| UPC | [optional]
 **title** | **string**| Product Title | [optional]
 **list_on** | **string**| list on | [optional]
 **on_hand_qty1** | **int**| On Hand Quantity 1 | [optional]
 **on_hand_qty2** | **int**| On Hand Quantity 2 | [optional]
 **on_hand_comparator** | **string**| On Hand Comparator | [optional]
 **available_qty1** | **int**| Available Quantity 1 | [optional]
 **available_qty2** | **int**| Available Quantity 2 | [optional]
 **available_comparator** | **string**| Available Comparator | [optional]
 **status** | **string**| Product Status | [optional]
 **supplier_id** | **int**| Supplier ID | [optional]
 **is_drop_ship** | **bool**| Is Dropship item? | [optional]
 **page_number** | **int**| Page number | [optional]
 **entries_per_page** | **int**| No of entries per page | [optional]
 **exclude_listing_sk_us** | **bool**| Exclude Listing SKUs? | [optional]
 **discontinued** | **bool**| Product discontinued? | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\PartialProductResult**](../Model/PartialProductResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductImages**
> \VoloCommerce\Api\v1\Model\ProductImageResponse getProductImages($authorization, $x_api_key, $stock_number)

Returns a list of Product Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number

try {
    $result = $api_instance->getProductImages($authorization, $x_api_key, $stock_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\ProductImageResponse**](../Model/ProductImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductPriceNames**
> \VoloCommerce\Api\v1\Model\ProductPriceNamesResponse getProductPriceNames($authorization, $x_api_key)

Returns a list of Product Price Names



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->getProductPriceNames($authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductPriceNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\ProductPriceNamesResponse**](../Model/ProductPriceNamesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductPrices**
> \VoloCommerce\Api\v1\Model\ProductPriceResponse getProductPrices($authorization, $x_api_key, $stock_number, $currency)

Returns a list of Product Image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number
$currency = "currency_example"; // string | Currency

try {
    $result = $api_instance->getProductPrices($authorization, $x_api_key, $stock_number, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]
 **currency** | **string**| Currency | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\ProductPriceResponse**](../Model/ProductPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \VoloCommerce\Api\v1\Model\ProductResultBean getProducts($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued, $description, $description2, $description3, $description4, $description5, $supplier_sku)

Returns standard set of product data for products matching given search criteria

Returns standard set of product data for products matching given search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number
$isbn = "isbn_example"; // string | ISBN
$upc = "upc_example"; // string | UPC
$title = "title_example"; // string | Product Title
$list_on = "list_on_example"; // string | list on
$on_hand_qty1 = 56; // int | On Hand Quantity 1
$on_hand_qty2 = 56; // int | On Hand Quantity 2
$on_hand_comparator = "on_hand_comparator_example"; // string | On Hand Comparator
$status = "status_example"; // string | Product Status
$supplier_id = 56; // int | Supplier ID
$is_drop_ship = true; // bool | Is Dropship item?
$page_number = 56; // int | Page number
$entries_per_page = 56; // int | No of entries per page
$exclude_listing_sk_us = true; // bool | Exclude Listing SKUs?
$discontinued = true; // bool | Product discontinued?
$description = true; // bool | Description needed?
$description2 = true; // bool | Description2 needed?
$description3 = true; // bool | Description3 needed?
$description4 = true; // bool | Description4 needed?
$description5 = true; // bool | Description5 needed?
$supplier_sku = "supplier_sku_example"; // string | Supplier SKU

try {
    $result = $api_instance->getProducts($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued, $description, $description2, $description3, $description4, $description5, $supplier_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]
 **isbn** | **string**| ISBN | [optional]
 **upc** | **string**| UPC | [optional]
 **title** | **string**| Product Title | [optional]
 **list_on** | **string**| list on | [optional]
 **on_hand_qty1** | **int**| On Hand Quantity 1 | [optional]
 **on_hand_qty2** | **int**| On Hand Quantity 2 | [optional]
 **on_hand_comparator** | **string**| On Hand Comparator | [optional]
 **status** | **string**| Product Status | [optional]
 **supplier_id** | **int**| Supplier ID | [optional]
 **is_drop_ship** | **bool**| Is Dropship item? | [optional]
 **page_number** | **int**| Page number | [optional]
 **entries_per_page** | **int**| No of entries per page | [optional]
 **exclude_listing_sk_us** | **bool**| Exclude Listing SKUs? | [optional]
 **discontinued** | **bool**| Product discontinued? | [optional]
 **description** | **bool**| Description needed? | [optional]
 **description2** | **bool**| Description2 needed? | [optional]
 **description3** | **bool**| Description3 needed? | [optional]
 **description4** | **bool**| Description4 needed? | [optional]
 **description5** | **bool**| Description5 needed? | [optional]
 **supplier_sku** | **string**| Supplier SKU | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\ProductResultBean**](../Model/ProductResultBean.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestionMessage**
> \VoloCommerce\Api\v1\Model\QuestionMessage getQuestionMessage($authorization, $x_api_key, $question_id, $message_id)

Returns eBay question content



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$question_id = 56; // int | Question ID
$message_id = "message_id_example"; // string | Message ID

try {
    $result = $api_instance->getQuestionMessage($authorization, $x_api_key, $question_id, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getQuestionMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **question_id** | **int**| Question ID | [optional]
 **message_id** | **string**| Message ID | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\QuestionMessage**](../Model/QuestionMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getQuestions**
> \VoloCommerce\Api\v1\Model\QuestionResult getQuestions($authorization, $x_api_key, $sender_user_id, $subject, $item_number, $product_title, $from_date, $to_date, $entries_per_page, $page_number)

Returns a list of eBay product question data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$sender_user_id = "sender_user_id_example"; // string | Sender User ID
$subject = "subject_example"; // string | Subject
$item_number = "item_number_example"; // string | eBay item number
$product_title = "product_title_example"; // string | Product Title
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date from
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date to
$entries_per_page = 56; // int | No of entries per page
$page_number = 56; // int | Page number

try {
    $result = $api_instance->getQuestions($authorization, $x_api_key, $sender_user_id, $subject, $item_number, $product_title, $from_date, $to_date, $entries_per_page, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getQuestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **sender_user_id** | **string**| Sender User ID | [optional]
 **subject** | **string**| Subject | [optional]
 **item_number** | **string**| eBay item number | [optional]
 **product_title** | **string**| Product Title | [optional]
 **from_date** | **\DateTime**| Date from | [optional]
 **to_date** | **\DateTime**| Date to | [optional]
 **entries_per_page** | **int**| No of entries per page | [optional]
 **page_number** | **int**| Page number | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\QuestionResult**](../Model/QuestionResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStockLevels**
> \VoloCommerce\Api\v1\Model\StockLevelResult getStockLevels($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $available_qty1, $available_qty2, $available_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued)

Returns product stock levels



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number
$isbn = "isbn_example"; // string | ISBN
$upc = "upc_example"; // string | UPC
$title = "title_example"; // string | Product Title
$list_on = "list_on_example"; // string | list on
$on_hand_qty1 = 56; // int | On Hand Quantity 1
$on_hand_qty2 = 56; // int | On Hand Quantity 2
$on_hand_comparator = "on_hand_comparator_example"; // string | On Hand Comparator
$available_qty1 = 56; // int | Available Quantity 1
$available_qty2 = 56; // int | Available Quantity 2
$available_comparator = "available_comparator_example"; // string | Available Comparator
$status = "status_example"; // string | Product Status
$supplier_id = 56; // int | Supplier ID
$is_drop_ship = true; // bool | Is Dropship item?
$page_number = 56; // int | Page number
$entries_per_page = 56; // int | No of entries per page
$exclude_listing_sk_us = true; // bool | Exclude Listing SKUs?
$discontinued = true; // bool | Product discontinued?

try {
    $result = $api_instance->getStockLevels($authorization, $x_api_key, $stock_number, $isbn, $upc, $title, $list_on, $on_hand_qty1, $on_hand_qty2, $on_hand_comparator, $available_qty1, $available_qty2, $available_comparator, $status, $supplier_id, $is_drop_ship, $page_number, $entries_per_page, $exclude_listing_sk_us, $discontinued);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getStockLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]
 **isbn** | **string**| ISBN | [optional]
 **upc** | **string**| UPC | [optional]
 **title** | **string**| Product Title | [optional]
 **list_on** | **string**| list on | [optional]
 **on_hand_qty1** | **int**| On Hand Quantity 1 | [optional]
 **on_hand_qty2** | **int**| On Hand Quantity 2 | [optional]
 **on_hand_comparator** | **string**| On Hand Comparator | [optional]
 **available_qty1** | **int**| Available Quantity 1 | [optional]
 **available_qty2** | **int**| Available Quantity 2 | [optional]
 **available_comparator** | **string**| Available Comparator | [optional]
 **status** | **string**| Product Status | [optional]
 **supplier_id** | **int**| Supplier ID | [optional]
 **is_drop_ship** | **bool**| Is Dropship item? | [optional]
 **page_number** | **int**| Page number | [optional]
 **entries_per_page** | **int**| No of entries per page | [optional]
 **exclude_listing_sk_us** | **bool**| Exclude Listing SKUs? | [optional]
 **discontinued** | **bool**| Product discontinued? | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\StockLevelResult**](../Model/StockLevelResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStockLevels_0**
> \VoloCommerce\Api\v1\Model\StockLocationResponse getStockLevels_0($authorization, $x_api_key, $stock_number)

Returns the locations and quantity of where given stock numbers are stored



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$stock_number = "stock_number_example"; // string | Stock Number

try {
    $result = $api_instance->getStockLevels_0($authorization, $x_api_key, $stock_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getStockLevels_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **stock_number** | **string**| Stock Number | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\StockLocationResponse**](../Model/StockLocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importProducts**
> \VoloCommerce\Api\v1\Model\ImportProductsResponse importProducts($authorization, $x_api_key, $body)

Import product data

The POST request allows the developer to create or update products in custom export fashion by providing required fields in the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\CustomImportRequest(); // \VoloCommerce\Api\v1\Model\CustomImportRequest | 

try {
    $result = $api_instance->importProducts($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->importProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\CustomImportRequest**](../Model/CustomImportRequest.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\ImportProductsResponse**](../Model/ImportProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchProductsByField**
> \VoloCommerce\Api\v1\Model\ProductSearchByFieldResponse searchProductsByField($authorization, $x_api_key, $body)

Define product data to be retrieved

The PUT request allows the developer to retrieve in custom export fashion by providing required fields in the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\ProductsSearchByFieldRequest(); // \VoloCommerce\Api\v1\Model\ProductsSearchByFieldRequest | 

try {
    $result = $api_instance->searchProductsByField($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->searchProductsByField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\ProductsSearchByFieldRequest**](../Model/ProductsSearchByFieldRequest.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\ProductSearchByFieldResponse**](../Model/ProductSearchByFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendProductAnswer**
> \VoloCommerce\Api\v1\Model\MessageResponse sendProductAnswer($authorization, $x_api_key, $body)

Send reply to eBay product questions



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\ReplyProductQuestionBean(); // \VoloCommerce\Api\v1\Model\ReplyProductQuestionBean | 

try {
    $result = $api_instance->sendProductAnswer($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->sendProductAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\ReplyProductQuestionBean**](../Model/ReplyProductQuestionBean.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\MessageResponse**](../Model/MessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProducts**
> \VoloCommerce\Api\v1\Model\PartialProductUpdateResult updateProducts($authorization, $x_api_key, $body)

Update stock level and prices of products



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\PartialProductUpdates(); // \VoloCommerce\Api\v1\Model\PartialProductUpdates | 

try {
    $result = $api_instance->updateProducts($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\PartialProductUpdates**](../Model/PartialProductUpdates.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\PartialProductUpdateResult**](../Model/PartialProductUpdateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProductsAsync**
> \VoloCommerce\Api\v1\Model\UpdateProductAsyncResponse updateProductsAsync($authorization, $x_api_key, $body)

Update stock level and prices of products asynchronously



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\ProductsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\PartialProductUpdates(); // \VoloCommerce\Api\v1\Model\PartialProductUpdates | Partial products objects that needs to be updated

try {
    $result = $api_instance->updateProductsAsync($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProductsAsync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\PartialProductUpdates**](../Model/PartialProductUpdates.md)| Partial products objects that needs to be updated | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\UpdateProductAsyncResponse**](../Model/UpdateProductAsyncResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

