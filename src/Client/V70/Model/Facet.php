<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

use Web\FactFinderApi\Client\Model\FacetBase;
use Web\FactFinderApi\Client\V70\Model\ModelV70Interface;

class Facet extends FacetBase implements ModelV70Interface
{
    public const TYPE_NUMBER = 'number';
    public const TYPE_MULTI = 'multi';
    public const TYPE_TEXT = 'text';
    public const TYPE_CATEGORY_PATH = 'categoryPath';

    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result['group_order'] = 'int';

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result['group_order'] = 'groupOrder';

        return $result;
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NUMBER,
            self::TYPE_MULTI,
            self::TYPE_TEXT,
            self::TYPE_CATEGORY_PATH,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['group_order'] === null) {
            $invalidProperties[] = "'group_order' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return int
     */
    public function getGroupOrder()
    {
        return $this->container['group_order'];
    }

    /**
     * @param int $group_order group_order
     *
     * @return $this
     */
    public function setGroupOrder($group_order)
    {
        $this->container['group_order'] = $group_order;

        return $this;
    }
}