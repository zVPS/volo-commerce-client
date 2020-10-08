<?php
/**
 * LocationsApi
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
 * LocationsApi Class Doc Comment
 *
 * @category Class
 * @package  \VoloCommerce\Api\v1
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LocationsApi
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
     * @return LocationsApi
     */
    public function setApiClient(\VoloCommerce\Api\v1\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation doRemove
     *
     * Remove Locations
     *
     * @param int $location_id  (required)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return void
     */
    public function doRemove($location_id)
    {
        list($response) = $this->doRemoveWithHttpInfo($location_id);
        return $response;
    }

    /**
     * Operation doRemoveWithHttpInfo
     *
     * Remove Locations
     *
     * @param int $location_id  (required)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function doRemoveWithHttpInfo($location_id)
    {
        // verify the required parameter 'location_id' is set
        if ($location_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $location_id when calling doRemove');
        }
        // parse inputs
        $resourcePath = "/locations/{locationId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json; charset=utf-8']);

        // path params
        if ($location_id !== null) {
            $resourcePath = str_replace(
                "{" . "locationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($location_id),
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
                null,
                '/locations/{locationId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation doUpdate
     *
     * Update Locations
     *
     * @param \VoloCommerce\Api\v1\Model\UpdateLocation $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return \VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse
     */
    public function doUpdate($body = null)
    {
        list($response) = $this->doUpdateWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation doUpdateWithHttpInfo
     *
     * Update Locations
     *
     * @param \VoloCommerce\Api\v1\Model\UpdateLocation $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of \VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function doUpdateWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/locations";
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
                '\VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse',
                '/locations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\AddUpdatedLocationResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getLocations
     *
     * Returns locations based on given criteria
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param int $id Location ID (optional)
     * @param int $parent_id ID of the parent location (optional)
     * @param bool $pickable Pickable location? (optional)
     * @param bool $physical_location Physical location? (optional)
     * @param bool $virtual_stock Virtual location? (optional)
     * @param int $page_number The Page number for pagination (optional)
     * @param int $entries_per_page No of records in a page to be retrieved (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return \VoloCommerce\Api\v1\Model\LocationsResponse
     */
    public function getLocations($authorization, $x_api_key, $id = null, $parent_id = null, $pickable = null, $physical_location = null, $virtual_stock = null, $page_number = null, $entries_per_page = null)
    {
        list($response) = $this->getLocationsWithHttpInfo($authorization, $x_api_key, $id, $parent_id, $pickable, $physical_location, $virtual_stock, $page_number, $entries_per_page);
        return $response;
    }

    /**
     * Operation getLocationsWithHttpInfo
     *
     * Returns locations based on given criteria
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param int $id Location ID (optional)
     * @param int $parent_id ID of the parent location (optional)
     * @param bool $pickable Pickable location? (optional)
     * @param bool $physical_location Physical location? (optional)
     * @param bool $virtual_stock Virtual location? (optional)
     * @param int $page_number The Page number for pagination (optional)
     * @param int $entries_per_page No of records in a page to be retrieved (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of \VoloCommerce\Api\v1\Model\LocationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLocationsWithHttpInfo($authorization, $x_api_key, $id = null, $parent_id = null, $pickable = null, $physical_location = null, $virtual_stock = null, $page_number = null, $entries_per_page = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling getLocations');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling getLocations');
        }
        // parse inputs
        $resourcePath = "/locations";
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
        if ($parent_id !== null) {
            $queryParams['parentId'] = $this->apiClient->getSerializer()->toQueryValue($parent_id);
        }
        // query params
        if ($pickable !== null) {
            $queryParams['pickable'] = $this->apiClient->getSerializer()->toQueryValue($pickable);
        }
        // query params
        if ($physical_location !== null) {
            $queryParams['physicalLocation'] = $this->apiClient->getSerializer()->toQueryValue($physical_location);
        }
        // query params
        if ($virtual_stock !== null) {
            $queryParams['virtualStock'] = $this->apiClient->getSerializer()->toQueryValue($virtual_stock);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = $this->apiClient->getSerializer()->toQueryValue($page_number);
        }
        // query params
        if ($entries_per_page !== null) {
            $queryParams['entriesPerPage'] = $this->apiClient->getSerializer()->toQueryValue($entries_per_page);
        }
        // header params
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\VoloCommerce\Api\v1\Model\LocationsResponse',
                '/locations'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\VoloCommerce\Api\v1\Model\LocationsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\VoloCommerce\Api\v1\Model\LocationsResponse', $e->getResponseHeaders());
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
     * Operation saveLocations
     *
     * Add new locations
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \VoloCommerce\Api\v1\Model\AddLocations $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return void
     */
    public function saveLocations($authorization, $x_api_key, $body = null)
    {
        list($response) = $this->saveLocationsWithHttpInfo($authorization, $x_api_key, $body);
        return $response;
    }

    /**
     * Operation saveLocationsWithHttpInfo
     *
     * Add new locations
     *
     * @param string $authorization Auth token (required)
     * @param string $x_api_key API Key (required)
     * @param \VoloCommerce\Api\v1\Model\AddLocations $body  (optional)
     * @throws \VoloCommerce\Api\v1\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function saveLocationsWithHttpInfo($authorization, $x_api_key, $body = null)
    {
        // verify the required parameter 'authorization' is set
        if ($authorization === null) {
            throw new \InvalidArgumentException('Missing the required parameter $authorization when calling saveLocations');
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x_api_key when calling saveLocations');
        }
        // parse inputs
        $resourcePath = "/locations";
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
        if ($authorization !== null) {
            $headerParams['Authorization'] = $this->apiClient->getSerializer()->toHeaderValue($authorization);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = $this->apiClient->getSerializer()->toHeaderValue($x_api_key);
        }
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
                null,
                '/locations'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
