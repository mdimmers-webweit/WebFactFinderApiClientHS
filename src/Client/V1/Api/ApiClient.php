<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V1\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient as ApiClientBase;
use Web\FactFinderApi\Client\ObjectSerializer;

class ApiClient extends ApiClientBase
{
    protected function getQuery(string $resourcePath, array $queryParams): Request
    {
        // body params
        $httpBody = $_tempBody = null;

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp6\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    protected function postQuery(string $resourcePath, array $queryParams, $params = null): Request
    {
        $httpBody = '';
        // body params
        $_tempBody = null;
        if (isset($params)) {
            $_tempBody = $params;
        }

        $headers = $this->headerSelector->selectHeaders(
            ['application/xml', 'application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp6\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($httpBody)) {
                    $httpBody = \GuzzleHttp6\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = \array_merge(
            $defaultHeaders,
            $headers
        );

        $query = \GuzzleHttp6\Psr7\build_query($queryParams);

        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}
