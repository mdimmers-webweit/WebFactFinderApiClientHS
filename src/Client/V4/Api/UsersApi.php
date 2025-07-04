<?php
declare(strict_types=1);
/*
 * FACT-Finder
 * Copyright © webweit GmbH (https://www.webweit.de)
 */

namespace Web\FactFinderApi\Client\V4\Api;

use GuzzleHttp6\Psr7\Request;
use Web\FactFinderApi\Client\ApiClient;
use Web\FactFinderApi\Client\ObjectSerializer;
use Web\FactFinderApi\Client\V4\Model\Group;
use Web\FactFinderApi\Client\V4\Model\User;
use Web\FactFinderApi\Client\V4\Model\UserNoPassword;
use Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword;

/**
 * UsersApi Class Doc Comment
 *
 * @author   Swagger Codegen team
 *
 * @see     https://github.com/swagger-api/swagger-codegen
 */
class UsersApi extends ApiClient
{
    /**
     * Operation createGroupUsingPOST
     *
     * Create a new group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Group
     */
    public function createGroupUsingPOST($group)
    {
        [$response] = $this->createGroupUsingPOSTWithHttpInfo($group);

        return $response;
    }

    /**
     * Operation createGroupUsingPOSTWithHttpInfo
     *
     * Create a new group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Group, HTTP status code, HTTP response headers (array of strings)
     */
    public function createGroupUsingPOSTWithHttpInfo($group)
    {
        $request = $this->createGroupUsingPOSTRequest($group);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\Group::class);
    }

    /**
     * Operation createGroupUsingPOSTAsync
     *
     * Create a new group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function createGroupUsingPOSTAsync($group)
    {
        return $this->createGroupUsingPOSTAsyncWithHttpInfo($group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createGroupUsingPOSTAsyncWithHttpInfo
     *
     * Create a new group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function createGroupUsingPOSTAsyncWithHttpInfo($group)
    {
        $request = $this->createGroupUsingPOSTRequest($group);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\Group::class);
    }

    /**
     * Operation createUserUsingPOST
     *
     * Create a new user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\User $user user (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\UserNoPassword
     */
    public function createUserUsingPOST($user)
    {
        [$response] = $this->createUserUsingPOSTWithHttpInfo($user);

        return $response;
    }

    /**
     * Operation createUserUsingPOSTWithHttpInfo
     *
     * Create a new user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\User $user user (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\UserNoPassword, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserUsingPOSTWithHttpInfo($user)
    {
        $request = $this->createUserUsingPOSTRequest($user);

        return $this->executeRequest($request, UserNoPassword::class);
    }

    /**
     * Operation createUserUsingPOSTAsync
     *
     * Create a new user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\User $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function createUserUsingPOSTAsync($user)
    {
        return $this->createUserUsingPOSTAsyncWithHttpInfo($user)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createUserUsingPOSTAsyncWithHttpInfo
     *
     * Create a new user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\User $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function createUserUsingPOSTAsyncWithHttpInfo($user)
    {
        $request = $this->createUserUsingPOSTRequest($user);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\UserNoPassword::class);
    }

    /**
     * Operation deleteGroupUsingDELETE
     *
     * Delete a group
     *
     * @param string $name Name of the group which should be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Group
     */
    public function deleteGroupUsingDELETE($name)
    {
        [$response] = $this->deleteGroupUsingDELETEWithHttpInfo($name);

        return $response;
    }

    /**
     * Operation deleteGroupUsingDELETEWithHttpInfo
     *
     * Delete a group
     *
     * @param string $name Name of the group which should be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Group, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGroupUsingDELETEWithHttpInfo($name)
    {
        $request = $this->deleteGroupUsingDELETERequest($name);

        return $this->executeRequest($request, Group::class);
    }

    /**
     * Operation deleteGroupUsingDELETEAsync
     *
     * Delete a group
     *
     * @param string $name Name of the group which should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteGroupUsingDELETEAsync($name)
    {
        return $this->deleteGroupUsingDELETEAsyncWithHttpInfo($name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGroupUsingDELETEAsyncWithHttpInfo
     *
     * Delete a group
     *
     * @param string $name Name of the group which should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteGroupUsingDELETEAsyncWithHttpInfo($name)
    {
        $request = $this->deleteGroupUsingDELETERequest($name);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\Group::class);
    }

    /**
     * Operation deleteGroupsUsingDELETE
     *
     * Delete multiple groups
     *
     * @param string[] $name List with names of the groups that should be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Group[]
     */
    public function deleteGroupsUsingDELETE($name)
    {
        [$response] = $this->deleteGroupsUsingDELETEWithHttpInfo($name);

        return $response;
    }

    /**
     * Operation deleteGroupsUsingDELETEWithHttpInfo
     *
     * Delete multiple groups
     *
     * @param string[] $name List with names of the groups that should be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Group[], HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteGroupsUsingDELETEWithHttpInfo($name)
    {
        $request = $this->deleteGroupsUsingDELETERequest($name);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Group[]');
    }

    /**
     * Operation deleteGroupsUsingDELETEAsync
     *
     * Delete multiple groups
     *
     * @param string[] $name List with names of the groups that should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteGroupsUsingDELETEAsync($name)
    {
        return $this->deleteGroupsUsingDELETEAsyncWithHttpInfo($name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteGroupsUsingDELETEAsyncWithHttpInfo
     *
     * Delete multiple groups
     *
     * @param string[] $name List with names of the groups that should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteGroupsUsingDELETEAsyncWithHttpInfo($name)
    {
        $request = $this->deleteGroupsUsingDELETERequest($name);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\Group[]');
    }

    /**
     * Operation deleteUserUsingDELETE
     *
     * Delete user
     *
     * @param string $username The username of user that will be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\UserNoPassword
     */
    public function deleteUserUsingDELETE($username)
    {
        [$response] = $this->deleteUserUsingDELETEWithHttpInfo($username);

        return $response;
    }

    /**
     * Operation deleteUserUsingDELETEWithHttpInfo
     *
     * Delete user
     *
     * @param string $username The username of user that will be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\UserNoPassword, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserUsingDELETEWithHttpInfo($username)
    {
        $request = $this->deleteUserUsingDELETERequest($username);

        return $this->executeRequest($request, UserNoPassword::class);
    }

    /**
     * Operation deleteUserUsingDELETEAsync
     *
     * Delete user
     *
     * @param string $username The username of user that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUserUsingDELETEAsync($username)
    {
        return $this->deleteUserUsingDELETEAsyncWithHttpInfo($username)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUserUsingDELETEAsyncWithHttpInfo
     *
     * Delete user
     *
     * @param string $username The username of user that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUserUsingDELETEAsyncWithHttpInfo($username)
    {
        $request = $this->deleteUserUsingDELETERequest($username);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\UserNoPassword::class);
    }

    /**
     * Operation deleteUsersUsingDELETE
     *
     * Delete multiple users
     *
     * @param string[] $name The usernames of users that will be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\UserNoPassword[]
     */
    public function deleteUsersUsingDELETE($name)
    {
        [$response] = $this->deleteUsersUsingDELETEWithHttpInfo($name);

        return $response;
    }

    /**
     * Operation deleteUsersUsingDELETEWithHttpInfo
     *
     * Delete multiple users
     *
     * @param string[] $name The usernames of users that will be deleted (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\UserNoPassword[], HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUsersUsingDELETEWithHttpInfo($name)
    {
        $request = $this->deleteUsersUsingDELETERequest($name);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\UserNoPassword[]');
    }

    /**
     * Operation deleteUsersUsingDELETEAsync
     *
     * Delete multiple users
     *
     * @param string[] $name The usernames of users that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUsersUsingDELETEAsync($name)
    {
        return $this->deleteUsersUsingDELETEAsyncWithHttpInfo($name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteUsersUsingDELETEAsyncWithHttpInfo
     *
     * Delete multiple users
     *
     * @param string[] $name The usernames of users that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function deleteUsersUsingDELETEAsyncWithHttpInfo($name)
    {
        $request = $this->deleteUsersUsingDELETERequest($name);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\UserNoPassword[]');
    }

    /**
     * Operation getGroupsUsingGET
     *
     * @param string $name Filter groups whose name contains a specific string (optional)
     * @param string $role Filter groups with specific role (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Group[]
     */
    public function getGroupsUsingGET($name = null, $role = null)
    {
        [$response] = $this->getGroupsUsingGETWithHttpInfo($name, $role);

        return $response;
    }

    /**
     * Operation getGroupsUsingGETWithHttpInfo
     *
     * @param string $name Filter groups whose name contains a specific string (optional)
     * @param string $role Filter groups with specific role (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Group[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getGroupsUsingGETWithHttpInfo($name = null, $role = null)
    {
        $request = $this->getGroupsUsingGETRequest($name, $role);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\Group[]');
    }

    /**
     * Operation getGroupsUsingGETAsync
     *
     * @param string $name Filter groups whose name contains a specific string (optional)
     * @param string $role Filter groups with specific role (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getGroupsUsingGETAsync($name = null, $role = null)
    {
        return $this->getGroupsUsingGETAsyncWithHttpInfo($name, $role)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getGroupsUsingGETAsyncWithHttpInfo
     *
     * @param string $name Filter groups whose name contains a specific string (optional)
     * @param string $role Filter groups with specific role (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getGroupsUsingGETAsyncWithHttpInfo($name = null, $role = null)
    {
        $request = $this->getGroupsUsingGETRequest($name, $role);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\Group[]');
    }

    /**
     * Operation getUsersUsingGET
     *
     * @param string $name    Filter users whose name contains a specific string (optional)
     * @param string $role    Filter users with a specific role (optional)
     * @param string $channel Filter users assigned a specific channel (optional)
     * @param string $group   Filter users who are part of a specific group (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\UserNoPassword[]
     */
    public function getUsersUsingGET($name = null, $role = null, $channel = null, $group = null)
    {
        [$response] = $this->getUsersUsingGETWithHttpInfo($name, $role, $channel, $group);

        return $response;
    }

    /**
     * Operation getUsersUsingGETWithHttpInfo
     *
     * @param string $name    Filter users whose name contains a specific string (optional)
     * @param string $role    Filter users with a specific role (optional)
     * @param string $channel Filter users assigned a specific channel (optional)
     * @param string $group   Filter users who are part of a specific group (optional)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\UserNoPassword[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersUsingGETWithHttpInfo($name = null, $role = null, $channel = null, $group = null)
    {
        $request = $this->getUsersUsingGETRequest($name, $role, $channel, $group);

        return $this->executeRequest($request, '\Web\FactFinderApi\Client\V4\Model\UserNoPassword[]');
    }

    /**
     * Operation getUsersUsingGETAsync
     *
     * @param string $name    Filter users whose name contains a specific string (optional)
     * @param string $role    Filter users with a specific role (optional)
     * @param string $channel Filter users assigned a specific channel (optional)
     * @param string $group   Filter users who are part of a specific group (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getUsersUsingGETAsync($name = null, $role = null, $channel = null, $group = null)
    {
        return $this->getUsersUsingGETAsyncWithHttpInfo($name, $role, $channel, $group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsersUsingGETAsyncWithHttpInfo
     *
     * @param string $name    Filter users whose name contains a specific string (optional)
     * @param string $role    Filter users with a specific role (optional)
     * @param string $channel Filter users assigned a specific channel (optional)
     * @param string $group   Filter users who are part of a specific group (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getUsersUsingGETAsyncWithHttpInfo($name = null, $role = null, $channel = null, $group = null)
    {
        $request = $this->getUsersUsingGETRequest($name, $role, $channel, $group);

        return $this->executeAsyncRequest($request, '\Web\FactFinderApi\Client\V4\Model\UserNoPassword[]');
    }

    /**
     * Operation getVisibleChannelsUsingGET
     *
     * Get visible channels
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return string[]
     */
    public function getVisibleChannelsUsingGET()
    {
        [$response] = $this->getVisibleChannelsUsingGETWithHttpInfo();

        return $response;
    }

    /**
     * Operation getVisibleChannelsUsingGETWithHttpInfo
     *
     * Get visible channels
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getVisibleChannelsUsingGETWithHttpInfo()
    {
        $request = $this->getVisibleChannelsUsingGETRequest();

        return $this->executeRequest($request, 'string[]');
    }

    /**
     * Operation getVisibleChannelsUsingGETAsync
     *
     * Get visible channels
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getVisibleChannelsUsingGETAsync()
    {
        return $this->getVisibleChannelsUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVisibleChannelsUsingGETAsyncWithHttpInfo
     *
     * Get visible channels
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function getVisibleChannelsUsingGETAsyncWithHttpInfo()
    {
        $request = $this->getVisibleChannelsUsingGETRequest();

        return $this->executeAsyncRequest($request, 'string[]');
    }

    /**
     * Operation updateGroupUsingPUT
     *
     * Update group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\Group
     */
    public function updateGroupUsingPUT($group)
    {
        [$response] = $this->updateGroupUsingPUTWithHttpInfo($group);

        return $response;
    }

    /**
     * Operation updateGroupUsingPUTWithHttpInfo
     *
     * Update group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\Group, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateGroupUsingPUTWithHttpInfo($group)
    {
        $request = $this->updateGroupUsingPUTRequest($group);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\Group::class);
    }

    /**
     * Operation updateGroupUsingPUTAsync
     *
     * Update group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateGroupUsingPUTAsync($group)
    {
        return $this->updateGroupUsingPUTAsyncWithHttpInfo($group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateGroupUsingPUTAsyncWithHttpInfo
     *
     * Update group
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateGroupUsingPUTAsyncWithHttpInfo($group)
    {
        $request = $this->updateGroupUsingPUTRequest($group);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\Group::class);
    }

    /**
     * Operation updateUserUsingPUT
     *
     * Update user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword $user user (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Web\FactFinderApi\Client\V4\Model\UserNoPassword
     */
    public function updateUserUsingPUT($user)
    {
        [$response] = $this->updateUserUsingPUTWithHttpInfo($user);

        return $response;
    }

    /**
     * Operation updateUserUsingPUTWithHttpInfo
     *
     * Update user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword $user user (required)
     *
     * @throws \Web\FactFinderApi\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Web\FactFinderApi\Client\V4\Model\UserNoPassword, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserUsingPUTWithHttpInfo($user)
    {
        $request = $this->updateUserUsingPUTRequest($user);

        return $this->executeRequest($request, \Web\FactFinderApi\Client\V4\Model\UserNoPassword::class);
    }

    /**
     * Operation updateUserUsingPUTAsync
     *
     * Update user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateUserUsingPUTAsync($user)
    {
        return $this->updateUserUsingPUTAsyncWithHttpInfo($user)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateUserUsingPUTAsyncWithHttpInfo
     *
     * Update user
     *
     * @param \Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp6\Promise\PromiseInterface
     */
    public function updateUserUsingPUTAsyncWithHttpInfo($user)
    {
        $request = $this->updateUserUsingPUTRequest($user);

        return $this->executeAsyncRequest($request, \Web\FactFinderApi\Client\V4\Model\UserNoPassword::class);
    }

    /**
     * Create request for operation 'createGroupUsingPOST'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function createGroupUsingPOSTRequest(Group $group)
    {
        $resourcePath = '/rest/v4/groups';

        return $this->postQuery($resourcePath, [], $group, true);
    }

    /**
     * Create request for operation 'createUserUsingPOST'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\User $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function createUserUsingPOSTRequest(User $user)
    {
        $resourcePath = '/rest/v4/users';

        return $this->postQuery($resourcePath, [], $user, true);
    }

    /**
     * Create request for operation 'deleteGroupUsingDELETE'
     *
     * @param string $name Name of the group which should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deleteGroupUsingDELETERequest(string $name)
    {
        $resourcePath = '/rest/v4/groups/{name}';
        // path params
        $resourcePath = str_replace(
            '{name}',
            ObjectSerializer::toPathValue($name),
            $resourcePath
        );

        return $this->deleteQuery($resourcePath, [], '', true);
    }

    /**
     * Create request for operation 'deleteGroupsUsingDELETE'
     *
     * @param string[] $name List with names of the groups that should be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deleteGroupsUsingDELETERequest(array $name)
    {
        // verify the required parameter 'name' is set
        if (empty($name)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling deleteGroupsUsingDELETE'
            );
        }

        $resourcePath = '/rest/v4/groups';

        // query params
        if (\is_array($name)) {
            $queryParams['name'] = $name;
        } else {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }

        return $this->deleteQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'deleteUserUsingDELETE'
     *
     * @param string $username The username of user that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deleteUserUsingDELETERequest(string $username)
    {
        $resourcePath = '/rest/v4/users/{username}';
        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                '{username}',
                ObjectSerializer::toPathValue($username),
                $resourcePath
            );
        }

        return $this->deleteQuery($resourcePath, [], '', true);
    }

    /**
     * Create request for operation 'deleteUsersUsingDELETE'
     *
     * @param string[] $name The usernames of users that will be deleted (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function deleteUsersUsingDELETERequest(array $name)
    {
        // verify the required parameter 'name' is set
        if (empty($name)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling deleteUsersUsingDELETE'
            );
        }

        $resourcePath = '/rest/v4/users';
        $queryParams = [];
        // query params
        if (\is_array($name)) {
            $queryParams['name'] = $name;
        } elseif ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }

        return $this->deleteQuery($resourcePath, $queryParams, '', true);
    }

    /**
     * Create request for operation 'getGroupsUsingGET'
     *
     * @param string $name Filter groups whose name contains a specific string (optional)
     * @param string $role Filter groups with specific role (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getGroupsUsingGETRequest($name = null, $role = null)
    {
        $resourcePath = '/rest/v4/groups';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($role !== null) {
            $queryParams['role'] = ObjectSerializer::toQueryValue($role);
        }

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getUsersUsingGET'
     *
     * @param string $name    Filter users whose name contains a specific string (optional)
     * @param string $role    Filter users with a specific role (optional)
     * @param string $channel Filter users assigned a specific channel (optional)
     * @param string $group   Filter users who are part of a specific group (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getUsersUsingGETRequest($name = null, $role = null, $channel = null, $group = null)
    {
        $resourcePath = '/rest/v4/users';
        $queryParams = [];
        $httpBody = '';
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($role !== null) {
            $queryParams['role'] = ObjectSerializer::toQueryValue($role);
        }
        // query params
        if ($channel !== null) {
            $queryParams['channel'] = ObjectSerializer::toQueryValue($channel);
        }
        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group);
        }

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'getVisibleChannelsUsingGET'
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function getVisibleChannelsUsingGETRequest()
    {
        $resourcePath = '/rest/v4/user/channel';
        $queryParams = [];
        $httpBody = '';

        return $this->getQuery($resourcePath, $queryParams);
    }

    /**
     * Create request for operation 'updateGroupUsingPUT'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\Group $group group (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function updateGroupUsingPUTRequest(Group $group)
    {
        $resourcePath = '/rest/v4/groups';

        return $this->putQuery($resourcePath, [], $group, true);
    }

    /**
     * Create request for operation 'updateUserUsingPUT'
     *
     * @param \Web\FactFinderApi\Client\V4\Model\UserNoRequiredPassword $user user (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return Request
     */
    protected function updateUserUsingPUTRequest(UserNoRequiredPassword $user)
    {
        $resourcePath = '/rest/v4/users';

        return $this->putQuery($resourcePath, [], $user, true);
    }
}
