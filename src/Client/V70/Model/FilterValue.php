<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class FilterValue extends BaseModel
{
    public const TYPE_OR = 'or';
    public const TYPE_AND = 'and';

    public static function swaggerTypes(): array
    {
        return [
            'exclude' => 'bool',
            'type' => 'string',
            'value' => 'string',
        ];
    }

    public static function attributeMap(): array
    {
        return [
            'exclude' => 'exclude',
            'type' => 'type',
            'value' => 'value',
        ];
    }

    public function getExclude(): bool
    {
        return $this->container['exclude'] ?? false;
    }

    public function setExclude(bool $exclude): self
    {
        $this->container['exclude'] = $exclude;
        return $this;
    }

    public function getType(): string
    {
        return $this->container['type'] ?? self::TYPE_OR;
    }

    public function setType(string $type): self
    {
        $this->container['type'] = $type;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->container['value'];
    }

    public function setValue(?string $value): self
    {
        $this->container['value'] = $value;
        return $this;
    }
}