<?php
/**
 * CustomersApi
 * PHP version 5
 *
 * @category Class
 * @package  \VoloCommerce\Api\v1
 * @author   Swagger Codegen team
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

namespace VoloCommerce\Api\v1\Client;

use \VoloCommerce\Api\v1\ApiClient;
use \VoloCommerce\Api\v1\ApiException;
use \VoloCommerce\Api\v1\Configuration;
use \VoloCommerce\Api\v1\ObjectSerializer;

/**
 * CustomersApi Class Doc Comment
 *
 * @category Class
 * @package  \VoloCommerce\Api\v1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomersApi
{
    /**
     * API Client
     *
     * @var \VoloCommerce\Api\v1\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \VoloCommerce\Api\v1\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\VoloCommerce\Api\v1\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \VoloCommerce\Api\v1\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \VoloCommerce\Api\v1\ApiClient $apiClient set the API client
     *
     * @return CustomersApi
     */
    public function setApiClient(\VoloCommerce\Api\v1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation doUpdate
     *
     * Update Customer
     *
     * @param \VoloCommerce\Api\v1\Model\UpdateCustomer $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return void
     */
    public function doUpdate($body = null)
    {
        list($response) = $this->doUpdateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation doUpdateWithHttpInfo
     *
     * Update Customer
     *
     * @param \VoloCommerce\Api\v1\Model\UpdateCustomer $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function doUpdateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/customers'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getCustomers
     *
     * Returns a list of customers
     *
     * @param int $id Customer ID (optional)
     * @param string $name First name or last name of the customer (optional)
     * @param string $company_name Company Name (optional)
     * @param string $postcode Postcode of the address (optional)
     * @param string $email Email address of the customer (optional)
     * @param string $phone Phone number of the customer (optional)
     * @param string $merchant_type Merchant type of the customer (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return \VoloCommerce\Api\v1\Model\CustomerResponse
     */
    public function getCustomers($id = null, $name = null, $company_name = null, $postcode = null, $email = null, $phone = null, $merchant_type = null)
    {
        list($response) = $this->getCustomersWithHttpInfo($id, $name, $company_name, $postcode, $email, $phone, $merchant_type);
        return $response;
    }

    /**
     * Operation getCustomersWithHttpInfo
     *
     * Returns a list of customers
     *
     * @param int $id Customer ID (optional)
     * @param string $name First name or last name of the customer (optional)
     * @param string $company_name Company Name (optional)
     * @param string $postcode Postcode of the address (optional)
     * @param string $email Email address of the customer (optional)
     * @param string $phone Phone number of the customer (optional)
     * @param string $merchant_type Merchant type of the customer (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of \VoloCommerce\Api\v1\Model\CustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomersWithHttpInfo($id = null, $name = null, $company_name = null, $postcode = null, $email = null, $phone = null, $merchant_type = null)
    {
        
        // parse inputs
        $resourcePath = "/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = $this->apiClient->getSerializer()->toQueryValue($name);
        }
        // query params
        if ($company_name !== null) {
            $queryParams['companyName'] = $this->apiClient->getSerializer()->toQueryValue($company_name);
        }
        // query params
        if ($postcode !== null) {
            $queryParams['postcode'] = $this->apiClient->getSerializer()->toQueryValue($postcode);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($merchant_type !== null) {
            $queryParams['merchantType'] = $this->apiClient->getSerializer()->toQueryValue($merchant_type);
        }
        // header params
        $authToken = $this->apiClient->getApiKeyWithPrefix('Authorization');
        $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authToken);
        // header params
        $accessToken = $this->apiClient->getConfig()->getAccessToken();
        $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($accessToken);
        

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\VoloCommerce\Api\v1\Model\CustomerResponse',
                '/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\VoloCommerce\Api\v1\Model\CustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\CustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removeCustomer
     *
     * Delete the customer
     *
     * @param int $customer_id Customer id (required)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return \VoloCommerce\Api\v1\Model\DeleteCustomerResponse
     */
    public function removeCustomer($customer_id)
    {
        list($response) = $this->removeCustomerWithHttpInfo($customer_id);
        return $response;
    }

    /**
     * Operation removeCustomerWithHttpInfo
     *
     * Delete the customer
     *
     * @param int $customer_id Customer id (required)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of \VoloCommerce\Api\v1\Model\DeleteCustomerResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeCustomerWithHttpInfo($customer_id)
    {
        // verify the required parameter 'customer_id' is set
        if ($customer_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $customer_id when calling removeCustomer');
        }
        
        // parse inputs
        $resourcePath = "/customers/{customerId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // header params
        $authToken = $this->apiClient->getApiKeyWithPrefix('Authorization');
        $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authToken);
        // header params
        $accessToken = $this->apiClient->getConfig()->getAccessToken();
        $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($accessToken);
        
        // path params
        if ($customer_id !== null) {
            $resourcePath = str_replace(
                "{" . "customerId" . "}",
                $this->apiClient->getSerializer()->toPathValue($customer_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\VoloCommerce\Api\v1\Model\DeleteCustomerResponse',
                '/customers/{customerId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\VoloCommerce\Api\v1\Model\DeleteCustomerResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\DeleteCustomerResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation saveCustomers
     *
     * Add a list of customers
     *
     * @param \VoloCommerce\Api\v1\Model\AddCustomers $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return \VoloCommerce\Api\v1\Model\CustomerResponseBeanList
     */
    public function saveCustomers($body = null)
    {
        list($response) = $this->saveCustomersWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation saveCustomersWithHttpInfo
     *
     * Add a list of customers
     *
     * @param \VoloCommerce\Api\v1\Model\AddCustomers $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of \VoloCommerce\Api\v1\Model\CustomerResponseBeanList, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveCustomersWithHttpInfo($body = null)
    {
        
        // parse inputs
        $resourcePath = "/customers";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // header params
        $authToken = $this->apiClient->getApiKeyWithPrefix('Authorization');
        $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authToken);
        // header params
        $accessToken = $this->apiClient->getConfig()->getAccessToken();
        $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($accessToken);
        
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\VoloCommerce\Api\v1\Model\CustomerResponseBeanList',
                '/customers'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\VoloCommerce\Api\v1\Model\CustomerResponseBeanList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\CustomerResponseBeanList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\VoloAPIErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
