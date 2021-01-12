<?php declare(strict_types=1);
/*
 * FACT-Finder REST API Client
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ObjectSerializer;

/**
 * JobsApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class JobsApi extends ApiClient
{
    /**
     * Operation startJobUsingPOST
     *
     * Start the job with the given name and group name. The job will only be started, if it is not already running.
     *
     * @param string $job_name  jobName (required)
     * @param string $job_group jobGroup (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]
     */
    public function startJobUsingPOST($job_name, $job_group)
    {
        list($response) = $this->startJobUsingPOSTWithHttpInfo($job_name, $job_group);

        return $response;
    }

    /**
     * Operation startJobUsingPOSTWithHttpInfo
     *
     * Start the job with the given name and group name. The job will only be started, if it is not already running.
     *
     * @param string $job_name  jobName (required)
     * @param string $job_group jobGroup (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startJobUsingPOSTWithHttpInfo($job_name, $job_group)
    {
        $request = $this->startJobUsingPOSTRequest($job_name, $job_group);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Operation startJobUsingPOSTAsync
     *
     * Start the job with the given name and group name. The job will only be started, if it is not already running.
     *
     * @param string $job_name  jobName (required)
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobUsingPOSTAsync($job_name, $job_group)
    {
        return $this->startJobUsingPOSTAsyncWithHttpInfo($job_name, $job_group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startJobUsingPOSTAsyncWithHttpInfo
     *
     * Start the job with the given name and group name. The job will only be started, if it is not already running.
     *
     * @param string $job_name  jobName (required)
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobUsingPOSTAsyncWithHttpInfo($job_name, $job_group)
    {
        $request = $this->startJobUsingPOSTRequest($job_name, $job_group);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Operation startJobsWithGroupNameUsingPOST
     *
     * Start the jobs with the given group name. A job will only be started, if it is not already running.
     *
     * @param string $job_group jobGroup (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]
     */
    public function startJobsWithGroupNameUsingPOST($job_group)
    {
        list($response) = $this->startJobsWithGroupNameUsingPOSTWithHttpInfo($job_group);

        return $response;
    }

    /**
     * Operation startJobsWithGroupNameUsingPOSTWithHttpInfo
     *
     * Start the jobs with the given group name. A job will only be started, if it is not already running.
     *
     * @param string $job_group jobGroup (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startJobsWithGroupNameUsingPOSTWithHttpInfo($job_group)
    {
        $request = $this->startJobsWithGroupNameUsingPOSTRequest($job_group);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Operation startJobsWithGroupNameUsingPOSTAsync
     *
     * Start the jobs with the given group name. A job will only be started, if it is not already running.
     *
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobsWithGroupNameUsingPOSTAsync($job_group)
    {
        return $this->startJobsWithGroupNameUsingPOSTAsyncWithHttpInfo($job_group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startJobsWithGroupNameUsingPOSTAsyncWithHttpInfo
     *
     * Start the jobs with the given group name. A job will only be started, if it is not already running.
     *
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobsWithGroupNameUsingPOSTAsyncWithHttpInfo($job_group)
    {
        $request = $this->startJobsWithGroupNameUsingPOSTRequest($job_group);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Operation startJobsWithNameUsingPOST
     *
     * Start the jobs with the given name. A job will only be started, if it is not already running.
     *
     * @param string $job_name jobName (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]
     */
    public function startJobsWithNameUsingPOST($job_name)
    {
        list($response) = $this->startJobsWithNameUsingPOSTWithHttpInfo($job_name);

        return $response;
    }

    /**
     * Operation startJobsWithNameUsingPOSTWithHttpInfo
     *
     * Start the jobs with the given name. A job will only be started, if it is not already running.
     *
     * @param string $job_name jobName (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\JobTriggerResult[], HTTP status code, HTTP response headers (array of strings)
     */
    public function startJobsWithNameUsingPOSTWithHttpInfo($job_name)
    {
        $request = $this->startJobsWithNameUsingPOSTRequest($job_name);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Operation startJobsWithNameUsingPOSTAsync
     *
     * Start the jobs with the given name. A job will only be started, if it is not already running.
     *
     * @param string $job_name jobName (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobsWithNameUsingPOSTAsync($job_name)
    {
        return $this->startJobsWithNameUsingPOSTAsyncWithHttpInfo($job_name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation startJobsWithNameUsingPOSTAsyncWithHttpInfo
     *
     * Start the jobs with the given name. A job will only be started, if it is not already running.
     *
     * @param string $job_name jobName (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function startJobsWithNameUsingPOSTAsyncWithHttpInfo($job_name)
    {
        $request = $this->startJobsWithNameUsingPOSTRequest($job_name);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\JobTriggerResult[]');
    }

    /**
     * Create request for operation 'startJobUsingPOST'
     *
     * @param string $job_name  jobName (required)
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startJobUsingPOSTRequest($job_name, $job_group)
    {
        // verify the required parameter 'job_name' is set
        if ($job_name === null || (\is_array($job_name) && \count($job_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_name when calling startJobUsingPOST'
            );
        }
        // verify the required parameter 'job_group' is set
        if ($job_group === null || (\is_array($job_group) && \count($job_group) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_group when calling startJobUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/jobs/startJob';
        $queryParams = [];
        // query params
        if ($job_name !== null) {
            $queryParams['jobName'] = ObjectSerializer::toQueryValue($job_name);
        }
        // query params
        if ($job_group !== null) {
            $queryParams['jobGroup'] = ObjectSerializer::toQueryValue($job_group);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'startJobsWithGroupNameUsingPOST'
     *
     * @param string $job_group jobGroup (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startJobsWithGroupNameUsingPOSTRequest($job_group)
    {
        // verify the required parameter 'job_group' is set
        if ($job_group === null || (\is_array($job_group) && \count($job_group) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_group when calling startJobsWithGroupNameUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/jobs/startJobsWithGroupName';
        $queryParams = [];
        // query params
        if ($job_group !== null) {
            $queryParams['jobGroup'] = ObjectSerializer::toQueryValue($job_group);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'startJobsWithNameUsingPOST'
     *
     * @param string $job_name jobName (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function startJobsWithNameUsingPOSTRequest($job_name)
    {
        // verify the required parameter 'job_name' is set
        if ($job_name === null || (\is_array($job_name) && \count($job_name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $job_name when calling startJobsWithNameUsingPOST'
            );
        }

        $resourcePath = '/rest/v4/jobs/startJobsWithName';
        $queryParams = [];
        // query params
        if ($job_name !== null) {
            $queryParams['jobName'] = ObjectSerializer::toQueryValue($job_name);
        }

        return $this->postQuery($resourcePath, $queryParams, '', true);
    }
}
