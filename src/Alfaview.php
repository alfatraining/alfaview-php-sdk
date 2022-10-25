<?php

namespace Alfaview;

use Alfaview\Api\AuthenticationServiceApi;
use Alfaview\Api\BusinessLogicServiceApi;
use Alfaview\Api\CompanyServiceApi;
use Alfaview\Api\GuestServiceApi;
use Alfaview\Api\RoomServiceApi;
use Alfaview\Api\UserServiceApi;
use Alfaview\Model\AuthenticationAuthenticationCreateRequest;
use Alfaview\Model\AuthenticationAuthenticationRequest;
use Alfaview\Model\AuthenticationAuthorizationCodeCredentials;
use Alfaview\Model\AuthenticationUsernamePasswordCredentials;
use Alfaview\Model\BusinessLogicServiceCompanyPermissionGroupsListRequest;
use Alfaview\Model\BusinessLogicServiceInviteExternalMembersRequest;
use Alfaview\Model\CommonAccessInfo;
use Alfaview\Model\CommonAccessToken;
use Alfaview\Model\CommonReplyStatusCode;
use Alfaview\Model\CommonRoomType;
use Alfaview\Model\GuestServiceV2AuthenticateRequest;
use Alfaview\Model\GuestServiceV2CreateGroupLinksRequest;
use Alfaview\Model\GuestServiceV2CreateGuestLinksRequest;
use Alfaview\Model\GuestServiceV2GetLinkRequest;
use Alfaview\Model\GuestServiceV2ListGuestLinksRequest;
use Alfaview\Model\GuestServiceV2ListGroupLinksRequest;
use Alfaview\Model\RoomServiceAvailableTypesRequest;
use Alfaview\Model\RoomServiceCreateJoinLinkRequest;
use Alfaview\Model\RoomServiceRoomCreateRequest;
use Alfaview\Model\RoomServiceRoomDestroyRequest;
use Alfaview\Model\RoomServiceRoomListRequest;
use Alfaview\Model\RoomServiceRoomStatusRequest;
use Alfaview\Model\RoomServiceRoomUpdateRequest;

class Alfaview
{
    const API_HOST                        = 'https://apis.alfaview.com/json/v1';
    const AUTHENTICATION_SERVICE_ENDPOINT = '/authenticationService';
    const BUSINESS_LOGIC_ENDPOINT         = '/businessLogicService';
    const COMPANY_SERVICE_ENDPOINT        = '/companyService';
    const ROOM_SERVICE_ENDPOINT           = '/roomService';
    const USER_SERVICE_ENDPOINT           = '/userService';
    const GUEST_SERVICE_ENDPOINT          = '/guestService.v2';

    /* @var AuthenticationServiceApi $authenticationService */
    public $authenticationService;

    /* @var BusinessLogicServiceApi $businessLogicService */
    public $businessLogicService;

    /* @var CompanyServiceApi $companyService */
    public $companyService;

    /* @var RoomServiceApi $roomService */
    public $roomService;

    /* @var UserServiceApi $userService */
    public $userService;

    /* @var GuestServiceApi $guestService */
    public $guestService;

    /**
     * Alfaview constructor.
     */
    public function __construct()
    {
        $this->authenticationService = new AuthenticationServiceApi();
        $this->businessLogicService = new BusinessLogicServiceApi();
        $this->companyService = new CompanyServiceApi();
        $this->roomService = new RoomServiceApi();
        $this->userService = new UserServiceApi();
        $this->userService = new UserServiceApi();
        $this->guestService = new GuestServiceApi();

        $this->setHost(self::API_HOST);
    }

    /**
     * Optional - defaults to production api host
     *
     * @param string $apiHost
     */
    public function setHost($apiHost)
    {
        $this->authenticationService->getConfig()->setHost($apiHost . self::AUTHENTICATION_SERVICE_ENDPOINT);
        $this->businessLogicService->getConfig()->setHost($apiHost . self::BUSINESS_LOGIC_ENDPOINT);
        $this->companyService->getConfig()->setHost($apiHost . self::COMPANY_SERVICE_ENDPOINT);
        $this->roomService->getConfig()->setHost($apiHost . self::ROOM_SERVICE_ENDPOINT);
        $this->userService->getConfig()->setHost($apiHost . self::USER_SERVICE_ENDPOINT);
        $this->guestService->getConfig()->setHost($apiHost . self::GUEST_SERVICE_ENDPOINT);
    }

    /**
     * @param CommonAccessToken $accessToken
     * @return CommonAccessInfo
     */
    private function composeAccessInfo($accessToken)
    {
        $accessInfo = new CommonAccessInfo();
        $accessInfo->setRequestId(uniqid());
        $accessInfo->setAccessToken($accessToken);

        return $accessInfo;
    }

