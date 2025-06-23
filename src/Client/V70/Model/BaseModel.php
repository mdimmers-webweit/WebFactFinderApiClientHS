<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel as BaseModelParent;

abstract class BaseModel extends BaseModelParent implements ModelV70Interface
{
    public static function getModelClass(string $modelName, bool $isArray = false): string
    {
        return '\\Web\\FactFinderApi\\Client\\V70\\Model\\' . $modelName . ($isArray ? '[]' : '');
    }
}