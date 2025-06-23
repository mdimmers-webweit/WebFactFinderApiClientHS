<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

// TagcloudApi
use Web\FactFinderApi\Client\V70\Model\TagCloudEntry;

class TagcloudApi extends ApiClient
{
    /**
     * @throws \Exception
     */
    public function getTagCloudUsingGET(string $channel, int $word_count = 0): array
    {
        $params = [
            'channel' => $channel,
            'wordCount' => $word_count
        ];

        $response = $this->executeFFRequest('TagCloud.ff', $params);

        $entries = [];
        foreach ($response['tagCloudEntries'] ?? [] as $entry) {
            $tagEntry = new TagCloudEntry();
            $tagEntry->setNr($entry['nr'] ?? 0);
            $tagEntry->setSearchTerm($entry['searchTerm'] ?? '');
            $tagEntry->setSearchCount($entry['searchCount'] ?? 0);
            $tagEntry->setWeight($entry['weight'] ?? 0.0);
            $entries[] = $tagEntry;
        }

        return $entries;
    }
}