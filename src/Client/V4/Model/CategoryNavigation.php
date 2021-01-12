<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * CategoryNavigation Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class CategoryNavigation extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'facets' => static::getModelClass('Facet', true),
            'timed_out' => 'bool',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    public static function attributeMap(): array
    {
        return [
            'facets' => 'facets',
            'timed_out' => 'timedOut',
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['timed_out'] === null) {
            $invalidProperties[] = "'timed_out' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Facet[]
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Facet[] $facets facets
     *
     * @return $this
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTimedOut()
    {
        return $this->container['timed_out'];
    }

    /**
     * @param bool $timed_out If true, this search took longer than the timeout currently defined. Therefore, the results may not contain all relevant products.
     *
     * @return $this
     */
    public function setTimedOut($timed_out)
    {
        $this->container['timed_out'] = $timed_out;

        return $this;
    }
}
