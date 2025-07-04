<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * FacetElement Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FacetElementBase extends BaseModel
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'absolute_max_value' => 'double',
            'absolute_min_value' => 'double',
            'associated_field_name' => 'string',
            'cluster_level' => 'int',
            'implicit_selection' => 'bool',
            'preview_image_url' => 'string',
            'search_params' => static::getModelClass('SearchParams'),
            'selected' => 'bool',
            'selected_max_value' => 'double',
            'selected_min_value' => 'double',
            'text' => 'string',
            'total_hits' => 'int',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'absolute_max_value' => 'absoluteMaxValue',
            'absolute_min_value' => 'absoluteMinValue',
            'associated_field_name' => 'associatedFieldName',
            'cluster_level' => 'clusterLevel',
            'implicit_selection' => 'implicitSelection',
            'preview_image_url' => 'previewImageURL',
            'search_params' => 'searchParams',
            'selected' => 'selected',
            'selected_max_value' => 'selectedMaxValue',
            'selected_min_value' => 'selectedMinValue',
            'text' => 'text',
            'total_hits' => 'totalHits',
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

        if ($this->container['associated_field_name'] === null) {
            $invalidProperties[] = "'associated_field_name' can't be null";
        }
        if ($this->container['cluster_level'] === null) {
            $invalidProperties[] = "'cluster_level' can't be null";
        }
        if ($this->container['implicit_selection'] === null) {
            $invalidProperties[] = "'implicit_selection' can't be null";
        }
        if ($this->container['selected'] === null) {
            $invalidProperties[] = "'selected' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return float
     */
    public function getAbsoluteMaxValue()
    {
        return $this->container['absolute_max_value'];
    }

    /**
     * @param float $absolute_max_value the absolute maximum value for the overall slider range
     *
     * @return $this
     */
    public function setAbsoluteMaxValue($absolute_max_value)
    {
        $this->container['absolute_max_value'] = $absolute_max_value;

        return $this;
    }

    /**
     * @return float
     */
    public function getAbsoluteMinValue()
    {
        return $this->container['absolute_min_value'];
    }

    /**
     * @param float $absolute_min_value the absolute minimum value for the overall slider range
     *
     * @return $this
     */
    public function setAbsoluteMinValue($absolute_min_value)
    {
        $this->container['absolute_min_value'] = $absolute_min_value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAssociatedFieldName()
    {
        return $this->container['associated_field_name'];
    }

    /**
     * @param string $associated_field_name the name of the field that contains the value represented by this element
     *
     * @return $this
     */
    public function setAssociatedFieldName($associated_field_name)
    {
        $this->container['associated_field_name'] = $associated_field_name;

        return $this;
    }

    /**
     * @return int
     */
    public function getClusterLevel()
    {
        return $this->container['cluster_level'];
    }

    /**
     * @param int $cluster_level Level in the cluster hierarchy. Corresponding subcategories have a higher (deeper) level.
     *
     * @return $this
     */
    public function setClusterLevel($cluster_level)
    {
        $this->container['cluster_level'] = $cluster_level;

        return $this;
    }

    /**
     * @return bool
     */
    public function getImplicitSelection()
    {
        return $this->container['implicit_selection'];
    }

    /**
     * @param bool $implicit_selection true, if the selection is implicit
     *
     * @return $this
     */
    public function setImplicitSelection($implicit_selection)
    {
        $this->container['implicit_selection'] = $implicit_selection;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreviewImageUrl()
    {
        return $this->container['preview_image_url'];
    }

    /**
     * @param string $preview_image_url URL to the preview image to be displayed with the element
     *
     * @return $this
     */
    public function setPreviewImageUrl($preview_image_url)
    {
        $this->container['preview_image_url'] = $preview_image_url;

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
     * @param \Web\FactFinderApi\Client\V4\Model\SearchParams $search_params defines the search that should be executed when the element is clicked
     *
     * @return $this
     */
    public function setSearchParams($search_params)
    {
        $this->container['search_params'] = $search_params;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * @param bool $selected true, if the element is currently selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * @return float
     */
    public function getSelectedMaxValue()
    {
        return $this->container['selected_max_value'];
    }

    /**
     * @param float $selected_max_value the maximum value of the currently selected slider range
     *
     * @return $this
     */
    public function setSelectedMaxValue($selected_max_value)
    {
        $this->container['selected_max_value'] = $selected_max_value;

        return $this;
    }

    /**
     * @return float
     */
    public function getSelectedMinValue()
    {
        return $this->container['selected_min_value'];
    }

    /**
     * @param float $selected_min_value the minimum value of the currently selected slider range
     *
     * @return $this
     */
    public function setSelectedMinValue($selected_min_value)
    {
        $this->container['selected_min_value'] = $selected_min_value;

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
     * @return int
     */
    public function getTotalHits()
    {
        return $this->container['total_hits'];
    }

    /**
     * @param int $total_hits the number of products that the search result should contain when this facet element is selected
     *
     * @return $this
     */
    public function setTotalHits($total_hits)
    {
        $this->container['total_hits'] = $total_hits;

        return $this;
    }
}
