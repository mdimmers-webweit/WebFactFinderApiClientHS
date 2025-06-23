<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class Facet extends BaseModel
{
    public const FILTER_STYLE_DEFAULT = 'DEFAULT';
    public const FILTER_STYLE_SLIDER = 'SLIDER';
    public const FILTER_STYLE_MULTISELECT = 'MULTISELECT';
    public const FILTER_STYLE_TREE = 'TREE';

    public const SELECTION_TYPE_SINGLE_HIDE_UNSELECTED = 'singleHideUnselected';
    public const SELECTION_TYPE_SINGLE_SHOW_UNSELECTED = 'singleShowUnselected';
    public const SELECTION_TYPE_MULTI_SELECT_OR = 'multiSelectOr';
    public const SELECTION_TYPE_MULTI_SELECT_AND = 'multiSelectAnd';

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

    public function getDetailedLinks(): int
    {
        return $this->container['detailed_links'] ?? 0;
    }

    public function setDetailedLinks(int $detailed_links): self
    {
        $this->container['detailed_links'] = $detailed_links;
        return $this;
    }

    public function getElements(): array
    {
        return $this->container['elements'] ?? [];
    }

    public function setElements(array $elements): self
    {
        $this->container['elements'] = $elements;
        return $this;
    }

    public function getFilterStyle(): string
    {
        return $this->container['filter_style'] ?? self::FILTER_STYLE_DEFAULT;
    }

    public function setFilterStyle(string $filter_style): self
    {
        $this->container['filter_style'] = $filter_style;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->container['name'];
    }

    public function setName(?string $name): self
    {
        $this->container['name'] = $name;
        return $this;
    }

    public function getSelectedElements(): array
    {
        return $this->container['selected_elements'] ?? [];
    }

    public function setSelectedElements(array $selected_elements): self
    {
        $this->container['selected_elements'] = $selected_elements;
        return $this;
    }

    public function getSelectionType(): string
    {
        return $this->container['selection_type'] ?? self::SELECTION_TYPE_MULTI_SELECT_OR;
    }

    public function setSelectionType(string $selection_type): self
    {
        $this->container['selection_type'] = $selection_type;
        return $this;
    }

    public function getShowPreviewImages(): bool
    {
        return $this->container['show_preview_images'] ?? false;
    }

    public function setShowPreviewImages(bool $show_preview_images): self
    {
        $this->container['show_preview_images'] = $show_preview_images;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->container['type'];
    }

    public function setType(?string $type): self
    {
        $this->container['type'] = $type;
        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->container['unit'];
    }

    public function setUnit(?string $unit): self
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    public function getAssociatedFieldName(): ?string
    {
        return $this->container['associated_field_name'];
    }

    public function setAssociatedFieldName(?string $associated_field_name): self
    {
        $this->container['associated_field_name'] = $associated_field_name;
        return $this;
    }
}