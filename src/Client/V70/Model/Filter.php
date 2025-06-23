<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class Filter extends BaseModel
{
    public static function swaggerTypes(): array
    {
        return [
            'name' => 'string',
            'substring' => 'bool',
            'values' => static::getModelClass('FilterValue', true),
        ];
    }

    public static function attributeMap(): array
    {
        return [
            'name' => 'name',
            'substring' => 'substring',
            'values' => 'values',
        ];
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

    public function getSubstring(): bool
    {
        return $this->container['substring'] ?? false;
    }

    public function setSubstring(bool $substring): self
    {
        $this->container['substring'] = $substring;
        return $this;
    }

    public function getValues(): array
    {
        return $this->container['values'] ?? [];
    }

    public function setValues(array $values): self
    {
        $this->container['values'] = $values;
        return $this;
    }
}