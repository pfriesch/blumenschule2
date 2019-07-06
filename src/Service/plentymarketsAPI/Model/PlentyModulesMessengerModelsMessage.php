<?php
/**
 * PlentyModulesMessengerModelsMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.8
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BSApp\Service\plentymarketsAPI\Model;

use \ArrayAccess;
use \BSApp\Service\plentymarketsAPI\ObjectSerializer;

/**
 * PlentyModulesMessengerModelsMessage Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesMessengerModelsMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plenty\Modules\Messenger\Models\Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
'plenty_id_hash' => 'string',
'parent_uuid' => 'string',
'whispered' => 'bool',
'tags' => 'int[]',
'title' => 'string',
'preview' => 'string',
'message' => 'string',
'attached_files_count' => 'int',
'done_at' => 'string',
'created_at' => 'string',
'updated_at' => 'string',
'deleted_at' => 'string',
'deleted_by' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
'plenty_id_hash' => null,
'parent_uuid' => null,
'whispered' => null,
'tags' => null,
'title' => null,
'preview' => null,
'message' => null,
'attached_files_count' => null,
'done_at' => null,
'created_at' => null,
'updated_at' => null,
'deleted_at' => null,
'deleted_by' => null    ];

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
        'uuid' => 'uuid',
'plenty_id_hash' => 'plentyIdHash',
'parent_uuid' => 'parentUuid',
'whispered' => 'whispered',
'tags' => 'tags',
'title' => 'title',
'preview' => 'preview',
'message' => 'message',
'attached_files_count' => 'attachedFilesCount',
'done_at' => 'doneAt',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'deleted_at' => 'deletedAt',
'deleted_by' => 'deletedBy'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
'plenty_id_hash' => 'setPlentyIdHash',
'parent_uuid' => 'setParentUuid',
'whispered' => 'setWhispered',
'tags' => 'setTags',
'title' => 'setTitle',
'preview' => 'setPreview',
'message' => 'setMessage',
'attached_files_count' => 'setAttachedFilesCount',
'done_at' => 'setDoneAt',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'deleted_at' => 'setDeletedAt',
'deleted_by' => 'setDeletedBy'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
'plenty_id_hash' => 'getPlentyIdHash',
'parent_uuid' => 'getParentUuid',
'whispered' => 'getWhispered',
'tags' => 'getTags',
'title' => 'getTitle',
'preview' => 'getPreview',
'message' => 'getMessage',
'attached_files_count' => 'getAttachedFilesCount',
'done_at' => 'getDoneAt',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'deleted_at' => 'getDeletedAt',
'deleted_by' => 'getDeletedBy'    ];

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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['plenty_id_hash'] = isset($data['plenty_id_hash']) ? $data['plenty_id_hash'] : null;
        $this->container['parent_uuid'] = isset($data['parent_uuid']) ? $data['parent_uuid'] : null;
        $this->container['whispered'] = isset($data['whispered']) ? $data['whispered'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['preview'] = isset($data['preview']) ? $data['preview'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['attached_files_count'] = isset($data['attached_files_count']) ? $data['attached_files_count'] : null;
        $this->container['done_at'] = isset($data['done_at']) ? $data['done_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['deleted_by'] = isset($data['deleted_by']) ? $data['deleted_by'] : null;
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The UUID5 identifier of the message
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets plenty_id_hash
     *
     * @return string
     */
    public function getPlentyIdHash()
    {
        return $this->container['plenty_id_hash'];
    }

    /**
     * Sets plenty_id_hash
     *
     * @param string $plenty_id_hash The plenty ID hash
     *
     * @return $this
     */
    public function setPlentyIdHash($plenty_id_hash)
    {
        $this->container['plenty_id_hash'] = $plenty_id_hash;

        return $this;
    }

    /**
     * Gets parent_uuid
     *
     * @return string
     */
    public function getParentUuid()
    {
        return $this->container['parent_uuid'];
    }

    /**
     * Sets parent_uuid
     *
     * @param string $parent_uuid The uuid5 of the parent message.
     *
     * @return $this
     */
    public function setParentUuid($parent_uuid)
    {
        $this->container['parent_uuid'] = $parent_uuid;

        return $this;
    }

    /**
     * Gets whispered
     *
     * @return bool
     */
    public function getWhispered()
    {
        return $this->container['whispered'];
    }

    /**
     * Sets whispered
     *
     * @param bool $whispered Whether the message is wispered (not visible for the contact/order linked to the message) or not.
     *
     * @return $this
     */
    public function setWhispered($whispered)
    {
        $this->container['whispered'] = $whispered;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return int[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param int[] $tags An array with tag IDs assigned to the message
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the message
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets preview
     *
     * @return string
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     *
     * @param string $preview The first two lines of the message without any markup
     *
     * @return $this
     */
    public function setPreview($preview)
    {
        $this->container['preview'] = $preview;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message The content of the message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets attached_files_count
     *
     * @return int
     */
    public function getAttachedFilesCount()
    {
        return $this->container['attached_files_count'];
    }

    /**
     * Sets attached_files_count
     *
     * @param int $attached_files_count The amount of attached files (readonly)
     *
     * @return $this
     */
    public function setAttachedFilesCount($attached_files_count)
    {
        $this->container['attached_files_count'] = $attached_files_count;

        return $this;
    }

    /**
     * Gets done_at
     *
     * @return string
     */
    public function getDoneAt()
    {
        return $this->container['done_at'];
    }

    /**
     * Sets done_at
     *
     * @param string $done_at The date the messages setted done.
     *
     * @return $this
     */
    public function setDoneAt($done_at)
    {
        $this->container['done_at'] = $done_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at The creation date of the message.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at The date of the last update of the message.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param string $deleted_at The date the message was deleted.
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return int
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param int $deleted_by The id of the user deleted the message.
     *
     * @return $this
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

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
