<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Model;

use Web\FactFinderApi\Client\Model\ResultBase;

/**
 * Result Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class Result extends ResultBase implements ModelV4Interface
{
    /**
     * Array of property to type mappings. Used for (de)serialization
     */
    public static function swaggerTypes(): array
    {
        $result = parent::swaggerTypes();

        $result = array_merge($result, [
            'article_number_search' => 'bool',
            'answers' => static::getModelClass('Answer', true),
            'took_worldmatch' => 'int',
            'score_first_hit' => 'double',
            'score_last_hit' => 'double',
        ]);

        return $result;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     */
    public static function attributeMap(): array
    {
        $result = parent::attributeMap();

        $result = array_merge($result, [
            'facets' => 'facets',
            'article_number_search' => 'articleNumberSearch',
            'answers' => 'answers',
            'campaigns' => 'campaigns',
            'took_total' => 'tookTotal',
            'took_worldmatch' => 'int64',
            'score_first_hit' => 'double',
            'score_last_hit' => 'double',
            'total_hits' => 'totalHits',
            'sort_items' => 'sortItems',
            'hits' => 'hits',
        ]);

        return $result;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['answers'] === null) {
            $invalidProperties[] = "'answers' can't be null";
        }
        if ($this->container['article_number_search'] === null) {
            $invalidProperties[] = "'article_number_search' can't be null";
        }

        if ($this->container['took_worldmatch'] === null) {
            $invalidProperties[] = "'took_worldmatch' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * @return \Web\FactFinderApi\Client\V4\Model\Answer[]
     */
    public function getAnswers()
    {
        return $this->container['answers'];
    }

    /**
     * @param \Web\FactFinderApi\Client\V4\Model\Answer[] $answers the selected answers of this result
     *
     * @return $this
     */
    public function setAnswers($answers)
    {
        $this->container['answers'] = $answers;

        return $this;
    }

    /**
     * @return bool
     */
    public function getArticleNumberSearch()
    {
        return $this->container['article_number_search'];
    }

    /**
     * @param bool $article_number_search set to true when an article number search was performed
     *
     * @return $this
     */
    public function setArticleNumberSearch($article_number_search)
    {
        $this->container['article_number_search'] = $article_number_search;

        return $this;
    }

    /**
     * @return int
     */
    public function getTookWorldmatch()
    {
        return $this->container['took_worldmatch'];
    }

    /**
     * @param int $took_worldmatch the time required to produce the results in the core (in ms)
     *
     * @return $this
     */
    public function setTookWorldmatch($took_worldmatch)
    {
        $this->container['took_worldmatch'] = $took_worldmatch;

        return $this;
    }
}
