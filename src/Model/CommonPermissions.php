<?php
/**
 * CommonPermissions
 *
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
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfaview\Model;

use \ArrayAccess;
use \Alfaview\ObjectSerializer;

/**
 * CommonPermissions Class Doc Comment
 *
 * @category Class
 * @package  Alfaview
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommonPermissions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'commonPermissions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'admin' => 'bool',
        'voice' => 'bool',
        'video' => 'bool',
        'promote' => 'bool',
        'join' => 'bool',
        'screen' => 'bool',
        'vip' => 'bool',
        'subroom_manage' => 'bool',
        'subroom_create_public' => 'bool',
        'subroom_create_private' => 'bool',
        'chat' => 'bool',
        'chat_broadcast' => 'bool',
        'file_admin' => 'bool',
        'file_upload' => 'bool',
        'file_list' => 'bool',
        'fair_use' => 'bool',
        'action' => 'bool',
        'remove' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'admin' => 'boolean',
        'voice' => 'boolean',
        'video' => 'boolean',
        'promote' => 'boolean',
        'join' => 'boolean',
        'screen' => 'boolean',
        'vip' => 'boolean',
        'subroom_manage' => 'boolean',
        'subroom_create_public' => 'boolean',
        'subroom_create_private' => 'boolean',
        'chat' => 'boolean',
        'chat_broadcast' => 'boolean',
        'file_admin' => 'boolean',
        'file_upload' => 'boolean',
        'file_list' => 'boolean',
        'fair_use' => 'boolean',
        'action' => 'boolean',
        'remove' => 'boolean'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'admin' => 'admin',
        'voice' => 'voice',
        'video' => 'video',
        'promote' => 'promote',
        'join' => 'join',
        'screen' => 'screen',
        'vip' => 'vip',
        'subroom_manage' => 'subroomManage',
        'subroom_create_public' => 'subroomCreatePublic',
        'subroom_create_private' => 'subroomCreatePrivate',
        'chat' => 'chat',
        'chat_broadcast' => 'chatBroadcast',
        'file_admin' => 'fileAdmin',
        'file_upload' => 'fileUpload',
        'file_list' => 'fileList',
        'fair_use' => 'fairUse',
        'action' => 'action',
        'remove' => 'remove'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin' => 'setAdmin',
        'voice' => 'setVoice',
        'video' => 'setVideo',
        'promote' => 'setPromote',
        'join' => 'setJoin',
        'screen' => 'setScreen',
        'vip' => 'setVip',
        'subroom_manage' => 'setSubroomManage',
        'subroom_create_public' => 'setSubroomCreatePublic',
        'subroom_create_private' => 'setSubroomCreatePrivate',
        'chat' => 'setChat',
        'chat_broadcast' => 'setChatBroadcast',
        'file_admin' => 'setFileAdmin',
        'file_upload' => 'setFileUpload',
        'file_list' => 'setFileList',
        'fair_use' => 'setFairUse',
        'action' => 'setAction',
        'remove' => 'setRemove'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin' => 'getAdmin',
        'voice' => 'getVoice',
        'video' => 'getVideo',
        'promote' => 'getPromote',
        'join' => 'getJoin',
        'screen' => 'getScreen',
        'vip' => 'getVip',
        'subroom_manage' => 'getSubroomManage',
        'subroom_create_public' => 'getSubroomCreatePublic',
        'subroom_create_private' => 'getSubroomCreatePrivate',
        'chat' => 'getChat',
        'chat_broadcast' => 'getChatBroadcast',
        'file_admin' => 'getFileAdmin',
        'file_upload' => 'getFileUpload',
        'file_list' => 'getFileList',
        'fair_use' => 'getFairUse',
        'action' => 'getAction',
        'remove' => 'getRemove'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['voice'] = isset($data['voice']) ? $data['voice'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['promote'] = isset($data['promote']) ? $data['promote'] : null;
        $this->container['join'] = isset($data['join']) ? $data['join'] : null;
        $this->container['screen'] = isset($data['screen']) ? $data['screen'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['subroom_manage'] = isset($data['subroom_manage']) ? $data['subroom_manage'] : null;
        $this->container['subroom_create_public'] = isset($data['subroom_create_public']) ? $data['subroom_create_public'] : null;
        $this->container['subroom_create_private'] = isset($data['subroom_create_private']) ? $data['subroom_create_private'] : null;
        $this->container['chat'] = isset($data['chat']) ? $data['chat'] : null;
        $this->container['chat_broadcast'] = isset($data['chat_broadcast']) ? $data['chat_broadcast'] : null;
        $this->container['file_admin'] = isset($data['file_admin']) ? $data['file_admin'] : null;
        $this->container['file_upload'] = isset($data['file_upload']) ? $data['file_upload'] : null;
        $this->container['file_list'] = isset($data['file_list']) ? $data['file_list'] : null;
        $this->container['fair_use'] = isset($data['fair_use']) ? $data['fair_use'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['remove'] = isset($data['remove']) ? $data['remove'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets admin
     *
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool $admin admin
     *
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets voice
     *
     * @return bool
     */
    public function getVoice()
    {
        return $this->container['voice'];
    }

    /**
     * Sets voice
     *
     * @param bool $voice voice
     *
     * @return $this
     */
    public function setVoice($voice)
    {
        $this->container['voice'] = $voice;

        return $this;
    }

    /**
     * Gets video
     *
     * @return bool
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param bool $video video
     *
     * @return $this
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

        return $this;
    }

    /**
     * Gets promote
     *
     * @return bool
     */
    public function getPromote()
    {
        return $this->container['promote'];
    }

    /**
     * Sets promote
     *
     * @param bool $promote promote
     *
     * @return $this
     */
    public function setPromote($promote)
    {
        $this->container['promote'] = $promote;

        return $this;
    }

    /**
     * Gets join
     *
     * @return bool
     */
    public function getJoin()
    {
        return $this->container['join'];
    }

    /**
     * Sets join
     *
     * @param bool $join join
     *
     * @return $this
     */
    public function setJoin($join)
    {
        $this->container['join'] = $join;

        return $this;
    }

    /**
     * Gets screen
     *
     * @return bool
     */
    public function getScreen()
    {
        return $this->container['screen'];
    }

    /**
     * Sets screen
     *
     * @param bool $screen screen
     *
     * @return $this
     */
    public function setScreen($screen)
    {
        $this->container['screen'] = $screen;

        return $this;
    }

    /**
     * Gets vip
     *
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     *
     * @param bool $vip vip
     *
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

        return $this;
    }

    /**
     * Gets subroom_manage
     *
     * @return bool
     */
    public function getSubroomManage()
    {
        return $this->container['subroom_manage'];
    }

    /**
     * Sets subroom_manage
     *
     * @param bool $subroom_manage subroom_manage
     *
     * @return $this
     */
    public function setSubroomManage($subroom_manage)
    {
        $this->container['subroom_manage'] = $subroom_manage;

        return $this;
    }

    /**
     * Gets subroom_create_public
     *
     * @return bool
     */
    public function getSubroomCreatePublic()
    {
        return $this->container['subroom_create_public'];
    }

    /**
     * Sets subroom_create_public
     *
     * @param bool $subroom_create_public subroom_create_public
     *
     * @return $this
     */
    public function setSubroomCreatePublic($subroom_create_public)
    {
        $this->container['subroom_create_public'] = $subroom_create_public;

        return $this;
    }

    /**
     * Gets subroom_create_private
     *
     * @return bool
     */
    public function getSubroomCreatePrivate()
    {
        return $this->container['subroom_create_private'];
    }

    /**
     * Sets subroom_create_private
     *
     * @param bool $subroom_create_private subroom_create_private
     *
     * @return $this
     */
    public function setSubroomCreatePrivate($subroom_create_private)
    {
        $this->container['subroom_create_private'] = $subroom_create_private;

        return $this;
    }

    /**
     * Gets chat
     *
     * @return bool
     */
    public function getChat()
    {
        return $this->container['chat'];
    }

    /**
     * Sets chat
     *
     * @param bool $chat chat
     *
     * @return $this
     */
    public function setChat($chat)
    {
        $this->container['chat'] = $chat;

        return $this;
    }

    /**
     * Gets chat_broadcast
     *
     * @return bool
     */
    public function getChatBroadcast()
    {
        return $this->container['chat_broadcast'];
    }

    /**
     * Sets chat_broadcast
     *
     * @param bool $chat_broadcast chat_broadcast
     *
     * @return $this
     */
    public function setChatBroadcast($chat_broadcast)
    {
        $this->container['chat_broadcast'] = $chat_broadcast;

        return $this;
    }

    /**
     * Gets file_admin
     *
     * @return bool
     */
    public function getFileAdmin()
    {
        return $this->container['file_admin'];
    }

    /**
     * Sets file_admin
     *
     * @param bool $file_admin file_admin
     *
     * @return $this
     */
    public function setFileAdmin($file_admin)
    {
        $this->container['file_admin'] = $file_admin;

        return $this;
    }

    /**
     * Gets file_upload
     *
     * @return bool
     */
    public function getFileUpload()
    {
        return $this->container['file_upload'];
    }

    /**
     * Sets file_upload
     *
     * @param bool $file_upload file_upload
     *
     * @return $this
     */
    public function setFileUpload($file_upload)
    {
        $this->container['file_upload'] = $file_upload;

        return $this;
    }

    /**
     * Gets file_list
     *
     * @return bool
     */
    public function getFileList()
    {
        return $this->container['file_list'];
    }

    /**
     * Sets file_list
     *
     * @param bool $file_list file_list
     *
     * @return $this
     */
    public function setFileList($file_list)
    {
        $this->container['file_list'] = $file_list;

        return $this;
    }

    /**
     * Gets fair_use
     *
     * @return bool
     */
    public function getFairUse()
    {
        return $this->container['fair_use'];
    }

    /**
     * Sets fair_use
     *
     * @param bool $fair_use fair_use
     *
     * @return $this
     */
    public function setFairUse($fair_use)
    {
        $this->container['fair_use'] = $fair_use;

        return $this;
    }

    /**
     * Gets action
     *
     * @return bool
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param bool $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets remove
     *
     * @return bool
     */
    public function getRemove()
    {
        return $this->container['remove'];
    }

    /**
     * Sets remove
     *
     * @param bool $remove remove
     *
     * @return $this
     */
    public function setRemove($remove)
    {
        $this->container['remove'] = $remove;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


