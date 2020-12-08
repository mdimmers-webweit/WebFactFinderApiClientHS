<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\FilterValueBase;

/**
 * FilterValue Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FilterValue extends FilterValueBase implements ModelV4Interface
{
    public static function swaggerTypes(): array
    {
        return parent::swaggerTypes() +
            [
                'value' => 'object',
            ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }

        return $invalidProperties;
    }
}
