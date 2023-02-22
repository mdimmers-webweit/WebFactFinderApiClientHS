<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Api;

use Web\FactFinderApi\Client\ApiClientInterface;
use Web\FactFinderApi\Client\Model\NavigationRequestBase;
use Web\FactFinderApi\Client\Model\SearchRequestBase;

interface SearchApiInterface extends ApiClientInterface
{
    public function searchUsingPOST(SearchRequestBase $search_request);

    public function navigationUsingPOST(NavigationRequestBase $search_request);
}
