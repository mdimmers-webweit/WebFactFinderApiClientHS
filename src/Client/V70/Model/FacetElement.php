<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\FacetElementBase;

/**
 * FacetElement Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FacetElement extends FacetElementBase implements ModelV70Interface
{
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result['total_hits'] = 'recordCount';
        $result['implicit_selection'] = 'active';

        return $result;
    }
}
