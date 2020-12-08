<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */



namespace Web\FactFinderApi\Client\Model;

/**
 * FilterValue Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FilterValueBase extends BaseModel
{
    const TYPE__OR = 'or';
    const TYPE__AND = 'and';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'exclude' => 'bool',
            'type' => 'string',
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
            'exclude' => 'exclude',
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
            self::TYPE__OR,
            self::TYPE__AND,
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

        if ($this->container['exclude'] === null) {
            $invalidProperties[] = "'exclude' can't be null";
        }
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
     * @return bool
     */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
     * @param bool $exclude when set to true, the filter will match when the record value does not equal the filter value
     *
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;

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
     * @param string $type describes how this filter value should interact with the corresponding filter field
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
     * @param string $value the value to which the record values will be compared
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
}
