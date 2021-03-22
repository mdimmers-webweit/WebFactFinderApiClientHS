<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * SortItem Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
abstract class SortItemBase extends BaseModel
{
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'name' => 'string',
            'order' => 'string',
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
            'name' => 'name',
            'order' => 'order',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        $allowedValues = $this->getOrderAllowableValues();
        if (!\is_null($this->container['order']) && !\in_array($this->container['order'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'order', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * @param string $name the name of the field to be sorted by, or 'Relevancy', for score based sorting
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * @param string $order the sort order direction (ascending, descending)
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $allowedValues = $this->getOrderAllowableValues();
        if (!\in_array($order, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'order', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order'] = $order;

        return $this;
    }
}
