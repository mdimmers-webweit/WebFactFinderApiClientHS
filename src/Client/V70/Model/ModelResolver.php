<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\BaseModel;
use Web\FactFinderApi\Client\Model\ModelResolver as BaseModelResolver;

class ModelResolver extends BaseModelResolver
{
    public function __construct()
    {
        parent::__construct(false); // V70 basiert auf V1
    }

    public function createUnifiedModel(string $modelName, ?array $data = null): BaseModel
    {
        $class = '\\Web\\FactFinderApi\\Client\\V70\\Model\\' . $modelName;

        if (!class_exists($class)) {
            // Fallback zu V1
            $class = '\\Web\\FactFinderApi\\Client\\V1\\Model\\' . $modelName;
        }

        return new $class($data);
    }
}