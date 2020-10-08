# \VoloCommerce\Api\v1\LocationsApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doRemove**](LocationsApi.md#doRemove) | **DELETE** /locations/{locationId} | Remove Locations
[**doUpdate**](LocationsApi.md#doUpdate) | **PUT** /locations | Update Locations
[**getLocations**](LocationsApi.md#getLocations) | **GET** /locations | Returns locations based on given criteria
[**saveLocations**](LocationsApi.md#saveLocations) | **POST** /locations | Add new locations


# **doRemove**
> doRemove($location_id)

Remove Locations

Remove Location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\LocationsApi();
$location_id = 56; // int | 

try {
    $api_instance->doRemove($location_id);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->doRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **doUpdate**
> \VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse doUpdate($body)

Update Locations

Update Location.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\LocationsApi();
$body = new \VoloCommerce\Api\v1\Model\UpdateLocation(); // \VoloCommerce\Api\v1\Model\UpdateLocation | 

try {
    $result = $api_instance->doUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->doUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateLocation**](../Model/UpdateLocation.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse**](../Model/AddUpdatedLocationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLocations**
> \VoloCommerce\Api\v1\Model\LocationsResponse getLocations($authorization, $x_api_key, $id, $parent_id, $pickable, $physical_location, $virtual_stock, $page_number, $entries_per_page)

Returns locations based on given criteria



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\LocationsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$id = 56; // int | Location ID
$parent_id = 56; // int | ID of the parent location
$pickable = true; // bool | Pickable location?
$physical_location = true; // bool | Physical location?
$virtual_stock = true; // bool | Virtual location?
$page_number = 56; // int | The Page number for pagination
$entries_per_page = 56; // int | No of records in a page to be retrieved

try {
    $result = $api_instance->getLocations($authorization, $x_api_key, $id, $parent_id, $pickable, $physical_location, $virtual_stock, $page_number, $entries_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **id** | **int**| Location ID | [optional]
 **parent_id** | **int**| ID of the parent location | [optional]
 **pickable** | **bool**| Pickable location? | [optional]
 **physical_location** | **bool**| Physical location? | [optional]
 **virtual_stock** | **bool**| Virtual location? | [optional]
 **page_number** | **int**| The Page number for pagination | [optional]
 **entries_per_page** | **int**| No of records in a page to be retrieved | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\LocationsResponse**](../Model/LocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveLocations**
> saveLocations($authorization, $x_api_key, $body)

Add new locations



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\LocationsApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddLocations(); // \VoloCommerce\Api\v1\Model\AddLocations | 

try {
    $api_instance->saveLocations($authorization, $x_api_key, $body);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->saveLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddLocations**](../Model/AddLocations.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

