<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * CompareResult Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class SuggestionResult extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'article_number_search_allowed' => 'bool',
            'field_roles' => 'map[string,string]',
            'suggestions' => static::getModelClass('ResultSuggestion', true),
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'article_number_search_allowed' => 'articleNumberSearchAllowed',
            'field_roles' => 'fieldRoles',
            'suggestions' => 'suggestions',
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

        if ($this->container['article_number_search_allowed'] === null) {
            $invalidProperties[] = "'article_number_search_allowed' can't be null";
        }
        if ($this->container['field_roles'] === null) {
            $invalidProperties[] = "'field_roles' can't be null";
        }
        if ($this->container['suggestions'] === null) {
            $invalidProperties[] = "'suggestions' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getArticleNumberSearchAllowed()
    {
        return $this->container['article_number_search_allowed'];
    }

    /**
     * @param bool
     *
     * @return $this
     */
    public function setArticleNumberSearchAllowed($articleNumberSearchAllowed)
    {
        $this->container['article_number_search_allowed'] = $articleNumberSearchAllowed;

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
     * @return \Web\FactFinderApi\Client\V4\Model\ResultSuggestion[]
     */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\ResultSuggestion[] $records
     *
     * @return $this
     */
    public function setSuggestions($records)
    {
        $this->container['suggestions'] = $records;

        return $this;
    }
}
