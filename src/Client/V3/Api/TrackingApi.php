<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V3\Api;

use GuzzleHttp6\Promise\PromiseInterface;
use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ApiException;
use Web\FactFinderApi\Client\V3\Model\CartOrCheckoutEvent;
use Web\FactFinderApi\Client\V3\Model\ClickEvent;
use Web\FactFinderApi\Client\V3\Model\FeedbackEvent;
use Web\FactFinderApi\Client\V3\Model\LoginEvent;
use Web\FactFinderApi\Client\V3\Model\RecommendationClickEvent;
use Web\FactFinderApi\Client\V3\Model\SearchLogEvent;

class TrackingApi extends ApiClient
{
    /**
     * Operation trackCartUsingPOST
     *
     * Track a cart event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackCartUsingPOST(string $channel, array $events): void
    {
        $this->trackCartUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackCartUsingPOSTWithHttpInfo
     *
     * Track a cart event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackCartUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackCartUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackCartUsingPOSTAsync
     *
     * Track a cart event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackCartUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackCartUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackCartUsingPOSTAsyncWithHttpInfo
     *
     * Track a cart event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackCartUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackCartUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackCheckoutUsingPOST
     *
     * Track a checkout event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackCheckoutUsingPOST(string $channel, array $events): void
    {
        $this->trackCheckoutUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackCheckoutUsingPOSTWithHttpInfo
     *
     * Track a checkout event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackCheckoutUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackCheckoutUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackCheckoutUsingPOSTAsync
     *
     * Track a checkout event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackCheckoutUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackCheckoutUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackCheckoutUsingPOSTAsyncWithHttpInfo
     *
     * Track a checkout event
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackCheckoutUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackCheckoutUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackClickUsingPOST
     *
     * Track a click event
     *
     * @param string       $channel channel (required)
     * @param ClickEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackClickUsingPOST(string $channel, array $events): void
    {
        $this->trackClickUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackClickUsingPOSTWithHttpInfo
     *
     * Track a click event
     *
     * @param string       $channel channel (required)
     * @param ClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackClickUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackClickUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackClickUsingPOSTAsync
     *
     * Track a click event
     *
     * @param string       $channel channel (required)
     * @param ClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackClickUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackClickUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackClickUsingPOSTAsyncWithHttpInfo
     *
     * Track a click event
     *
     * @param string       $channel channel (required)
     * @param ClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackClickUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackClickUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackFeedbackUsingPOST
     *
     * Track a feedback event
     *
     * @param string          $channel channel (required)
     * @param FeedbackEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackFeedbackUsingPOST(string $channel, array $events): void
    {
        $this->trackFeedbackUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackFeedbackUsingPOSTWithHttpInfo
     *
     * Track a feedback event
     *
     * @param string          $channel channel (required)
     * @param FeedbackEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackFeedbackUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackFeedbackUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackFeedbackUsingPOSTAsync
     *
     * Track a feedback event
     *
     * @param string          $channel channel (required)
     * @param FeedbackEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackFeedbackUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackFeedbackUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackFeedbackUsingPOSTAsyncWithHttpInfo
     *
     * Track a feedback event
     *
     * @param string          $channel channel (required)
     * @param FeedbackEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackFeedbackUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackFeedbackUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackLogUsingPOST
     *
     * Track a log event
     *
     * @param string           $channel channel (required)
     * @param SearchLogEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackLogUsingPOST(string $channel, $events): void
    {
        $this->trackLogUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackLogUsingPOSTWithHttpInfo
     *
     * Track a log event
     *
     * @param string           $channel channel (required)
     * @param SearchLogEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackLogUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackLogUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackLogUsingPOSTAsync
     *
     * Track a log event
     *
     * @param string           $channel channel (required)
     * @param SearchLogEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackLogUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackLogUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackLogUsingPOSTAsyncWithHttpInfo
     *
     * Track a log event
     *
     * @param string           $channel channel (required)
     * @param SearchLogEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackLogUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackLogUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackLoginUsingPOST
     *
     * Track a login event
     *
     * @param string       $channel channel (required)
     * @param LoginEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackLoginUsingPOST(string $channel, $events): void
    {
        $this->trackLoginUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackLoginUsingPOSTWithHttpInfo
     *
     * Track a login event
     *
     * @param string       $channel channel (required)
     * @param LoginEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackLoginUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackLoginUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackLoginUsingPOSTAsync
     *
     * Track a login event
     *
     * @param string       $channel channel (required)
     * @param LoginEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackLoginUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackLoginUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackLoginUsingPOSTAsyncWithHttpInfo
     *
     * Track a login event
     *
     * @param string       $channel channel (required)
     * @param LoginEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackLoginUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackLoginUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Operation trackRecommendationClickUsingPOST
     *
     * Track a recommendation click event
     *
     * @param string                     $channel channel (required)
     * @param RecommendationClickEvent[] $events  events (required)
     *
     * @throws ApiException              on non-2xx response
     * @throws \InvalidArgumentException
     */
    public function trackRecommendationClickUsingPOST(string $channel, array $events): void
    {
        $this->trackRecommendationClickUsingPOSTWithHttpInfo($channel, $events);
    }

