<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\SearchRequestBase;
use Web\FactFinderApi\Client\V70\Model\ModelV70Interface;

/**
 * SearchRequest Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SearchRequest extends SearchRequestBase implements ModelV70Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'params' => static::getModelClass('SearchParams'),
            'search_control_params' => static::getModelClass('SearchControlParams'),
            'sid' => 'string',
            'user_input' => 'string',
        ];
    }
}
