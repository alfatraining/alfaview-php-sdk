<?php
/**
 * AuthenticationPasswordResetRequestTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * authService/authenticationService.proto
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
 * Please update the test case below to test the model.
 */

namespace Alfaview;

/**
 * AuthenticationPasswordResetRequestTest Class Doc Comment
 *
 * @category    Class
 * @description * PasswordResetRequest is used to reset a user&#39;s password. Although it is an implementation detail it is encouraged to only return the password reset token in the response if the user doing the resetting (i.e. an admin user) is part of the same company as the user whose password is being reset. Otherwise, the authentication service should handle emailing the password reset token itself.
 * @package     Alfaview
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationPasswordResetRequestTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
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
     * Test "AuthenticationPasswordResetRequest"
     */
    public function testAuthenticationPasswordResetRequest()
    {
    }

    /**
     * Test attribute "access_info"
     */
    public function testPropertyAccessInfo()
    {
    }

    /**
     * Test attribute "reset_url"
     */
    public function testPropertyResetUrl()
    {
    }

    /**
     * Test attribute "username"
     */
    public function testPropertyUsername()
    {
    }

    /**
     * Test attribute "company_id"
     */
    public function testPropertyCompanyId()
    {
    }
}
