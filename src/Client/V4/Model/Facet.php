<?php
declare(strict_types=1);
/*
 * FACT-Finder
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
    public const TYPE_FLOAT = 'FLOAT';
    public const TYPE_INTEGER = 'INTEGER';
    public const TYPE_MULTI = 'MULTI';
    public const TYPE_TEXT = 'TEXT';
    public const TYPE_CATEGORY_PATH = 'CATEGORY_PATH';
    public const TYPE_BOOLEAN = 'BOOLEAN';
    public const TYPE_DATE = 'DATE';

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
