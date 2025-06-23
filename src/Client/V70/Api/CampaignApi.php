<?php
declare(strict_types=1);

namespace Web\FactFinderApi\Client\V70\Api;

use Web\FactFinderApi\Client\Api\CampaignApiInterface;
use Web\FactFinderApi\Client\V70\Model\Answer;
use Web\FactFinderApi\Client\V70\Model\Campaign;
use Web\FactFinderApi\Client\V70\Model\FeedbackText;
use Web\FactFinderApi\Client\V70\Model\Question;
use Web\FactFinderApi\Client\V70\Model\RecordWithId;
use Web\FactFinderApi\Client\V70\Model\Target;

class CampaignApi extends ApiClient implements CampaignApiInterface
{
    /**
     * Get page campaigns
     */
    public function getPageCampaignsUsingGET(
        string $channel,
               $page_id,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $params = [
            'channel' => $channel,
            'pageId' => $page_id,
            'idsOnly' => $ids_only ? 'true' : 'false',
            'sid' => $sid ?? uniqid()
        ];

        if ($advisor_status !== null) {
            $params['advisorStatus'] = $advisor_status;
        }

        $response = $this->executeFFRequest('Campaign.ff', $params);
        return $this->mapCampaigns($response);
    }

    /**
     * Get product campaigns
     */
    public function getProductCampaignsUsingGET(
        string $channel,
               $product_number,
        string $id_type = 'productNumber',
        bool $ids_only = false,
        ?string $sid = null,
        ?string $advisor_status = null
    ): array {
        $params = [
            'channel' => $channel,
            'productNumber' => $product_number,
            'idsOnly' => $ids_only ? 'true' : 'false',
            'sid' => $sid ?? uniqid()
        ];

        // FactFinder 7.0 verwendet möglicherweise einen anderen Parameter für die ID
        if ($id_type !== 'productNumber') {
            $params['id'] = $product_number;
            unset($params['productNumber']);
        }

        if ($advisor_status !== null) {
            $params['advisorStatus'] = $advisor_status;
        }

        $response = $this->executeFFRequest('Campaign.ff', $params);
        return $this->mapCampaigns($response);
    }

    /**
     * Get shopping cart campaigns
     */
    public function getShoppingCartCampaignsUsingGET(
        string $channel,
               $product_number,
        bool $ids_only = false,
        ?string $sid = null,
        ?string $advisor_status = null
    ): array {
        $params = [
            'channel' => $channel,
            'idsOnly' => $ids_only ? 'true' : 'false',
            'sid' => $sid ?? uniqid(),
            'do' => 'getShoppingCartCampaigns' // FactFinder 7.0 spezifisch
        ];

        // Produkt-IDs als Array oder komma-separiert
        if (is_array($product_number)) {
            $params['productNumber'] = implode(',', $product_number);
        } else {
            $params['productNumber'] = $product_number;
        }

        if ($advisor_status !== null) {
            $params['advisorStatus'] = $advisor_status;
        }

        $response = $this->executeFFRequest('Campaign.ff', $params);
        return $this->mapCampaigns($response);
    }

    /**
     * Get page campaigns with HTTP info - für Kompatibilität
     */
    public function getPageCampaignsUsingGETWithHttpInfo(
        string $channel,
               $page_id,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getPageCampaignsUsingGET($channel, $page_id, $ids_only, $sid, $advisor_status);
        return [$campaigns, 200, []];
    }

    /**
     * Get product campaigns with HTTP info - für Kompatibilität
     */
    public function getProductCampaignsUsingGETWithHttpInfo(
        string $channel,
               $product_number,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getProductCampaignsUsingGET($channel, $product_number, 'productNumber', $ids_only, $sid, $advisor_status);
        return [$campaigns, 200, []];
    }

    /**
     * Get shopping cart campaigns with HTTP info - für Kompatibilität
     */
    public function getShoppingCartCampaignsUsingGETWithHttpInfo(
        string $channel,
               $product_number,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getShoppingCartCampaignsUsingGET($channel, $product_number, $ids_only, $sid, $advisor_status);
        return [$campaigns, 200, []];
    }

    /**
     * Async methods - für Kompatibilität (führen synchron aus in 7.0)
     */
    public function getPageCampaignsUsingGETAsync(
        string $channel,
               $page_id,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getPageCampaignsUsingGET($channel, $page_id, $ids_only, $sid, $advisor_status);
        return new \GuzzleHttp\Promise\FulfilledPromise($campaigns);
    }

    public function getProductCampaignsUsingGETAsync(
        string $channel,
               $product_number,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getProductCampaignsUsingGET($channel, $product_number, 'productNumber', $ids_only, $sid, $advisor_status);
        return new \GuzzleHttp\Promise\FulfilledPromise($campaigns);
    }

    public function getShoppingCartCampaignsUsingGETAsync(
        string $channel,
               $product_number,
        bool $ids_only = false,
               $sid = null,
               $advisor_status = null
    ) {
        $campaigns = $this->getShoppingCartCampaignsUsingGET($channel, $product_number, $ids_only, $sid, $advisor_status);
        return new \GuzzleHttp\Promise\FulfilledPromise($campaigns);
    }

