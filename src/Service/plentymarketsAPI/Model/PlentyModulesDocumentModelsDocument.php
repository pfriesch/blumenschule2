<?php
/**
 * PlentyModulesDocumentModelsDocument
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PlentyModulesDocumentModelsDocument Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesDocumentModelsDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plenty\Modules\Document\Models\Document';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'type' => 'string',
'number' => 'int',
'number_with_prefix' => 'string',
'path' => 'string',
'user_id' => 'int',
'source' => 'string',
'display_date' => 'string',
'content' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'type' => null,
'number' => null,
'number_with_prefix' => null,
'path' => null,
'user_id' => null,
'source' => null,
'display_date' => null,
'content' => null    ];

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
'type' => 'type',
'number' => 'number',
'number_with_prefix' => 'numberWithPrefix',
'path' => 'path',
'user_id' => 'userId',
'source' => 'source',
'display_date' => 'displayDate',
'content' => 'content'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'type' => 'setType',
'number' => 'setNumber',
'number_with_prefix' => 'setNumberWithPrefix',
'path' => 'setPath',
'user_id' => 'setUserId',
'source' => 'setSource',
'display_date' => 'setDisplayDate',
'content' => 'setContent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'type' => 'getType',
'number' => 'getNumber',
'number_with_prefix' => 'getNumberWithPrefix',
'path' => 'getPath',
'user_id' => 'getUserId',
'source' => 'getSource',
'display_date' => 'getDisplayDate',
'content' => 'getContent'    ];

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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['number_with_prefix'] = isset($data['number_with_prefix']) ? $data['number_with_prefix'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['display_date'] = isset($data['display_date']) ? $data['display_date'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
     * @param int $id The ID of the document
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the document. The following types are available:                            <ul>     <li>admin</li>     <li>blog</li>  <li>category</li>  <li>correction_document</li>  <li>credit_note</li>     <li>credit_note_external</li>        <li>customer</li>  <li>delivery_note</li>     <li>dunning_letter</li>        <li>ebics_hash</li>     <li>facet</li>     <li>invoice</li>     <li>invoice_external</li>                                <li>pos_invoice</li>                                <li>pos_invoice_cancellation</li>  <li>item</li>  <li>multi_credit_note</li>     <li>multi_invoice</li>        <li>offer</li>     <li>order_confirmation</li>        <li>pickup_delivery</li>     <li>receipt</li>                                <li>refund_reversal</li>     <li>reorder</li>     <li>repair_bill</li>     <li>return_note</li>        <li>reversal_document</li>        <li>settlement_report</li>     <li>success_confirmation</li>     <li>ticket</li>     <li>webshop</li>   <li>webshop_customer</li>     <li>z_report</li>     <li>shipping_label</li>     <li>shipping_export_label</li>     <li>returns_label</li> </ul>
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number The document number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets number_with_prefix
     *
     * @return string
     */
    public function getNumberWithPrefix()
    {
        return $this->container['number_with_prefix'];
    }

    /**
     * Sets number_with_prefix
     *
     * @param string $number_with_prefix The document number with prefix
     *
     * @return $this
     */
    public function setNumberWithPrefix($number_with_prefix)
    {
        $this->container['number_with_prefix'] = $number_with_prefix;

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
     * @param string $path The path to the document
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id The ID of the user
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source The source where the document was generated. Possible sources are 'klarna', 'soap', 'admin', 'hitmeister', 'paypal' and 'rest'.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets display_date
     *
     * @return string
     */
    public function getDisplayDate()
    {
        return $this->container['display_date'];
    }

    /**
     * Sets display_date
     *
     * @param string $display_date The date displayed on the document
     *
     * @return $this
     */
    public function setDisplayDate($display_date)
    {
        $this->container['display_date'] = $display_date;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content The base64 encodedcontent of the document.
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

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
