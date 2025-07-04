<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

/**
 * FACT-Finder REST-API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

namespace Web\FactFinderApi\Client\V1\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V1\Model\CompareResult;

/**
 * CompareproductsApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CompareproductsApi extends ApiClient
{
    /**
     * Operation compareUsingGET
     *
     * compare products
     *
     * @param string   $channel           channel (required)
     * @param string[] $id                Use this parameter to pass product ID(s) which should be compared. (required)
     * @param bool     $ids_only          If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param object   $custom_parameters customParameters (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V1\Model\CompareResult
     */
    public function compareUsingGET(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        [$response] = $this->compareUsingGETWithHttpInfo($channel, $id, $ids_only, $custom_parameters);

        return $response;
    }

    /**
     * Operation compareUsingGETWithHttpInfo
     *
     * compare products
     *
     * @param string   $channel           channel (required)
     * @param string[] $id                Use this parameter to pass product ID(s) which should be compared. (required)
     * @param bool     $ids_only          If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param object   $custom_parameters customParameters (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V1\Model\CompareResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function compareUsingGETWithHttpInfo(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        $request = $this->compareUsingGETRequest($channel, $id, $ids_only, $custom_parameters);

        return $this->executeRequest($request, CompareResult::class);
    }

    /**
     * Operation compareUsingGETAsync
     *
     * compare products
     *
     * @param string   $channel           channel (required)
     * @param string[] $id                Use this parameter to pass product ID(s) which should be compared. (required)
     * @param bool     $ids_only          If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param object   $custom_parameters customParameters (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function compareUsingGETAsync(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        return $this->compareUsingGETAsyncWithHttpInfo($channel, $id, $ids_only, $custom_parameters)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation compareUsingGETAsyncWithHttpInfo
     *
     * compare products
     *
     * @param string   $channel           channel (required)
     * @param string[] $id                Use this parameter to pass product ID(s) which should be compared. (required)
     * @param bool     $ids_only          If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param object   $custom_parameters customParameters (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function compareUsingGETAsyncWithHttpInfo(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        $request = $this->compareUsingGETRequest($channel, $id, $ids_only, $custom_parameters);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V1\Model\CompareResult::class);
    }

    /**
     * Create request for operation 'compareUsingGET'
     *
     * @param string   $channel           channel (required)
     * @param string[] $id                Use this parameter to pass product ID(s) which should be compared. (required)
     * @param bool     $ids_only          If the value true is passed, then only the record IDs will be returned, streamlining the results. If you do not need the other information in the results, this will help you to improve performance. (optional, default to false)
     * @param object   $custom_parameters customParameters (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Psr7\Request
     */
    protected function compareUsingGETRequest(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        // verify the required parameter 'channel' is set
        if ($channel === null || (\is_array($channel) && \count($channel) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $channel when calling compareUsingGET'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (\is_array($id) && \count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling compareUsingGET'
            );
        }

        $resourcePath = '/v1/compareproducts/{channel}';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($ids_only !== null) {
            $queryParams['idsOnly'] = ObjectSerializer::toQueryValue($ids_only);
        }
        // query params
        if (\is_array($id)) {
            $queryParams['id'] = $id;
        } elseif ($id !== null) {
            $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        }
        // query params
        if ($custom_parameters !== null) {
            $queryParams['customParameters'] = ObjectSerializer::toQueryValue($custom_parameters);
        }

        // path params
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->getQuery($resourcePath, $queryParams);
    }
}
