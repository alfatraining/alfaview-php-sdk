<?php
declare(strict_types = 1);

namespace Alfaview\Client;

use Alfaview\Client\Api\AuthenticationApi;
use Alfaview\Client\Api\FilesApi;
use Alfaview\Client\Api\GuestsApi;
use Alfaview\Client\Api\MeetingsApi;
use Alfaview\Client\Api\PermissionsApi;
use Alfaview\Client\Api\ReportsApi;
use Alfaview\Client\Api\RoomsApi;
use Alfaview\Client\Api\UsersApi;
class Alfaview
{
    public AuthenticationApi $authenticationApi;
    public RoomsApi $roomsApi;
    public GuestsApi $guestsApi;
    public MeetingsApi $meetingsApi;
    public PermissionsApi $permissionsApi;
    public FilesApi $filesApi;
    public ReportsApi $reportsApi;
    public UsersApi $usersApi;

    protected Configuration $configuration;
    public function __construct()
    {
        $this->configuration = new Configuration();

        $this->authenticationApi = new AuthenticationApi(null, $this->configuration);
        $this->roomsApi = new RoomsApi(null, $this->configuration);
        $this->guestsApi = new GuestsApi(null, $this->configuration);
        $this->meetingsApi = new MeetingsApi(null, $this->configuration);
        $this->permissionsApi = new PermissionsApi(null, $this->configuration);
        $this->filesApi = new FilesApi(null, $this->configuration);
        $this->reportsApi = new ReportsApi(null, $this->configuration);
        $this->usersApi = new UsersApi(null, $this->configuration);
    }

    public function setHost(string $host): void {
        $this->configuration->setHost($host);
    }

    /**
     * Sets the access token that is sent as "Authorization: Bearer <token>" with every request that requires it.
     * Obtain one via $this->authenticationApi (e.g. authenticateAPIKey()). Tokens expire after 1 hour.
     */
    public function setAccessToken(string $accessToken): void {
        $this->configuration->setAccessToken($accessToken);
    }

}
