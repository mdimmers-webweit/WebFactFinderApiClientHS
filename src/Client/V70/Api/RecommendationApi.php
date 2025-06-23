<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\RecommendationResult;
use Web\FactFinderApi\Client\V70\Model\RecordWithId;

class RecommendationApi extends ApiClient
{
    public function getRecommendationUsingGET(
        string $channel,
               $id,
        int $max_results = 0,
               $sid = null,
        bool $ids_only = false,
        bool $use_personalization = true
    ) {
        $params = [
            'channel' => $channel,
            'sid' => $sid ?? uniqid(),
            'idsOnly' => $ids_only ? 'true' : 'false',
            'usePersonalization' => $use_personalization ? 'true' : 'false'
        ];

        // ID(s) können als Array oder String übergeben werden
        if (is_array($id)) {
            $params['id'] = implode(',', $id);
        } else {
            $params['id'] = $id;
        }

        if ($max_results > 0) {
            $params['maxResults'] = $max_results;
        }

        $response = $this->executeFFRequest('Recommendation.ff', $params);

        $result = new RecommendationResult();
        $result->setResultRecords($this->mapRecords($response['records'] ?? []));
        $result->setTimedOut($response['timedOut'] ?? false);

        return $result;
    }

    private function mapRecords(array $records): array
    {
        $mapped = [];
        foreach ($records as $record) {
            $recordWithId = new RecordWithId();
            $recordWithId->setId($record['id'] ?? '');
            $recordWithId->setRecord($record['record'] ?? $record);
            $mapped[] = $recordWithId;
        }
        return $mapped;
    }
}