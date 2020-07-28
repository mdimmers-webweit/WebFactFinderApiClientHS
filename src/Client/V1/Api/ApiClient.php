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
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

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
            $headers
        );
    }

    protected function postQuery(string $resourcePath, array $queryParams, $params = null, bool $oauth = false): Request
    {
        return $this->query('POST', $resourcePath, $queryParams, $params);
    }

    protected function deleteQuery(string $resourcePath, array $queryParams, $params = null, bool $oauth = false): Request
    {
        return $this->query('DELETE', $resourcePath, $queryParams, $params);
    }

    protected function putQuery(string $resourcePath, array $queryParams, $params = null, bool $oauth = false): Request
    {
        return $this->query('PUT', $resourcePath, $queryParams, $params);
    }

    private function query(string $action, string $resourcePath, array $queryParams, $params = null): Request
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];

        $httpBody = null;
        // for model (json/xml)
        if ($params) {
            if ($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($params instanceof \stdClass) {
                    $httpBody = \json_encode($params);
                }
                // array has no __toString(), so we should encode it manually
                if (\is_array($params)) {
                    $httpBody = \json_encode(ObjectSerializer::sanitizeForSerialization($params));
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
            $action,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }
}
