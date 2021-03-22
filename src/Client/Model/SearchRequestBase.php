<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
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
abstract class SearchRequestBase extends NavigationRequestBase
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result += [
            'params' => static::getModelClass('SearchParams'),
            'user_input' => 'string',
        ];

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result += [
            'params' => 'params',
            'user_input' => 'userInput',
        ];

        return $result;
    }

    /**
     * @return \Web\FactFinderApi\Client\Model\SearchParamsBase
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\Model\SearchParamsBase $params the search parameters describing the search
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserInput()
    {
        return $this->container['user_input'];
    }

    /**
     * @param string $user_input the search term entered by the user when a suggestion led to this search request
     *
     * @return $this
     */
    public function setUserInput($user_input)
    {
        $this->container['user_input'] = $user_input;

        return $this;
    }
}
