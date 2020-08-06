<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\Model;

/**
 * @method FilterBase        createFilter(?array $data = null)
 * @method FilterValueBase   createFilterValue(?array $data = null)
 * @method SortItemBase      createSortItem(?array $data = null)
 * @method SearchParamsBase  createSearchParams(?array $data = null)
 * @method SearchRequestBase createSearchRequest(?array $data = null)
 */
class ModelResolver
{
    private bool $isNG;

    public function __construct(bool $isNG = true)
    {
        $this->isNG = $isNG;
    }

    public function __call($method, $args)
    {
        if (\preg_match('/create(.*)/', $method, $matches) > 0) {
            return \call_user_func_array([$this, 'createUnifiedModel'], $args);
        }
        throw new \BadMethodCallException('Call to undefined method ' . \get_class($this) . '::' . $method . '()');
    }

//    public function createFilter(?array $data = null): FilterBase
//    {
//        return $this->createUnifiedModel('Filter', $data);
//    }
//
//    public function createFilterValue(?array $data = null): FilterValueBase
//    {
//        return $this->createUnifiedModel('FilterValue', $data);
//    }
//
//    public function createSortItem(?array $data = null): SortItemBase
//    {
//        return $this->createUnifiedModel('SortItem', $data);
//    }

    public function createUnifiedModel(string $modelName, ?array $data = null): BaseModel
    {
        $class = self::createUnifiedModelClass($this->isNG ? 'V3' : 'V1', $modelName);

        return new $class($data);
    }

    public static function createUnifiedModelClass(string $version, string $modelName, bool $isArray = false): string
    {
        return '\\Web\\FactFinderApi\\Client\\' . $version . '\\Model\\' . $modelName . ($isArray ? '[]' : '');
    }

    public function setIsNG(bool $isNG): void
    {
        $this->isNG = $isNG;
    }
}
