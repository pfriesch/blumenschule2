<?php
/**
 * PlentyModulesItemItemImageModelsItemImage
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
 * PlentyModulesItemItemImageModelsItemImage Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesItemItemImageModelsItemImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Item\ItemImage\Models\ItemImage';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'item_id' => 'int',
        'file_type' => 'string',
        'path' => 'string',
        'position' => 'int',
        'created_at' => 'string',
        'updated_at' => 'string',
        'md5_checksum' => 'string',
        'md5_checksum_original' => 'string',
        'size' => 'int',
        'width' => 'int',
        'height' => 'int',
        'url' => 'string',
        'url_middle' => 'string',
        'url_preview' => 'string',
        'url_second_preview' => 'string',
        'names' => '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesItemItemImageModelsItemImageName[]',
        'availabilities' => '\BSApp\Service\plentymarketsAPI\Model\PlentyModulesItemItemImageModelsItemImageAvailability[]'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'item_id' => null,
        'file_type' => null,
        'path' => null,
        'position' => null,
        'created_at' => null,
        'updated_at' => null,
        'md5_checksum' => null,
        'md5_checksum_original' => null,
        'size' => null,
        'width' => null,
        'height' => null,
        'url' => null,
        'url_middle' => null,
        'url_preview' => null,
        'url_second_preview' => null,
        'names' => null,
        'availabilities' => null];

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
        'id' => 'id',
        'item_id' => 'itemId',
        'file_type' => 'fileType',
        'path' => 'path',
        'position' => 'position',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'md5_checksum' => 'md5Checksum',
        'md5_checksum_original' => 'md5ChecksumOriginal',
        'size' => 'size',
        'width' => 'width',
        'height' => 'height',
        'url' => 'url',
        'url_middle' => 'urlMiddle',
        'url_preview' => 'urlPreview',
        'url_second_preview' => 'urlSecondPreview',
        'names' => 'names',
        'availabilities' => 'availabilities'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'item_id' => 'setItemId',
        'file_type' => 'setFileType',
        'path' => 'setPath',
        'position' => 'setPosition',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'md5_checksum' => 'setMd5Checksum',
        'md5_checksum_original' => 'setMd5ChecksumOriginal',
        'size' => 'setSize',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'url' => 'setUrl',
        'url_middle' => 'setUrlMiddle',
        'url_preview' => 'setUrlPreview',
        'url_second_preview' => 'setUrlSecondPreview',
        'names' => 'setNames',
        'availabilities' => 'setAvailabilities'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'item_id' => 'getItemId',
        'file_type' => 'getFileType',
        'path' => 'getPath',
        'position' => 'getPosition',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'md5_checksum' => 'getMd5Checksum',
        'md5_checksum_original' => 'getMd5ChecksumOriginal',
        'size' => 'getSize',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'url' => 'getUrl',
        'url_middle' => 'getUrlMiddle',
        'url_preview' => 'getUrlPreview',
        'url_second_preview' => 'getUrlSecondPreview',
        'names' => 'getNames',
        'availabilities' => 'getAvailabilities'];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['md5_checksum'] = isset($data['md5_checksum']) ? $data['md5_checksum'] : null;
        $this->container['md5_checksum_original'] = isset($data['md5_checksum_original']) ? $data['md5_checksum_original'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['url_middle'] = isset($data['url_middle']) ? $data['url_middle'] : null;
        $this->container['url_preview'] = isset($data['url_preview']) ? $data['url_preview'] : null;
        $this->container['url_second_preview'] = isset($data['url_second_preview']) ? $data['url_second_preview'] : null;
        $this->container['names'] = isset($data['names']) ? $data['names'] : null;
        $this->container['availabilities'] = isset($data['availabilities']) ? $data['availabilities'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The unique ID of the image
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return int
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param int $item_id The unique ID of the item the image is associated with
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type The file format of the image. Possible file formats: jpg, jpeg, png, gif, svg
     *
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The path under which the image is saved.
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position The position of the image. The position is used for sorting images in the online store.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * @param string $created_at The time the image was uploaded.
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
     * @param string $updated_at The time the image details were last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets md5_checksum
     *
     * @return string
     */
    public function getMd5Checksum()
    {
        return $this->container['md5_checksum'];
    }

    /**
     * Sets md5_checksum
     *
     * @param string $md5_checksum The MD5 hash value of the image file
     *
     * @return $this
     */
    public function setMd5Checksum($md5_checksum)
    {
        $this->container['md5_checksum'] = $md5_checksum;

        return $this;
    }

    /**
     * Gets md5_checksum_original
     *
     * @return string
     */
    public function getMd5ChecksumOriginal()
    {
        return $this->container['md5_checksum_original'];
    }

    /**
     * Sets md5_checksum_original
     *
     * @param string $md5_checksum_original The MD5 hash value of the original image file
     *
     * @return $this
     */
    public function setMd5ChecksumOriginal($md5_checksum_original)
    {
        $this->container['md5_checksum_original'] = $md5_checksum_original;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size The size of the image in pixels
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width The width of the image in pixels
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height The height of the image in pixels
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The URL under which the image can be accessed after the upload.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets url_middle
     *
     * @return string
     */
    public function getUrlMiddle()
    {
        return $this->container['url_middle'];
    }

    /**
     * Sets url_middle
     *
     * @param string $url_middle The URL that points to the  medium-sized version of the item image.
     *
     * @return $this
     */
    public function setUrlMiddle($url_middle)
    {
        $this->container['url_middle'] = $url_middle;

        return $this;
    }

    /**
     * Gets url_preview
     *
     * @return string
     */
    public function getUrlPreview()
    {
        return $this->container['url_preview'];
    }

    /**
     * Sets url_preview
     *
     * @param string $url_preview The URL that points to the  first preview version of the item image.
     *
     * @return $this
     */
    public function setUrlPreview($url_preview)
    {
        $this->container['url_preview'] = $url_preview;

        return $this;
    }

    /**
     * Gets url_second_preview
     *
     * @return string
     */
    public function getUrlSecondPreview()
    {
        return $this->container['url_second_preview'];
    }

    /**
     * Sets url_second_preview
     *
     * @param string $url_second_preview The URL that points to the second preview version of the item image.
     *
     * @return $this
     */
    public function setUrlSecondPreview($url_second_preview)
    {
        $this->container['url_second_preview'] = $url_second_preview;

        return $this;
    }

    /**
     * Gets names
     *
     * @return PlentyModulesItemItemImageModelsItemImageName[]
     */
    public function getNames()
    {
        return $this->container['names'];
    }

    /**
     * Sets names
     *
     * @param PlentyModulesItemItemImageModelsItemImageName[] $names Lists the image's name details as an array. (List)
     *
     * @return $this
     */
    public function setNames($names)
    {
        $this->container['names'] = $names;

        return $this;
    }

    /**
     * Gets availabilities
     *
     * @return PlentyModulesItemItemImageModelsItemImageAvailability[]
     */
    public function getAvailabilities()
    {
        return $this->container['availabilities'];
    }

    /**
     * Sets availabilities
     *
     * @param PlentyModulesItemItemImageModelsItemImageAvailability[] $availabilities Lists the image's availability details as an array. (List)
     *
     * @return $this
     */
    public function setAvailabilities($availabilities)
    {
        $this->container['availabilities'] = $availabilities;

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
     * @param mixed $value Value to be set
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
