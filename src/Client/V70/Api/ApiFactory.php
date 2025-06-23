<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70;

use GuzzleHttp6\ClientInterface;
use Psr\Log\LoggerInterface;
use Web\FactFinderApi\Client\Configuration;

class ApiFactory
{
    private ClientInterface $client;
    private Configuration $config;
    private LoggerInterface $logger;

    public function __construct(
        ClientInterface $client,
        Configuration $config,
        LoggerInterface $logger
    ) {
        $this->client = $client;
        $this->config = $config;
        $this->logger = $logger;
    }

    public function getSearchApi(): Api\SearchApi
    {
        return new Api\SearchApi($this->client, $this->config, $this->logger);
    }

    public function getSuggestApi(): Api\SuggestApi
    {
        return new Api\SuggestApi($this->client, $this->config, $this->logger);
    }

    public function getCampaignApi(): Api\CampaignApi
    {
        return new Api\CampaignApi($this->client, $this->config, $this->logger);
    }

    public function getTrackingApi(): Api\TrackingApi
    {
        return new Api\TrackingApi($this->client, $this->config, $this->logger);
    }

    public function getRecommendationApi(): Api\RecommendationApi
    {
        return new Api\RecommendationApi($this->client, $this->config, $this->logger);
    }

    public function getImportApi(): Api\ImportApi
    {
        return new Api\ImportApi($this->client, $this->config, $this->logger);
    }

    // ... weitere APIs
}