<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

abstract class ResultSuggestionBase extends BaseModel
{
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ResultSuggestion';

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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
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

    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * @param array $attributes Contains additional information for the suggestion. Keys give the names of the attributes, with corresponding values.
     *
     * @return static
     */
    public function setAttributes($attributes)
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

    public function getSearchParams(): SearchParamsBase
    {
        return $this->container['search_params'];
    }

    /**
     * @param SearchParamsBase $search_params defines the search that should be executed when clicking on Suggest entry
     *
     * @return $this
     */
    public function setSearchParams(SearchParamsBase $search_params)
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
}
