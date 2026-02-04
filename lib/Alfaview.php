<?php
declare(strict_types = 1);

namespace Alfaview\Client;

use Alfaview\Client\Api\AuthenticationApi;
use Alfaview\Client\Api\GuestsApi;
use Alfaview\Client\Api\MeetingsApi;
use Alfaview\Client\Api\RoomsApi;
class Alfaview
{
    public AuthenticationApi $authenticationApi;
    public RoomsApi $roomsApi;
    public GuestsApi $guestsApi;
    public MeetingsApi $meetingsApi;

    protected Configuration $configuration;
    public function __construct()
    {
        $this->configuration = new Configuration();

        $this->authenticationApi = new AuthenticationApi(null, $this->configuration);
        $this->roomsApi = new RoomsApi(null, $this->configuration);
        $this->guestsApi = new GuestsApi(null, $this->configuration);
        $this->meetingsApi = new MeetingsApi(null, $this->configuration);
    }

    public function setHost(string $host): void {
        $this->configuration->setHost($host);
    }

}
