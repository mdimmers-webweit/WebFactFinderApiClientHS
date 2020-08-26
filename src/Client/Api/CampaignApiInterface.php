<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Api;

use Web\FactFinderApi\Client\ApiClientInterface;

interface CampaignApiInterface extends ApiClientInterface
{
    public function getShoppingCartCampaignsUsingGET(string $channel, $product_number, bool $ids_only = false, ?string $sid = null, ?string $advisor_status = null): array;

    public function getProductCampaignsUsingGET(string $channel, $product_number, bool $ids_only = false, ?string $sid = null, ?string $advisor_status = null): array;
}
