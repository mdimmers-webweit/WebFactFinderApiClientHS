<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\RecordWithId;

class RecordsApi extends ApiClient
{
    public function getRecordsUsingGET(string $channel, $record_id)
    {
        $params = [
            'channel' => $channel,
            'id' => is_array($record_id) ? implode(',', $record_id) : $record_id,
            'do' => 'getRecords'
        ];

        $response = $this->executeFFRequest('Records.ff', $params);

        $records = [];
        foreach ($response['records'] ?? [] as $record) {
            $recordWithId = new RecordWithId();
            $recordWithId->setId($record['id'] ?? '');
            $recordWithId->setRecord($record['record'] ?? $record);
            $records[] = $recordWithId;
        }

        return $records;
    }

    public function insertRecordsUsingPOST(string $channel, $records, bool $save = false): void
    {
        throw new \Exception('Record insertion is not supported in FactFinder 7.0 via API');
    }

    public function updateUsingPUT(string $channel, $records, bool $save = false): void
    {
        throw new \Exception('Record update is not supported in FactFinder 7.0 via API');
    }

    public function deleteUsingDELETE(string $channel, $record_id, bool $save = false): void
    {
        throw new \Exception('Record deletion is not supported in FactFinder 7.0 via API');
    }
}