    /**
     * Operation trackRecommendationClickUsingPOSTWithHttpInfo
     *
     * Track a recommendation click event
     *
     * @param string                     $channel channel (required)
     * @param RecommendationClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function trackRecommendationClickUsingPOSTWithHttpInfo(string $channel, array $events): array
    {
        $request = $this->trackRecommendationClickUsingPOSTRequest($channel, $events);

        return $this->executeEmptyRequest($request);
    }

    /**
     * Operation trackRecommendationClickUsingPOSTAsync
     *
     * Track a recommendation click event
     *
     * @param string                     $channel channel (required)
     * @param RecommendationClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackRecommendationClickUsingPOSTAsync(string $channel, array $events): PromiseInterface
    {
        return $this->trackRecommendationClickUsingPOSTAsyncWithHttpInfo($channel, $events)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation trackRecommendationClickUsingPOSTAsyncWithHttpInfo
     *
     * Track a recommendation click event
     *
     * @param string                     $channel channel (required)
     * @param RecommendationClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    public function trackRecommendationClickUsingPOSTAsyncWithHttpInfo(string $channel, array $events): PromiseInterface
    {
        $request = $this->trackRecommendationClickUsingPOSTRequest($channel, $events);

        return $this->executeEmptyAsyncRequest($request);
    }

    /**
     * Create request for operation 'trackCartUsingPOST'
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackCartUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackCartUsingPOSTRequest');

        $resourcePath = '/rest/v3/track/{channel}/cart';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackCheckoutUsingPOST'
     *
     * @param string                $channel channel (required)
     * @param CartOrCheckoutEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackCheckoutUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackCheckoutUsingPOSTRequest');

        $resourcePath = '/rest/v3/track/{channel}/checkout';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackClickUsingPOST'
     *
     * @param string       $channel channel (required)
     * @param ClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackClickUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackClickUsingPOSTRequest');

        $resourcePath = '/rest/v3/track/{channel}/click';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackFeedbackUsingPOST'
     *
     * @param string          $channel channel (required)
     * @param FeedbackEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackFeedbackUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackFeedbackUsingPOSTRequest');
        $resourcePath = '/rest/v3/track/{channel}/feedback';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackLogUsingPOST'
     *
     * @param string           $channel channel (required)
     * @param SearchLogEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackLogUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackLogUsingPOSTRequest');

        $resourcePath = '/rest/v3/track/{channel}/log';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackLoginUsingPOST'
     *
     * @param string       $channel channel (required)
     * @param LoginEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackLoginUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackLoginUsingPOSTRequest');

        $resourcePath = '/rest/v3/track/{channel}/login';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    /**
     * Create request for operation 'trackRecommendationClickUsingPOST'
     *
     * @param string                     $channel channel (required)
     * @param RecommendationClickEvent[] $events  events (required)
     *
     * @throws \InvalidArgumentException
     */
    protected function trackRecommendationClickUsingPOSTRequest(string $channel, array $events): Request
    {
        $this->verifyParameters($channel, $events, 'trackRecommendationClickUsingPOST');

        $resourcePath = '/rest/v3/track/{channel}/recommendationClick';
        $queryParams = [];
        $resourcePath = $this->addChannelToResourcePath($channel, $resourcePath);

        return $this->postQuery($resourcePath, $queryParams, $events);
    }

    protected function verifyParameters(string $channel, array $events, string $functionName): void
    {
        if (empty($channel)) {
            throw new \InvalidArgumentException(
                \sprintf('Missing the required parameter $channel when calling %s', $functionName)
            );
        }
        if (empty($events)) {
            throw new \InvalidArgumentException(
                \sprintf('Missing the required parameter $events when calling %s', $functionName)
            );
        }
    }
}
