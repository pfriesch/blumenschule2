<?php
/**
 * PlentyModulesListingLayoutTemplateModelsLayoutTemplate
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
 * PlentyModulesListingLayoutTemplateModelsLayoutTemplate Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesListingLayoutTemplateModelsLayoutTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Listing\LayoutTemplate\Models\LayoutTemplate';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'css' => 'string',
        'html_structure' => 'string',
        'main_frame' => 'string',
        'additional_content' => 'object[]',
        'appendix_type' => 'string'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'css' => null,
        'html_structure' => null,
        'main_frame' => null,
        'additional_content' => null,
        'appendix_type' => null];

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
        'name' => 'name',
        'css' => 'css',
        'html_structure' => 'htmlStructure',
        'main_frame' => 'mainFrame',
        'additional_content' => 'additionalContent',
        'appendix_type' => 'appendixType'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'css' => 'setCss',
        'html_structure' => 'setHtmlStructure',
        'main_frame' => 'setMainFrame',
        'additional_content' => 'setAdditionalContent',
        'appendix_type' => 'setAppendixType'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'css' => 'getCss',
        'html_structure' => 'getHtmlStructure',
        'main_frame' => 'getMainFrame',
        'additional_content' => 'getAdditionalContent',
        'appendix_type' => 'getAppendixType'];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['css'] = isset($data['css']) ? $data['css'] : null;
        $this->container['html_structure'] = isset($data['html_structure']) ? $data['html_structure'] : null;
        $this->container['main_frame'] = isset($data['main_frame']) ? $data['main_frame'] : null;
        $this->container['additional_content'] = isset($data['additional_content']) ? $data['additional_content'] : null;
        $this->container['appendix_type'] = isset($data['appendix_type']) ? $data['appendix_type'] : null;
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
     * @param int $id The ID of the layout template.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the layout template.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets css
     *
     * @return string
     */
    public function getCss()
    {
        return $this->container['css'];
    }

    /**
     * Sets css
     *
     * @param string $css The css of the layout template.
     *
     * @return $this
     */
    public function setCss($css)
    {
        $this->container['css'] = $css;

        return $this;
    }

    /**
     * Gets html_structure
     *
     * @return string
     */
    public function getHtmlStructure()
    {
        return $this->container['html_structure'];
    }

    /**
     * Sets html_structure
     *
     * @param string $html_structure The html structure of the layout template.
     *
     * @return $this
     */
    public function setHtmlStructure($html_structure)
    {
        $this->container['html_structure'] = $html_structure;

        return $this;
    }

    /**
     * Gets main_frame
     *
     * @return string
     */
    public function getMainFrame()
    {
        return $this->container['main_frame'];
    }

    /**
     * Sets main_frame
     *
     * @param string $main_frame The main frame of the layout template.
     *
     * @return $this
     */
    public function setMainFrame($main_frame)
    {
        $this->container['main_frame'] = $main_frame;

        return $this;
    }

    /**
     * Gets additional_content
     *
     * @return object[]
     */
    public function getAdditionalContent()
    {
        return $this->container['additional_content'];
    }

    /**
     * Sets additional_content
     *
     * @param object[] $additional_content The additional content of the layout template.
     *
     * @return $this
     */
    public function setAdditionalContent($additional_content)
    {
        $this->container['additional_content'] = $additional_content;

        return $this;
    }

    /**
     * Gets appendix_type
     *
     * @return string
     */
    public function getAppendixType()
    {
        return $this->container['appendix_type'];
    }

    /**
     * Sets appendix_type
     *
     * @param string $appendix_type The appendix type of the layout template.
     *
     * @return $this
     */
    public function setAppendixType($appendix_type)
    {
        $this->container['appendix_type'] = $appendix_type;

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
