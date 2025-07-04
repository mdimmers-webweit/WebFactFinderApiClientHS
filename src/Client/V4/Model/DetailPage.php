<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * DetailPage Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class DetailPage extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'campaigns' => static::getModelClass('Campaign', true),
            'field_roles' => 'map[string,string]',
            'recommendations' => static::getModelClass('RecommendationResult'),
            'record' => static::getModelClass('RecordWithId'),
            'similar_products' => static::getModelClass('SimilarProducts'),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'campaigns' => 'campaigns',
            'field_roles' => 'fieldRoles',
            'recommendations' => 'recommendations',
            'record' => 'record',
            'similar_products' => 'similarProducts',
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

        if ($this->container['field_roles'] === null) {
            $invalidProperties[] = "'field_roles' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Campaign[]
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Campaign[] $campaigns active campaigns for the product with the requested ID
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getFieldRoles()
    {
        return $this->container['field_roles'];
    }

    /**
     * @param string[] $field_roles A field to role mapping. For example, a field role may be 'brand', meaning that the field contains the manufacturer's name. (key = field role, value = field name)
     *
     * @return $this
     */
    public function setFieldRoles($field_roles)
    {
        $this->container['field_roles'] = $field_roles;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\RecommendationResult
     */
    public function getRecommendations()
    {
        return $this->container['recommendations'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\RecommendationResult $recommendations recommendations for the product with the requested ID
     *
     * @return $this
     */
    public function setRecommendations($recommendations)
    {
        $this->container['recommendations'] = $recommendations;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\RecordWithId
     */
    public function getRecord()
    {
        return $this->container['record'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\RecordWithId $record product record for the requested product ID
     *
     * @return $this
     */
    public function setRecord($record)
    {
        $this->container['record'] = $record;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SimilarProducts
     */
    public function getSimilarProducts()
    {
        return $this->container['similar_products'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SimilarProducts $similar_products products similar to the product with the requested ID
     *
     * @return $this
     */
    public function setSimilarProducts($similar_products)
    {
        $this->container['similar_products'] = $similar_products;

        return $this;
    }
}
