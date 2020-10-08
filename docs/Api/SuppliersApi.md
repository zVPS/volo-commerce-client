# \VoloCommerce\Api\v1\SuppliersApi

All URIs are relative to *https://api.volocommerce.io/1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**doUpdate**](SuppliersApi.md#doUpdate) | **PUT** /suppliers | Update Supplier
[**getSuppliers**](SuppliersApi.md#getSuppliers) | **GET** /suppliers | Returns a list of suppliers
[**removeSupplier**](SuppliersApi.md#removeSupplier) | **DELETE** /suppliers/{supplierId} | Delete the supplier
[**saveSupplier**](SuppliersApi.md#saveSupplier) | **POST** /suppliers | Add a list of suppliers


# **doUpdate**
> \VoloCommerce\Api\v1\Model\AddUpdatedSupplierResponse doUpdate($body)

Update Supplier

Update Supplier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SuppliersApi();
$body = new \VoloCommerce\Api\v1\Model\UpdateSupplier(); // \VoloCommerce\Api\v1\Model\UpdateSupplier | 

try {
    $result = $api_instance->doUpdate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->doUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VoloCommerce\Api\v1\Model\UpdateSupplier**](../Model/UpdateSupplier.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\AddUpdatedSupplierResponse**](../Model/AddUpdatedSupplierResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSuppliers**
> \VoloCommerce\Api\v1\Model\SuppliersResponse getSuppliers($authorization, $x_api_key, $id, $supplier_code, $supplier_reference, $name, $vat_number, $company_reg_number, $phone, $fax, $email, $contact, $start_modified_date, $end_modified_date)

Returns a list of suppliers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SuppliersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$id = 56; // int | Indicates id of the supplier
$supplier_code = "supplier_code_example"; // string | Indicates supplierCode of the supplier
$supplier_reference = "supplier_reference_example"; // string | Indicates supplierReference of the supplier
$name = "name_example"; // string | Indicates name of the supplier
$vat_number = "vat_number_example"; // string | Indicates vatNumber of the supplier
$company_reg_number = "company_reg_number_example"; // string | Indicates companyRegNumber of the supplier
$phone = "phone_example"; // string | Indicates phone of the supplier
$fax = "fax_example"; // string | Indicates fax of the supplier
$email = "email_example"; // string | Indicates email of the supplier
$contact = "contact_example"; // string | Indicates contact of the supplier
$start_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for comparison by using supplier creation date
$end_modified_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for comparison by using supplier creation date

try {
    $result = $api_instance->getSuppliers($authorization, $x_api_key, $id, $supplier_code, $supplier_reference, $name, $vat_number, $company_reg_number, $phone, $fax, $email, $contact, $start_modified_date, $end_modified_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->getSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **id** | **int**| Indicates id of the supplier | [optional]
 **supplier_code** | **string**| Indicates supplierCode of the supplier | [optional]
 **supplier_reference** | **string**| Indicates supplierReference of the supplier | [optional]
 **name** | **string**| Indicates name of the supplier | [optional]
 **vat_number** | **string**| Indicates vatNumber of the supplier | [optional]
 **company_reg_number** | **string**| Indicates companyRegNumber of the supplier | [optional]
 **phone** | **string**| Indicates phone of the supplier | [optional]
 **fax** | **string**| Indicates fax of the supplier | [optional]
 **email** | **string**| Indicates email of the supplier | [optional]
 **contact** | **string**| Indicates contact of the supplier | [optional]
 **start_modified_date** | **\DateTime**| Start date for comparison by using supplier creation date | [optional]
 **end_modified_date** | **\DateTime**| End date for comparison by using supplier creation date | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\SuppliersResponse**](../Model/SuppliersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSupplier**
> \VoloCommerce\Api\v1\Model\DeleteSupplierResponse removeSupplier($supplier_id, $authorization, $x_api_key)

Delete the supplier



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SuppliersApi();
$supplier_id = 56; // int | Supplier id
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key

try {
    $result = $api_instance->removeSupplier($supplier_id, $authorization, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->removeSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supplier_id** | **int**| Supplier id |
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |

### Return type

[**\VoloCommerce\Api\v1\Model\DeleteSupplierResponse**](../Model/DeleteSupplierResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveSupplier**
> \VoloCommerce\Api\v1\Model\SupplierResponseBeanList saveSupplier($authorization, $x_api_key, $body)

Add a list of suppliers



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new \VoloCommerce\Api\v1\Client\SuppliersApi();
$authorization = "authorization_example"; // string | Auth token
$x_api_key = "x_api_key_example"; // string | API Key
$body = new \VoloCommerce\Api\v1\Model\AddSuppliers(); // \VoloCommerce\Api\v1\Model\AddSuppliers | 

try {
    $result = $api_instance->saveSupplier($authorization, $x_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->saveSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Auth token |
 **x_api_key** | **string**| API Key |
 **body** | [**\VoloCommerce\Api\v1\Model\AddSuppliers**](../Model/AddSuppliers.md)|  | [optional]

### Return type

[**\VoloCommerce\Api\v1\Model\SupplierResponseBeanList**](../Model/SupplierResponseBeanList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json; charset=utf-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

