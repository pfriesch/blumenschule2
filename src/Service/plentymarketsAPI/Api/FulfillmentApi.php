<?php
/**
 * FulfillmentApi
 * PHP version 5
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * OpenAPI spec version: 1.0.0
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BSApp\Service\plentymarketsAPI\Api;

use BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use function GuzzleHttp\Psr7\build_query;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BSApp\Service\plentymarketsAPI\ApiException;
use BSApp\Service\plentymarketsAPI\Configuration;
use BSApp\Service\plentymarketsAPI\HeaderSelector;
use BSApp\Service\plentymarketsAPI\ObjectSerializer;
use InvalidArgumentException;
use RuntimeException;
use stdClass;

/**
 * FulfillmentApi Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FulfillmentApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    )
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGet
     *
     *
     * @return PlentyModulesFulfillmentPicklistModelsPickingOrderItem[]
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restFulfillmentPicklistPickingOrderItemGet()
    {
        list($response) = $this->restFulfillmentPicklistPickingOrderItemGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetWithHttpInfo
     *
     *
     * @return array of \BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem[], HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restFulfillmentPicklistPickingOrderItemGetWithHttpInfo()
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem[]';
        $request = $this->restFulfillmentPicklistPickingOrderItemGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetAsync
     *
     *
     *
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restFulfillmentPicklistPickingOrderItemGetAsync()
    {
        return $this->restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo
     *
     *
     *
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restFulfillmentPicklistPickingOrderItemGetAsyncWithHttpInfo()
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem[]';
        $request = $this->restFulfillmentPicklistPickingOrderItemGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'restFulfillmentPicklistPickingOrderItemGet'
     *
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restFulfillmentPicklistPickingOrderItemGetRequest()
    {

        $resourcePath = '/rest/fulfillment/picklist/picking_order_item';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet
     *
     * @param int $picking_order_item_id The PickingOrderItemId (required)
     *
     * @return PlentyModulesFulfillmentPicklistModelsPickingOrderItem
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet($picking_order_item_id)
    {
        list($response) = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo($picking_order_item_id);
        return $response;
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo
     *
     * @param int $picking_order_item_id The PickingOrderItemId (required)
     *
     * @return array of \BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetWithHttpInfo($picking_order_item_id)
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem';
        $request = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest($picking_order_item_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsync
     *
     *
     *
     * @param int $picking_order_item_id The PickingOrderItemId (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsync($picking_order_item_id)
    {
        return $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo($picking_order_item_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo
     *
     *
     *
     * @param int $picking_order_item_id The PickingOrderItemId (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetAsyncWithHttpInfo($picking_order_item_id)
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesFulfillmentPicklistModelsPickingOrderItem';
        $request = $this->restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest($picking_order_item_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'
     *
     * @param int $picking_order_item_id The PickingOrderItemId (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGetRequest($picking_order_item_id)
    {
        // verify the required parameter 'picking_order_item_id' is set
        if ($picking_order_item_id === null || (is_array($picking_order_item_id) && count($picking_order_item_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $picking_order_item_id when calling restFulfillmentPicklistPickingOrderItemPickingOrderItemIdGet'
            );
        }

        $resourcePath = '/rest/fulfillment/picklist/picking_order_item/{pickingOrderItemId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($picking_order_item_id !== null) {
            $resourcePath = str_replace(
                '{' . 'pickingOrderItemId' . '}',
                ObjectSerializer::toPathValue($picking_order_item_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}