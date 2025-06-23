<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Model;

class SearchRecord extends BaseModel
{
    public static function swaggerTypes(): array
    {
        return [
            'found_words' => 'string[]',
            'id' => 'string',
            'keywords' => 'string[]',
            'position' => 'int',
            'record' => 'map[string,string]',
            'search_similarity' => 'float',
        ];
    }

    public static function attributeMap(): array
    {
        return [
            'found_words' => 'foundWords',
            'id' => 'id',
            'keywords' => 'keywords',
            'position' => 'position',
            'record' => 'record',
            'search_similarity' => 'similarity',
        ];
    }

    public function getFoundWords(): array
    {
        return $this->container['found_words'] ?? [];
    }

    public function setFoundWords(array $found_words): self
    {
        $this->container['found_words'] = $found_words;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->container['id'];
    }

    public function setId(?string $id): self
    {
        $this->container['id'] = $id;
        return $this;
    }

    public function getKeywords(): array
    {
        return $this->container['keywords'] ?? [];
    }

    public function setKeywords(array $keywords): self
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    public function getPosition(): int
    {
        return $this->container['position'] ?? 0;
    }

    public function setPosition(int $position): self
    {
        $this->container['position'] = $position;
        return $this;
    }

    public function getRecord(): array
    {
        return $this->container['record'] ?? [];
    }

    public function setRecord(array $record): self
    {
        $this->container['record'] = $record;
        return $this;
    }

    public function getSearchSimilarity(): float
    {
        return $this->container['search_similarity'] ?? 0.0;
    }

    public function setSearchSimilarity(float $search_similarity): self
    {
        $this->container['search_similarity'] = $search_similarity;
        return $this;
    }
}