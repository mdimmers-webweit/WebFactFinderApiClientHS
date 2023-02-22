<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

abstract class SearchParamsBase extends NavigationParamsBase
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result += [
            'query' => 'string',
            'search_field' => 'string',
        ];

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result += [
            'query' => 'query',
            'search_field' => 'searchField',
        ];

        return $result;
    }

    /**
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * @param string $query the search term
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchField()
    {
        return $this->container['search_field'];
    }

    /**
     * @param string $search_field If set, the search term will be looked for only in the given field. Otherwise all searchable fields will be considered (for article number searches, all fields marked as containing article numbers).
     *
     * @return $this
     */
    public function setSearchField($search_field)
    {
        $this->container['search_field'] = $search_field;

        return $this;
    }
}
