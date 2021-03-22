<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\FacetBase;

/**
 * Facet Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Facet extends FacetBase implements ModelV4Interface
{
    const TYPE_FLOAT = 'FLOAT';
    const TYPE_INTEGER = 'INTEGER';
    const TYPE_MULTI = 'MULTI';
    const TYPE_TEXT = 'TEXT';
    const TYPE_CATEGORY_PATH = 'CATEGORY_PATH';
    const TYPE_BOOLEAN = 'BOOLEAN';
    const TYPE_DATE = 'DATE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FLOAT,
            self::TYPE_INTEGER,
            self::TYPE_MULTI,
            self::TYPE_TEXT,
            self::TYPE_CATEGORY_PATH,
            self::TYPE_BOOLEAN,
            self::TYPE_DATE,
        ];
    }
}
