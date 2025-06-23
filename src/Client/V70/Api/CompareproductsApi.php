<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\V70\Model\CompareResult;

class CompareproductsApi extends ApiClient
{
    public function compareUsingGET(string $channel, $id, bool $ids_only = false, $custom_parameters = null)
    {
        $params = [
            'channel' => $channel,
            'idsOnly' => $ids_only ? 'true' : 'false'
        ];

        if (is_array($id)) {
            $params['id'] = implode(',', $id);
        } else {
            $params['id'] = $id;
        }

        $response = $this->executeFFRequest('Compare.ff', $params);

        $result = new CompareResult();
        // Map response...

        return $result;
    }
}