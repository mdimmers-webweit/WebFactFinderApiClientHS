<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\PredictiveBasketResult;
use Web\FactFinderApi\Client\V70\Model\RecordWithId;

class PredbasketApi extends ApiClient
{
    /**
     * @throws \Exception
     */
    public function getPredictionsUsingGET(
        string $channel,
               $user_id,
        int $max_results = 0,
               $blacklist = null,
        bool $ids_only = false
    ): PredictiveBasketResult
    {
        $params = [
            'channel' => $channel,
            'userId' => $user_id,
            'maxResults' => $max_results,
            'idsOnly' => $ids_only ? 'true' : 'false'
        ];

        if ($blacklist) {
            $params['blacklist'] = is_array($blacklist) ? implode(',', $blacklist) : $blacklist;
        }

        $response = $this->executeFFRequest('PredictiveBasket.ff', $params);

        $result = new PredictiveBasketResult();
        $records = [];
        foreach ($response['records'] ?? [] as $record) {
            $recordWithId = new RecordWithId();
            $recordWithId->setId($record['id'] ?? '');
            $recordWithId->setRecord($record['record'] ?? $record);
            $records[] = $recordWithId;
        }
        $result->setResultRecords($records);

        return $result;
    }
}