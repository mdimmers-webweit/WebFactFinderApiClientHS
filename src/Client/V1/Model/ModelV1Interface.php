<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V1\Model;

use Web\FactFinderApi\Client\Model\ModelInterface;

interface ModelV1Interface extends ModelInterface
{
    public const MODEL_VERSION = 'V1';
}
