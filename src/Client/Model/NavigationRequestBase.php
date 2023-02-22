<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * SearchRequest Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
abstract class NavigationRequestBase extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'params' => static::getModelClass('NavigationParams'),
            'search_control_params' => static::getModelClass('SearchControlParams'),
            'sid' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'params' => 'params',
            'search_control_params' => 'searchControlParams',
            'sid' => 'sid',
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

        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\Model\NavigationParamsBase
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\Model\NavigationParamsBase $params the search parameters describing the search
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchControlParams
     */
    public function getSearchControlParams()
    {
        return $this->container['search_control_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchControlParams $search_control_params The search control parameter to control how the search will be executed. E.g. if campaigns should be used.
     *
     * @return $this
     */
    public function setSearchControlParams($search_control_params)
    {
        $this->container['search_control_params'] = $search_control_params;

        return $this;
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->container['sid'];
    }

    /**
     * @param string $sid the session ID of the user sending this search request
     *
     * @return $this
     */
    public function setSid($sid)
    {
        $this->container['sid'] = $sid;

        return $this;
    }
}
