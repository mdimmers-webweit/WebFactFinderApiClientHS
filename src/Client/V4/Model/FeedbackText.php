<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\BaseModel;

/**
 * FeedbackText Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class FeedbackText extends BaseModel implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        return [
            'html' => 'bool',
            'id' => 'int',
            'label' => 'string',
            'position' => 'int',
            'teaser' => 'bool',
            'text' => 'string',
        ];
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        return [
            'html' => 'html',
            'id' => 'id',
            'label' => 'label',
            'position' => 'position',
            'teaser' => 'teaser',
            'text' => 'text',
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['html'] === null) {
            $invalidProperties[] = "'html' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['teaser'] === null) {
            $invalidProperties[] = "'teaser' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * @param bool $html set to true, if the text should be displayed as HTML
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * @param int $id the ID of the feedback text
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * @param string $label describes where the text should be displayed
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * @param int $position The position the text should be displayed at if it is a teaser
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTeaser()
    {
        return $this->container['teaser'];
    }

    /**
     * @param bool $teaser Set to true, if the text is considered a teaser
     *
     * @return $this
     */
    public function setTeaser($teaser)
    {
        $this->container['teaser'] = $teaser;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * @param string $text the text to be shown to the user
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }
}
