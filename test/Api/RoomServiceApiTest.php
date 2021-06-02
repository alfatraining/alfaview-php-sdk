<?php
/**
 * RoomServiceApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * roomService/roomService.proto
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: version not set
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Alfaview;

use \Alfaview\Configuration;
use \Alfaview\ApiException;
use Alfaview\Model\AuthenticationAuthorizationCodeCredentials;
use Alfaview\Model\CommonAccessToken;
use Alfaview\Model\CommonRoom;
use Alfaview\Model\CommonRoomQuotas;
use \Alfaview\ObjectSerializer;

/**
 * RoomServiceApiTest Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoomServiceApiTest extends \PHPUnit_Framework_TestCase
{
    /* @var Alfaview $av */
    protected static $av;

    /* @var AuthenticationAuthorizationCodeCredentials $credentials */
    protected static $credentials;

    /* @var CommonAccessToken $accessToken */
    protected static $accessToken;


    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
        self::$av = new Alfaview();
        self::$av->setHost(getenv('API_HOST'));
        self::$credentials = new AuthenticationAuthorizationCodeCredentials();
        self::$credentials->setClientId(getenv('API_CLIENT_ID'));
        self::$credentials->setCode(getenv('API_CODE'));
        self::$credentials->setCompanyId(getenv('API_COMPANY_ID'));
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $response = self::$av->authenticate(self::$credentials);
        $this->assertFalse($response->hasError);
        $this->assertNotEmpty($response->reply->getAccessToken());
        self::$accessToken = $response->reply->getAccessToken();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for roomServiceAvailableTypes
     *
     * .
     *
     */
    public function testRoomServiceAvailableTypes()
    {
        $response = self::$av->listAvailableRoomTypes(self::$accessToken);
        $this->assertFalse($response->hasError);
        $this->assertNotEmpty($response->reply->getRoomTypes());
    }

    /**
     * Test case for roomServiceCreate
     *
     * .
     *
     */
    public function testRoomServiceCreate()
    {
        $quotas = new CommonRoomQuotas();
        $quotas->setActiveParticipants(50);
        $quotas->setPassiveParticipants(0);
        $quotas->setSubRooms(10);

        $room = new CommonRoom();
        $room->setDisplayName('created by php sdk room service test');
        $room->setQuotas($quotas);

        $response = self::$av->createRoom(self::$accessToken, $room);
        $this->assertFalse($response->hasError);
        $this->assertNotEmpty($response->reply->getRoomId());

        $response = self::$av->roomList(self::$accessToken, [$response->reply->getRoomId()]);
        $this->assertFalse($response->hasError);
        $this->assertCount(1, $response->reply->getRooms());
    }

    /**
     * Test case for roomServiceCreateJoinLink
     *
     * .
     *
     */
    public function testRoomServiceCreateJoinLink()
    {
    }

    /**
     * Test case for roomServiceDestroy
     *
     * .
     *
     */
    public function testRoomServiceDestroy()
    {
        $response = self::$av->roomList(self::$accessToken);
        $this->assertFalse($response->hasError);

        foreach ($response->reply->getRooms() as $id => $room) {
            if (strpos($room->getDisplayName(), 'created by php sdk') !== false) {
                $response = self::$av->destroyRoom(self::$accessToken, $id);
                $this->assertFalse($response->hasError);
            }
        }
    }

    /**
     * Test case for roomServiceList
     *
     * .
     *
     */
    public function testRoomServiceList()
    {
        $response = self::$av->roomList(self::$accessToken);
        $this->assertFalse($response->hasError);
        $this->assertGreaterThan(0, count($response->reply->getRooms()));
    }

    /**
     * Test case for roomServicePermissions
     *
     * .
     *
     */
    public function testRoomServicePermissions()
    {
    }

    /**
     * Test case for roomServiceSort
     *
     * .
     *
     */
    public function testRoomServiceSort()
    {
    }

    /**
     * Test case for roomServiceStatus
     *
     * .
     *
     */
    public function testRoomServiceStatus()
    {
    }

    /**
     * Test case for roomServiceUpdate
     *
     * .
     *
     */
    public function testRoomServiceUpdate()
    {
    }
}
