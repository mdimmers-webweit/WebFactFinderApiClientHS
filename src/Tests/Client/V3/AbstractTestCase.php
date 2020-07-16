<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V3;

use PHPUnit\Framework\TestCase;
use Web\FactFinderApi\Client\Configuration;

abstract class AbstractTestCase extends TestCase
{
    /** @var Configuration */
    private $config;

    /** @var string */
    private $channel;

    protected function getConfiguration()
    {
        if (!$this->config) {
            $this->config = new Configuration(
                getenv('WEB_FACT_FINDER_API_USERNAME'),
                getenv('WEB_FACT_FINDER_API_PASSWORD'),
                getenv('WEB_FACT_FINDER_API_URL')
            );
        }

        return $this->config;
    }

    protected function getChannel()
    {
        if (!$this->channel) {
            $this->channel = getenv('WEB_FACT_FINDER_API_TEST_CHANNEL');
        }

        return $this->channel;
    }
}
