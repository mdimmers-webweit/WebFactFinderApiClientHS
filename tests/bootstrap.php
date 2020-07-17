<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

use Symfony\Component\Dotenv\Dotenv;

require \dirname(__DIR__).'/vendor/autoload.php';

if (\method_exists(Dotenv::class, 'loadEnv')) {
    (new Dotenv())->loadEnv(\dirname(__DIR__) . '/.env');
}

if (!isset($_ENV['WEB_FACT_FINDER_API_USERNAME'])) {
    $_ENV['WEB_FACT_FINDER_API_USERNAME'] = \getenv('WEB_FACT_FINDER_API_USERNAME');
}
if (!isset($_ENV['WEB_FACT_FINDER_API_PASSWORD'])) {
    $_ENV['WEB_FACT_FINDER_API_PASSWORD'] = \getenv('WEB_FACT_FINDER_API_PASSWORD');
}
if (!isset($_ENV['WEB_FACT_FINDER_API_URL'])) {
    $_ENV['WEB_FACT_FINDER_API_URL'] = \getenv('WEB_FACT_FINDER_API_URL');
}
if (!isset($_ENV['WEB_FACT_FINDER_API_TEST_CHANNEL'])) {
    $_ENV['WEB_FACT_FINDER_API_TEST_CHANNEL'] = \getenv('WEB_FACT_FINDER_API_TEST_CHANNEL');
}
