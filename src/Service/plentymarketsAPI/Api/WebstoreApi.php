<?php
/**
 * WebstoreApi
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

use BSApp\Service\plentymarketsAPI\Model\PlentyModulesPluginPluginSetModelsPluginSet;
use BSApp\Service\plentymarketsAPI\Model\PlentyModulesSystemModelsWebstore;
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
 * WebstoreApi Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebstoreApi
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
     * Operation restWebstoresGet
     *
     * List clients (stores)
     *
     *
     * @return PlentyModulesSystemModelsWebstore[]
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresGet()
    {
        list($response) = $this->restWebstoresGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation restWebstoresGetWithHttpInfo
     *
     * List clients (stores)
     *
     *
     * @return array of \BSApp\Service\plentymarketsAPI\Model\PlentyModulesSystemModelsWebstore[], HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresGetWithHttpInfo()
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesSystemModelsWebstore[]';
        $request = $this->restWebstoresGetRequest();

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
                        '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesSystemModelsWebstore[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restWebstoresGetAsync
     *
     * List clients (stores)
     *
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresGetAsync()
    {
        return $this->restWebstoresGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restWebstoresGetAsyncWithHttpInfo
     *
     * List clients (stores)
     *
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresGetAsyncWithHttpInfo()
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesSystemModelsWebstore[]';
        $request = $this->restWebstoresGetRequest();

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
     * Create request for operation 'restWebstoresGet'
     *
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restWebstoresGetRequest()
    {

        $resourcePath = '/rest/webstores';
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
     * Operation restWebstoresWebstoreIdPluginSetGet
     *
     * @param int $webstore_id webstore_id (required)
     *
     * @return PlentyModulesPluginPluginSetModelsPluginSet
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresWebstoreIdPluginSetGet($webstore_id)
    {
        list($response) = $this->restWebstoresWebstoreIdPluginSetGetWithHttpInfo($webstore_id);
        return $response;
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetGetWithHttpInfo
     *
     * @param int $webstore_id (required)
     *
     * @return array of \BSApp\Service\plentymarketsAPI\Model\PlentyModulesPluginPluginSetModelsPluginSet, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresWebstoreIdPluginSetGetWithHttpInfo($webstore_id)
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesPluginPluginSetModelsPluginSet';
        $request = $this->restWebstoresWebstoreIdPluginSetGetRequest($webstore_id);

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
                        '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesPluginPluginSetModelsPluginSet',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetGetAsync
     *
     *
     *
     * @param int $webstore_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresWebstoreIdPluginSetGetAsync($webstore_id)
    {
        return $this->restWebstoresWebstoreIdPluginSetGetAsyncWithHttpInfo($webstore_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetGetAsyncWithHttpInfo
     *
     *
     *
     * @param int $webstore_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresWebstoreIdPluginSetGetAsyncWithHttpInfo($webstore_id)
    {
        $returnType = '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesPluginPluginSetModelsPluginSet';
        $request = $this->restWebstoresWebstoreIdPluginSetGetRequest($webstore_id);

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
     * Create request for operation 'restWebstoresWebstoreIdPluginSetGet'
     *
     * @param int $webstore_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restWebstoresWebstoreIdPluginSetGetRequest($webstore_id)
    {
        // verify the required parameter 'webstore_id' is set
        if ($webstore_id === null || (is_array($webstore_id) && count($webstore_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $webstore_id when calling restWebstoresWebstoreIdPluginSetGet'
            );
        }

        $resourcePath = '/rest/webstores/{webstoreId}/plugin_set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($webstore_id !== null) {
            $resourcePath = str_replace(
                '{' . 'webstoreId' . '}',
                ObjectSerializer::toPathValue($webstore_id),
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
     * Operation restWebstoresWebstoreIdPluginSetPost
     *
     * @param int $webstore_id webstore_id (required)
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresWebstoreIdPluginSetPost($webstore_id)
    {
        $this->restWebstoresWebstoreIdPluginSetPostWithHttpInfo($webstore_id);
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetPostWithHttpInfo
     *
     * @param int $webstore_id (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function restWebstoresWebstoreIdPluginSetPostWithHttpInfo($webstore_id)
    {
        $returnType = '';
        $request = $this->restWebstoresWebstoreIdPluginSetPostRequest($webstore_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetPostAsync
     *
     *
     *
     * @param int $webstore_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresWebstoreIdPluginSetPostAsync($webstore_id)
    {
        return $this->restWebstoresWebstoreIdPluginSetPostAsyncWithHttpInfo($webstore_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation restWebstoresWebstoreIdPluginSetPostAsyncWithHttpInfo
     *
     *
     *
     * @param int $webstore_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function restWebstoresWebstoreIdPluginSetPostAsyncWithHttpInfo($webstore_id)
    {
        $returnType = '';
        $request = $this->restWebstoresWebstoreIdPluginSetPostRequest($webstore_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'restWebstoresWebstoreIdPluginSetPost'
     *
     * @param int $webstore_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    protected function restWebstoresWebstoreIdPluginSetPostRequest($webstore_id)
    {
        // verify the required parameter 'webstore_id' is set
        if ($webstore_id === null || (is_array($webstore_id) && count($webstore_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $webstore_id when calling restWebstoresWebstoreIdPluginSetPost'
            );
        }

        $resourcePath = '/rest/webstores/{webstoreId}/plugin_set';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($webstore_id !== null) {
            $resourcePath = str_replace(
                '{' . 'webstoreId' . '}',
                ObjectSerializer::toPathValue($webstore_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
            'POST',
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
