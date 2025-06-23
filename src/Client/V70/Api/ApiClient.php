<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient as ApiClientBase;
use Web\FactFinderApi\Client\ApiException;

class ApiClient extends ApiClientBase
{
    // ... bestehender Code ...

    /**
     * Überschreibt die Basis-Methoden für V70 Kompatibilität
     */
    protected function getQuery(string $resourcePath, array $queryParams): Request
    {
        throw new ApiException('Direct REST endpoints are not supported in FactFinder 7.0. Use executeFFRequest instead.');
    }

    protected function executeRequest(Request $request, string $returnType): array
    {
        throw new ApiException('Direct REST requests are not supported in FactFinder 7.0. Use executeFFRequest instead.');
    }

    protected function executeEmptyRequest(Request $request): array
    {
        throw new ApiException('Direct REST requests are not supported in FactFinder 7.0. Use executeFFRequest instead.');
    }

    public function executeAsyncRequest(Request $request, string $returnType): \GuzzleHttp6\Promise\PromiseInterface
    {
        throw new ApiException('Async requests are not supported in FactFinder 7.0.');
    }

    public function executeEmptyAsyncRequest(Request $request): \GuzzleHttp6\Promise\PromiseInterface
    {
        throw new ApiException('Async requests are not supported in FactFinder 7.0.');
    }

    /**
     * Helper für Error Handling
     */
    protected function handleFFError(array $response): void
    {
        if (isset($response['error']) && $response['error']) {
            throw new ApiException(
                $response['errorMessage'] ?? 'Unknown FactFinder error',
                $response['errorCode'] ?? 0
            );
        }
    }

    /**
     * Erweiterte executeFFRequest mit Error Handling
     */
    protected function executeFFRequest(string $endpoint, array $params = []): array
    {
        $params = array_merge($params, $this->getAuthParams());
        $params['format'] = 'json';

        // Channel aus Config wenn nicht gesetzt
        if (!isset($params['channel']) && $this->config->getDefaultChannel()) {
            $params['channel'] = $this->config->getDefaultChannel();
        }

        $url = $this->config->getHost() . '/' . $endpoint;

        $this->logger->info('FactFinder 7.0 Request', [
            'endpoint' => $endpoint,
            'params' => $params
        ]);

        try {
            $response = $this->client->request('GET', $url, [
                'query' => $params,
                'headers' => [
                    'Accept' => 'application/json',
                    'User-Agent' => $this->config->getUserAgent() ?? 'FactFinder-PHP-Client'
                ],
                'timeout' => 30,
                'connect_timeout' => 10
            ]);

            $content = $response->getBody()->getContents();
            $data = json_decode($content, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new ApiException('Invalid JSON response from FactFinder: ' . json_last_error_msg());
            }

            $this->handleFFError($data);

            $this->logger->info('FactFinder 7.0 Response', [
                'endpoint' => $endpoint,
                'status' => $response->getStatusCode()
            ]);

            return $data;
        } catch (\GuzzleHttp6\Exception\GuzzleException $e) {
            $this->logger->error('FactFinder 7.0 Error', [
                'endpoint' => $endpoint,
                'error' => $e->getMessage()
            ]);
            throw new ApiException(
                'FactFinder request failed: ' . $e->getMessage(),
                $e->getCode(),
                null,
                null
            );
        }
    }
}