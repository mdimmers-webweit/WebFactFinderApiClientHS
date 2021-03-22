<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

use Symfony\Component\Dotenv\Dotenv;

if (\file_exists(\dirname(__DIR__) . '/vendor/autoload.php')) {
    require \dirname(__DIR__) . '/vendor/autoload.php';
} else {
    require 'vendor/autoload.php';
}

if (\method_exists(Dotenv::class, 'loadEnv')) {
    (new Dotenv())->loadEnv(\dirname(__DIR__) . '/.env');
}

$variables = [
    'WEB_FACT_FINDER_API_URL',
    'WEB_FACT_FINDER_API_USERNAME',
    'WEB_FACT_FINDER_API_PASSWORD',
    'WEB_FACT_FINDER_API_TEST_CHANNEL',

    'WEB_FACT_FINDER_73_API_URL',
    'WEB_FACT_FINDER_73_API_USERNAME',
    'WEB_FACT_FINDER_73_API_PASSWORD',
    'WEB_FACT_FINDER_73_API_TEST_CHANNEL',
    'WEB_FACT_FINDER_73_API_PREFIX',
    'WEB_FACT_FINDER_73_API_POSTFIX',
];

foreach ($variables as $var) {
    if (!isset($_ENV[$var])) {
        $_ENV[$var] = \getenv($var);
    }
}