    /**
     * @param ApiException $apiException
     * @return Response - containing error code and error message obtained from the exception thrown from Service API
     */
    private function handleException(ApiException $apiException)
    {
        $responseBody = json_decode($apiException->getResponseBody());
        $errorMessage = isset($responseBody) ? $responseBody->message : $apiException->getMessage();
        $errorCode = isset($responseBody) ? $responseBody->code : $apiException->getCode();

        return new Response(null, true, $errorCode, $errorMessage);
    }

    /**
     * Creates an authentication request for username-password or API credentials login
     * For guest authentication \Alfaview\Alfaview::guestAuthenticate should be used
     * @param mixed $credentials
     * @return AuthenticationAuthenticationRequest
     */
    public function buildAuthRequest($credentials)
    {
        $authRequest = new AuthenticationAuthenticationRequest();
        switch (get_class($credentials)) {
            case AuthenticationAuthorizationCodeCredentials::class:
                $authRequest->setAuthorizationCodeCredentials($credentials);
                break;
            case AuthenticationUsernamePasswordCredentials::class:
                $authRequest->setUsernamePasswordCredentials($credentials);
                break;
        }

        return $authRequest;
    }

    /**
     * @param mixed $credentials
     * @return Response
     */
    public function authenticate($credentials)
    {
        $authRequest = $this->buildAuthRequest($credentials);

        try {
            $authReply = $this->authenticationService->authenticate($authRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($authReply->getReplyInfo()
                ->getStatusCode() != null && $authReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $authReply->getReplyInfo()
                    ->getStatusCode(),
                $authReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($authReply);
    }

    /**
     * @param $accessToken
     * @return Response
     */
    public function isAuthenticated($accessToken)
    {
        $accessInfo = $this->composeAccessInfo($accessToken);

        try {
            $reply = $this->authenticationService->isAuthenticated($accessInfo);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($reply);
    }

    /**
     * @param $accessToken
     * @param null $filterRoomIds
     * @param int $limit
     * @return Response
     */
    public function roomList($accessToken, $filterRoomIds = null, $limit = 1000)
    {
        $roomListRequest = new RoomServiceRoomListRequest();
        $roomListRequest->setFilterRoomIds($filterRoomIds);
        $roomListRequest->setFilterRoomTypes([CommonRoomType::DEPARTMENT, CommonRoomType::ROOM]);
        $roomListRequest->setLimit($limit);
        $roomListRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $roomListReply = $this->roomService->callList($roomListRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($roomListReply->getReplyInfo()
                ->getStatusCode() != null && $roomListReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $roomListReply->getReplyInfo()
                    ->getStatusCode(),
                $roomListReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($roomListReply, false);
    }

    /**
     * @param $accessToken
     * @param null $roomIds
     * @return Response
     */
    public function roomStatus($accessToken, $roomIds = null)
    {
        $roomStatusRequest = new RoomServiceRoomStatusRequest();
        $roomStatusRequest->setRoomIds($roomIds);
        $roomStatusRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $roomStatusReply = $this->roomService->status($roomStatusRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($roomStatusReply->getReplyInfo()
                ->getStatusCode() != null && $roomStatusReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $roomStatusReply->getReplyInfo()
                    ->getStatusCode(),
                $roomStatusReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($roomStatusReply, false);
    }

    /**
     * @param $accessToken
     * @param $room
     * @return Response
     */
    public function createRoom($accessToken, $room)
    {
        $roomCreateRequest = new RoomServiceRoomCreateRequest();
        $roomCreateRequest->setRoom($room);
        $roomCreateRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $roomCreateReply = $this->roomService->create($roomCreateRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($roomCreateReply->getReplyInfo()
                ->getStatusCode() != null && $roomCreateReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $roomCreateReply->getReplyInfo()
                    ->getStatusCode(),
                $roomCreateReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($roomCreateReply, false);
    }

    /**
     * @param $accessToken
     * @param $roomId
     * @param $room
     * @return Response
     */
    public function updateRoom($accessToken, $roomId, $room)
    {
        $roomUpdateRequest = new RoomServiceRoomUpdateRequest();
        $roomUpdateRequest->setRoomId($roomId);
        $roomUpdateRequest->setRoom($room);
        $roomUpdateRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $roomUpdateReply = $this->roomService->update($roomUpdateRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($roomUpdateReply->getReplyInfo()
                ->getStatusCode() != null && $roomUpdateReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $roomUpdateReply->getReplyInfo()
                    ->getStatusCode(),
                $roomUpdateReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($roomUpdateReply, false);
    }

    /**
     * @param $accessToken
     * @param $id
     * @return Response
     */
    public function destroyRoom($accessToken, $id)
    {
        $roomDestroyRequest = new RoomServiceRoomDestroyRequest();
        $roomDestroyRequest->setRoomId($id);
        $roomDestroyRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $roomDestroyReply = $this->roomService->destroy($roomDestroyRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($roomDestroyReply->getReplyInfo()
                ->getStatusCode() != null && $roomDestroyReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $roomDestroyReply->getReplyInfo()
                    ->getStatusCode(),
                $roomDestroyReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($roomDestroyReply, false);
    }

    /**
     * @param $accessToken
     * @param $credentials
     * @return Response
     */
    public function createAuthentication($accessToken, $credentials)
    {
        $authCreateRequest = new AuthenticationAuthenticationCreateRequest();
        $authCreateRequest->setAuthenticationRequest($this->buildAuthRequest($credentials));
        $authCreateRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $authCreateReply = $this->authenticationService->authenticationCreate($authCreateRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($authCreateReply->getReplyInfo()
                ->getStatusCode() != null && $authCreateReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $authCreateReply->getReplyInfo()
                    ->getStatusCode(),
                $authCreateReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($authCreateReply, false);
    }

    /**
     * @param $accessToken
     * @param $roomId
     * @return Response
     */
    public function createJoinLink($accessToken, $roomId)
    {
        $createJoinLinkRequest = new RoomServiceCreateJoinLinkRequest();
        $createJoinLinkRequest->setRoomId($roomId);
        $createJoinLinkRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $createJoinLinkReply = $this->roomService->createJoinLink($createJoinLinkRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($createJoinLinkReply->getReplyInfo()
                ->getStatusCode() != null && $createJoinLinkReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $createJoinLinkReply->getReplyInfo()
                    ->getStatusCode(),
                $createJoinLinkReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($createJoinLinkReply, false);
    }

    /**
     * @param $accessToken
     * @return Response
     */
    public function listAvailableRoomTypes($accessToken)
    {
        $availableRoomTypesRequest = new RoomServiceAvailableTypesRequest();
        $availableRoomTypesRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $availableRoomTypesReply = $this->roomService->availableTypes($availableRoomTypesRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($availableRoomTypesReply->getReplyInfo()
                ->getStatusCode() != null && $availableRoomTypesReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $availableRoomTypesReply->getReplyInfo()
                    ->getStatusCode(),
                $availableRoomTypesReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($availableRoomTypesReply, false);
    }

    /**
     * @param $accessToken
     * @return Response
     */
    public function listPermissionGroups($accessToken)
    {
        $permissionGroupsRequest = new BusinessLogicServiceCompanyPermissionGroupsListRequest();
        $permissionGroupsRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $permissionGroupsReply = $this->businessLogicService->permissionGroupsList($permissionGroupsRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($permissionGroupsReply->getReplyInfo()
                ->getStatusCode() != null && $permissionGroupsReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $permissionGroupsReply->getReplyInfo()
                    ->getStatusCode(),
                $permissionGroupsReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($permissionGroupsReply, false);
    }

    /**
     * Goes through the permission group to return the id of the group with the name we want
     *
     * @param $accessToken
     * @param $groupName
     * @return String|null
     * @throws \Alfaview\ApiException
     */
    public function getPermissionGroupId($accessToken, $groupName)
    {
        $listPermissionGroupsResponse = $this->listPermissionGroups($accessToken);

        if ($listPermissionGroupsResponse->hasError) {
            return null;
        }

        $permissionGroups = $listPermissionGroupsResponse->reply->getPermissionGroups();

        /* @var \Alfaview\Model\BusinessLogicServicePermissionGroup $group */
        foreach ($permissionGroups as $groupId => $group) {
            if ($group->getName() === $groupName) {
                return $groupId;
            }
        }
        return null;
    }

    /**
     * @deprecated The new \Alfaview::createGuestLink function should be preferred instead
     *
     * @param $accessToken
     * @param $roomId
     * @param $externalMembersInvitations
     * @return Response
     */
    public function inviteExternalMembers($accessToken, $roomId, $externalMembersInvitations)
    {
        $inviteExternalMembersRequest = new BusinessLogicServiceInviteExternalMembersRequest();
        $inviteExternalMembersRequest->setRoomId($roomId);
        $inviteExternalMembersRequest->setInvitations($externalMembersInvitations);
        $inviteExternalMembersRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $inviteExternalMembersReply = $this->businessLogicService->externalMembersInvite(
                $inviteExternalMembersRequest
            );
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        if ($inviteExternalMembersReply->getReplyInfo()
                ->getStatusCode() != null && $inviteExternalMembersReply->getReplyInfo()
                ->getStatusCode() != CommonReplyStatusCode::OK) {
            return new Response(
                null,
                true,
                $inviteExternalMembersReply->getReplyInfo()
                    ->getStatusCode(),
                $inviteExternalMembersReply->getReplyInfo()
                    ->getStatusMessage()
            );
        }

        return new Response($inviteExternalMembersReply, false);
    }

    /**
     * @param $accessToken
     * @param $roomId
     * @param \Alfaview\Model\GuestServiceV2GroupLinkCreation[] $groupLinks
     * @return \Alfaview\Response
     */
    public function createGroupLink($accessToken, $roomId, $groupLinks)
    {
        $createGroupLinksRequest = new GuestServiceV2CreateGroupLinksRequest();
        $createGroupLinksRequest->setAccessInfo($this->composeAccessInfo($accessToken));
        $createGroupLinksRequest->setGroupLinkCreations($groupLinks);
        $createGroupLinksRequest->setRoomId($roomId);

        try {
            $createGroupLinksReply = $this->guestService->createGroupLinks($createGroupLinksRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($createGroupLinksReply, false);
    }

    /**
     * @param $accessToken
     * @param $roomId
     * @param \Alfaview\Model\GuestServiceV2GuestLinkCreation[] $guestLinks
     * @return \Alfaview\Response
     */
    public function createGuestLink($accessToken, $roomId, $guestLinks)
    {
        $createGuestLinksRequest = new GuestServiceV2CreateGuestLinksRequest();
        $createGuestLinksRequest->setAccessInfo($this->composeAccessInfo($accessToken));
        $createGuestLinksRequest->setGuestLinkCreations($guestLinks);
        $createGuestLinksRequest->setRoomId($roomId);

        try {
            $createGuestLinksReply = $this->guestService->createGuestLinks($createGuestLinksRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($createGuestLinksReply, false);
    }

    /**
     * @param $companyId
     * @param $roomId
     * @param $accessKey
     * @param string $displayName
     * @param string $externalId
     * @return \Alfaview\Response
     */
    public function guestAuthenticate($companyId, $roomId, $accessKey, $displayName = '', $externalId = '')
    {
        $authenticateRequest = new GuestServiceV2AuthenticateRequest();
        $authenticateRequest->setCompanyId($companyId);
        $authenticateRequest->setRoomId($roomId);
        $authenticateRequest->setAccessKey($accessKey);
        $authenticateRequest->setDisplayName($displayName);
        $authenticateRequest->setExternalId($externalId);

        try {
            $authenticateReply = $this->guestService->authenticate($authenticateRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($authenticateReply, false);
    }

    /**
     * Lists the guest links for a specific room or the whole company if no $roomId is passed
     *
     * @param $accessToken
     * @param string $roomId
     * @return \Alfaview\Response
     */
    public function listGuestLinks($accessToken, $roomId = '') {
        $listGuestLinksRequest = new GuestServiceV2ListGuestLinksRequest();
        $listGuestLinksRequest->setRoomId($roomId);
        $listGuestLinksRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $listGuestLinksReply = $this->guestService->listGuestLinks($listGuestLinksRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($listGuestLinksReply, false);
    }

    /**
     * Lists the group links for a specific room or the whole company if no $roomId is passed
     *
     * @param $accessToken
     * @param string $roomId
     * @return \Alfaview\Response
     */
    public function listGroupLinks($accessToken, $roomId = '') {
        $listGroupLinksRequest = new GuestServiceV2ListGroupLinksRequest();
        $listGroupLinksRequest->setRoomId($roomId);
        $listGroupLinksRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $listGroupLinksReply = $this->guestService->listGroupLinks($listGroupLinksRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($listGroupLinksReply, false);
    }

    /**
     * Returns a guest or a group link with the given $id
     *
     * @param $accessToken
     * @param $id
     * @return \Alfaview\Response
     */
    public function getLink($accessToken, $id) {
        $getLinkRequest = new GuestServiceV2GetLinkRequest();
        $getLinkRequest->setId($id);
        $getLinkRequest->setAccessInfo($this->composeAccessInfo($accessToken));

        try {
            $getLinkReply = $this->guestService->getLink($getLinkRequest);
        } catch (ApiException $apiException) {
            return $this->handleException($apiException);
        }

        return new Response($getLinkReply, false);
    }
}
