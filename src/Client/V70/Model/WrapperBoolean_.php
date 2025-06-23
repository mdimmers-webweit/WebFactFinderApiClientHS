<?php

namespace Web\FactFinderApi\Client\V70\Model;

class WrapperBoolean_
{
    private string $value;

    public function __construct()
    {
    }
    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

}