<?php
declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * Facet Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
abstract class FacetBase extends BaseModel
{
    const FILTER_STYLE__DEFAULT = 'DEFAULT';
    const FILTER_STYLE_SLIDER = 'SLIDER';
    const FILTER_STYLE_MULTISELECT = 'MULTISELECT';
    const FILTER_STYLE_TREE = 'TREE';
    const SELECTION_TYPE_SINGLE_HIDE_UNSELECTED = 'singleHideUnselected';
    const SELECTION_TYPE_SINGLE_SHOW_UNSELECTED = 'singleShowUnselected';
    const SELECTION_TYPE_MULTI_SELECT_OR = 'multiSelectOr';
    const SELECTION_TYPE_MULTI_SELECT_AND = 'multiSelectAnd';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    public static function swaggerTypes(): array
    {
        return [
            'detailed_links' => 'int',
            'elements' => static::getModelClass('FacetElement', true),
            'filter_style' => 'string',
            'name' => 'string',
            'selected_elements' => static::getModelClass('FacetElement', true),
            'selection_type' => 'string',
            'show_preview_images' => 'bool',
            'type' => 'string',
            'unit' => 'string',
            'associated_field_name' => 'string',
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
            'detailed_links' => 'detailedLinks',
            'elements' => 'elements',
            'filter_style' => 'filterStyle',
            'name' => 'name',
            'selected_elements' => 'selectedElements',
            'selection_type' => 'selectionType',
            'show_preview_images' => 'showPreviewImages',
            'type' => 'type',
            'unit' => 'unit',
            'associated_field_name' => 'associatedFieldName',
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterStyleAllowableValues()
    {
        return [
            self::FILTER_STYLE__DEFAULT,
            self::FILTER_STYLE_SLIDER,
            self::FILTER_STYLE_MULTISELECT,
            self::FILTER_STYLE_TREE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSelectionTypeAllowableValues()
    {
        return [
            self::SELECTION_TYPE_SINGLE_HIDE_UNSELECTED,
            self::SELECTION_TYPE_SINGLE_SHOW_UNSELECTED,
            self::SELECTION_TYPE_MULTI_SELECT_OR,
            self::SELECTION_TYPE_MULTI_SELECT_AND,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    abstract public function getTypeAllowableValues();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['detailed_links'] === null) {
            $invalidProperties[] = "'detailed_links' can't be null";
        }
        if ($this->container['elements'] === null) {
            $invalidProperties[] = "'elements' can't be null";
        }
        if ($this->container['filter_style'] === null) {
            $invalidProperties[] = "'filter_style' can't be null";
        }
        $allowedValues = $this->getFilterStyleAllowableValues();
        if (!\is_null($this->container['filter_style']) && !\in_array($this->container['filter_style'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'filter_style', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['selected_elements'] === null) {
            $invalidProperties[] = "'selected_elements' can't be null";
        }
        if ($this->container['selection_type'] === null) {
            $invalidProperties[] = "'selection_type' can't be null";
        }
        $allowedValues = $this->getSelectionTypeAllowableValues();
        if (!\is_null($this->container['selection_type']) && !\in_array($this->container['selection_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value for 'selection_type', must be one of '%s'",
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['show_preview_images'] === null) {
            $invalidProperties[] = "'show_preview_images' can't be null";
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
     * @return int
     */
    public function getDetailedLinks()
    {
        return $this->container['detailed_links'];
    }

    /**
     * @param int $detailed_links number of links to be displayed (for the selection menu)
     *
     * @return $this
     */
    public function setDetailedLinks($detailed_links)
    {
        $this->container['detailed_links'] = $detailed_links;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\FacetElement[]
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\FacetElement[] $elements the elements shown in the filter
     *
     * @return $this
     */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilterStyle()
    {
        return $this->container['filter_style'];
    }

    /**
     * @param string $filter_style the style in which the filter should be displayed
     *
     * @return $this
     */
    public function setFilterStyle($filter_style)
    {
        $allowedValues = $this->getFilterStyleAllowableValues();
        if (!\in_array($filter_style, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'filter_style', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_style'] = $filter_style;

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
     * @param string $name filter name that should be displayed to the user
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\FacetElement[]
     */
    public function getSelectedElements()
    {
        return $this->container['selected_elements'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\FacetElement[] $selected_elements the elements of the filter that are currently selected
     *
     * @return $this
     */
    public function setSelectedElements($selected_elements)
    {
        $this->container['selected_elements'] = $selected_elements;

        return $this;
    }

    /**
     * @return string
     */
    public function getSelectionType()
    {
        return $this->container['selection_type'];
    }

    /**
     * @param string $selection_type defines the way this filter behaves when elements are selected
     *
     * @return $this
     */
    public function setSelectionType($selection_type)
    {
        $allowedValues = $this->getSelectionTypeAllowableValues();
        if (!\in_array($selection_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value for 'selection_type', must be one of '%s'",
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['selection_type'] = $selection_type;

        return $this;
    }

    /**
     * @return bool
     */
    public function getShowPreviewImages()
    {
        return $this->container['show_preview_images'];
    }

    /**
     * @param bool $show_preview_images if true, preview images should be displayed to the user
     *
     * @return $this
     */
    public function setShowPreviewImages($show_preview_images)
    {
        $this->container['show_preview_images'] = $show_preview_images;

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
     * @param string $type the type of the filter elements
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!\is_null($type) && !\in_array($type, $allowedValues, true)) {
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
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * @param string $unit the units to be shown, if filter elements represent (for instance) length, or weight
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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
}
