<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * BreadCrumbTrailItem Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class BreadCrumbTrailItem extends BaseModel implements ModelV4Interface
{
    const TYPE_SEARCH = 'search';
    const TYPE_FILTER = 'filter';
    const TYPE_ADVISOR = 'advisor';
    const TYPE_UNSPECIFIED = 'unspecified';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'associated_field_name' => 'string',
            'search_params' => static::getModelClass('SearchParams'),
            'text' => 'string',
            'type' => 'string',
            'value' => 'string',
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
            'associated_field_name' => 'associatedFieldName',
            'search_params' => 'searchParams',
            'text' => 'text',
            'type' => 'type',
            'value' => 'value',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEARCH,
            self::TYPE_FILTER,
            self::TYPE_ADVISOR,
            self::TYPE_UNSPECIFIED,
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!\is_null($this->container['type']) && !\in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'type', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getAssociatedFieldName()
    {
        return $this->container['associated_field_name'];
    }

    /**
     * @param string $associated_field_name Contains the name of the field on which the filter operates. Used for filter type items.
     *
     * @return $this
     */
    public function setAssociatedFieldName($associated_field_name)
    {
        $this->container['associated_field_name'] = $associated_field_name;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\SearchParams
     */
    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $search_params used to perform a search when the item is clicked
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * @param string $text the text to be displayed to the user
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * @param string $type breadcrumb trail item type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!\in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * @param string $value contains information corresponding to the item type (for example, contains the search term for the search type)
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
}
