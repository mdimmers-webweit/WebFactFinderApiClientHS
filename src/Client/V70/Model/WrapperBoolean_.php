<?php

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

class WrapperBoolean_ extends BaseModel implements ModelV70Interface
{
    private string $value;

    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public static function swaggerTypes(): array
    {
        return [
            'value' => 'string',
        ];
    }

    public static function attributeMap(): array
    {
        return [
            'value' => 'value',
        ];
    }
}