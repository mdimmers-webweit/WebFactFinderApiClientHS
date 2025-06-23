<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\RecordWithId;
use Web\FactFinderApi\Client\V70\Model\SimilarAttributeInfo;

class SimilarproductsApi extends ApiClient
{
    public function getSimilarProductsUsingGET(
        string $channel,
               $id,
        bool $ids_only = false,
        int $max_results = 10
    ) {
        $params = [
            'channel' => $channel,
            'id' => $id,
            'idsOnly' => $ids_only ? 'true' : 'false',
            'maxResults' => $max_results
        ];

        $response = $this->executeFFRequest('SimilarRecords.ff', $params);

        $result = new \Web\FactFinderApi\Client\V70\Model\SimilarProducts();
        $result->setRecords($this->mapRecords($response['records'] ?? []));
        $result->setAttributes($this->mapAttributes($response['attributes'] ?? []));

        return $result;
    }

    private function mapRecords(array $records): array
    {
        // Gleiche Logik wie in RecommendationApi
        $mapped = [];
        foreach ($records as $record) {
            $recordWithId = new RecordWithId();
            $recordWithId->setId($record['id'] ?? '');
            $recordWithId->setRecord($record['record'] ?? $record);
            $mapped[] = $recordWithId;
        }
        return $mapped;
    }

    private function mapAttributes(array $attributes): array
    {
        $mapped = [];
        foreach ($attributes as $attr) {
            $attrInfo = new SimilarAttributeInfo();
            $attrInfo->setName($attr['name'] ?? '');
            $attrInfo->setValue($attr['value'] ?? '');
            $mapped[] = $attrInfo;
        }
        return $mapped;
    }
}