    /**
     * Map FactFinder 7.0 campaign response to model
     */
    private function mapCampaigns(array $response): array
    {
        $campaigns = [];

        // FactFinder 7.0 Response-Struktur kann variieren
        $campaignData = $response['campaigns'] ?? $response['campaign'] ?? [];

        if (!empty($campaignData)) {
            // Prüfen ob es ein einzelnes Campaign-Objekt oder ein Array ist
            if (isset($campaignData['name']) || isset($campaignData['id'])) {
                // Einzelnes Campaign-Objekt
                $campaigns[] = $this->createCampaign($campaignData);
            } else {
                // Array von Campaigns
                foreach ($campaignData as $data) {
                    $campaigns[] = $this->createCampaign($data);
                }
            }
        }

        return $campaigns;
    }

    /**
     * Create Campaign model from data
     */
    private function createCampaign(array $data): Campaign
    {
        $campaign = new Campaign();

        // Basis-Eigenschaften
        $campaign->setId($data['id'] ?? '');
        $campaign->setName($data['name'] ?? '');
        $campaign->setCategory($data['category'] ?? '');
        $campaign->setFlavour($this->mapFlavour($data['flavour'] ?? $data['type'] ?? ''));

        // Advisor Tree
        if (isset($data['advisorTree']) || isset($data['questions'])) {
            $questions = $this->mapQuestions($data['advisorTree'] ?? $data['questions'] ?? []);
            $campaign->setAdvisorTree($questions);
        }

        // Active Questions
        if (isset($data['activeQuestions'])) {
            $activeQuestions = $this->mapQuestions($data['activeQuestions']);
            $campaign->setActiveQuestions($activeQuestions);
        }

        // Feedback Texts
        if (isset($data['feedbackTexts'])) {
            $feedbackTexts = $this->mapFeedbackTexts($data['feedbackTexts']);
            $campaign->setFeedbackTexts($feedbackTexts);
        }

        // Pushed Products
        if (isset($data['pushedProducts']) || isset($data['products'])) {
            $products = $this->mapPushedProducts($data['pushedProducts'] ?? $data['products'] ?? []);
            $campaign->setPushedProductsRecords($products);
        }

        // Target/Redirect
        if (isset($data['target']) || isset($data['redirectUrl'])) {
            $target = new Target();
            $target->setDestination($data['target']['destination'] ?? $data['redirectUrl'] ?? '');
            $target->setName($data['target']['name'] ?? '');
            $campaign->setTarget($target);
        }

        return $campaign;
    }

    /**
     * Map flavour/type to standard format
     */
    private function mapFlavour(string $flavour): string
    {
        $mapping = [
            'advisor' => Campaign::FLAVOUR_ADVISOR,
            'redirect' => Campaign::FLAVOUR_REDIRECT,
            'feedback' => Campaign::FLAVOUR_FEEDBACK,
            'product' => Campaign::FLAVOUR_PRODUCT,
            'ADVISOR' => Campaign::FLAVOUR_ADVISOR,
            'REDIRECT' => Campaign::FLAVOUR_REDIRECT,
            'FEEDBACK' => Campaign::FLAVOUR_FEEDBACK,
            'PRODUCT' => Campaign::FLAVOUR_PRODUCT,
        ];

        return $mapping[$flavour] ?? Campaign::FLAVOUR_PRODUCT;
    }

    /**
     * Map questions for advisor campaigns
     */
    private function mapQuestions(array $questionsData): array
    {
        $questions = [];

        foreach ($questionsData as $questionData) {
            $question = new Question();
            $question->setId($questionData['id'] ?? '');
            $question->setText($questionData['text'] ?? $questionData['question'] ?? '');
            $question->setVisible($questionData['visible'] ?? true);

            // Map answers
            if (isset($questionData['answers'])) {
                $answers = [];
                foreach ($questionData['answers'] as $answerData) {
                    $answer = new Answer();
                    $answer->setId($answerData['id'] ?? '');
                    $answer->setText($answerData['text'] ?? $answerData['answer'] ?? '');

                    // Map sub-questions if exist
                    if (isset($answerData['questions'])) {
                        $subQuestions = $this->mapQuestions($answerData['questions']);
                        $answer->setQuestions($subQuestions);
                    }

                    $answers[] = $answer;
                }
                $question->setAnswers($answers);
            }

            $questions[] = $question;
        }

        return $questions;
    }

    /**
     * Map feedback texts
     */
    private function mapFeedbackTexts(array $feedbackData): array
    {
        $feedbackTexts = [];

        foreach ($feedbackData as $data) {
            $feedback = new FeedbackText();
            $feedback->setId($data['id'] ?? 0);
            $feedback->setText($data['text'] ?? '');
            $feedback->setLabel($data['label'] ?? '');
            $feedback->setPosition($data['position'] ?? 0);
            $feedback->setHtml($data['html'] ?? false);
            $feedback->setTeaser($data['teaser'] ?? false);

            $feedbackTexts[] = $feedback;
        }

        return $feedbackTexts;
    }

    /**
     * Map pushed products
     */
    private function mapPushedProducts(array $productsData): array
    {
        $products = [];

        foreach ($productsData as $productData) {
            $record = new RecordWithId();
            $record->setId($productData['id'] ?? '');
            $record->setRecord($productData['record'] ?? $productData);

            $products[] = $record;
        }

        return $products;
    }
}