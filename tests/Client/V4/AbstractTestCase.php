<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Tests\Client\V4;

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
                $_ENV['WEB_FACT_FINDER_API_USERNAME'],
                $_ENV['WEB_FACT_FINDER_API_PASSWORD'],
                $_ENV['WEB_FACT_FINDER_API_URL']
            );
        }

        return $this->config;
    }

    protected function getChannel()
    {
        if (!$this->channel) {
            $this->channel = $_ENV['WEB_FACT_FINDER_API_TEST_CHANNEL'];
        }

        return $this->channel;
    }
}
