<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\ImportChannelResult;
use Web\FactFinderApi\Client\V70\Model\ImportResult;
use Web\FactFinderApi\Client\V70\Model\WrapperBoolean_;

class ImportApi extends ApiClient
{
    public function isImportRunningUsingGET($channel)
    {
        $params = [
            'channel' => is_array($channel) ? implode(',', $channel) : $channel,
            'do' => 'isImportRunning'
        ];

        $response = $this->executeFFRequest('Import.ff', $params);

        $result = new WrapperBoolean_();
        // FactFinder 7.0 gibt möglicherweise direkt einen boolean zurück
        $result->setValue($response['running'] ?? $response['importRunning'] ?? false);

        return $result;
    }

    public function startSearchImportUsingPOST($channel = null, bool $download = false, bool $quiet = false)
    {
        $params = [
            'do' => 'import',
            'type' => 'search',
            'download' => $download ? 'true' : 'false',
            'quiet' => $quiet ? 'true' : 'false'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $response = $this->executeFFRequest('Import.ff', $params);
        return $this->mapImportResult($response);
    }

    public function startSuggestImportUsingPOST($channel = null, bool $quiet = false)
    {
        $params = [
            'do' => 'import',
            'type' => 'suggest',
            'quiet' => $quiet ? 'true' : 'false'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $response = $this->executeFFRequest('Import.ff', $params);
        return $this->mapImportResult($response);
    }

    public function startRecommendationImportUsingPOST($channel = null, bool $quiet = false)
    {
        $params = [
            'do' => 'import',
            'type' => 'recommendation',
            'quiet' => $quiet ? 'true' : 'false'
        ];

        if ($channel) {
            $params['channel'] = is_array($channel) ? implode(',', $channel) : $channel;
        }

        $response = $this->executeFFRequest('Import.ff', $params);
        return $this->mapImportResult($response);
    }

    private function mapImportResult(array $response): ImportResult
    {
        $result = new ImportResult();
        $result->setStartDate(new \DateTime());

        $messages = [];
        if (isset($response['messages'])) {
            foreach ($response['messages'] as $channel => $channelMessages) {
                $channelResult = new ImportChannelResult();
                $channelResult->setStatusMessages($channelMessages['status'] ?? []);
                $channelResult->setErrorMessages($channelMessages['errors'] ?? []);
                $messages[$channel] = $channelResult;
            }
        }
        $result->setMessages($messages);

        return $result;
    }
}