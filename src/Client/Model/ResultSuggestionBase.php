<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

use Web\FactFinderApi\Client\ObjectSerializer;

abstract class ResultSuggestionBase extends BaseModel
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ResultSuggestion';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'attributes' => 'map[string,object]',
        'hit_count' => 'int',
        'image' => 'string',
        'name' => 'string',
        'score' => 'double',
        'search_params' => '\Web\FactFinderApi\Client\V3\Model\SearchParams',
        'type' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'attributes' => null,
        'hit_count' => 'int32',
        'image' => null,
        'name' => null,
        'score' => 'double',
        'search_params' => null,
        'type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'attributes' => 'attributes',
        'hit_count' => 'hitCount',
        'image' => 'image',
        'name' => 'name',
        'score' => 'score',
        'search_params' => 'searchParams',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'hit_count' => 'setHitCount',
        'image' => 'setImage',
        'name' => 'setName',
        'score' => 'setScore',
        'search_params' => 'setSearchParams',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'hit_count' => 'getHitCount',
        'image' => 'getImage',
        'name' => 'getName',
        'score' => 'getScore',
        'search_params' => 'getSearchParams',
        'type' => 'getType',
    ];

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['hit_count'] = $data['hit_count'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['search_params'] = $data['search_params'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return \json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['hit_count'] === null) {
            $invalidProperties[] = "'hit_count' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return map[string,object]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * @param map[string,object] $attributes Contains additional information for the suggestion. Keys give the names of the attributes, with corresponding values.
     *
     * @return ResultSuggestionBase
     */
    public function setAttributes($attributes): self
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * @return int
     */
    public function getHitCount()
    {
        return $this->container['hit_count'];
    }

    /**
     * @param int $hit_count the number of products that should be found when this suggestion is selected for a search
     *
     * @return $this
     */
    public function setHitCount($hit_count)
    {
        $this->container['hit_count'] = $hit_count;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * @param string $image the URL of the image to be displayed to the user
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * @param string $name the name for the Suggest Entry that should be displayed to the user
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return float
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * @param float $score defines how well the suggestion matches the query
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    public function getSearchParams()
    {
        return $this->container['search_params'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V3\Model\SearchParams $search_params defines the search that should be executed when clicking on Suggest entry
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
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * @param string $type the suggestion type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * @param int $offset Offset
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (\is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }
}
