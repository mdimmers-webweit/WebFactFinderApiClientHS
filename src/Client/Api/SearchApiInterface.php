<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Api;

use Web\FactFinderApi\Client\Model\SearchRequestBase;

interface SearchApiInterface
{
    public function searchUsingPOST(SearchRequestBase $search_request);
}
