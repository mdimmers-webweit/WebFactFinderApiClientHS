<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

use Symfony\Component\Dotenv\Dotenv;

require \dirname(__DIR__) . '/../vendor/autoload.php';

getenv('TEST_MACZEK');
getenv('WEB_FACT_FINDER_API_URL');

if (\file_exists(\dirname(__DIR__) . '/../config/bootstrap.php')) {
    require \dirname(__DIR__) . '/../config/bootstrap.php';
} elseif (\method_exists(Dotenv::class, 'bootEnv')) {
    (new Dotenv())->bootEnv(\dirname(__DIR__) . '/../.env');
}
