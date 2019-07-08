<?php
/**
 * PlentyModulesPluginModelsConfiguration
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
 * PlentyModulesPluginModelsConfiguration Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesPluginModelsConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Plugin\Models\Configuration';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'key' => 'string',
        'value' => 'string',
        'plugin_id' => 'int',
        'tab' => 'string',
        'label' => 'object',
        'type' => 'string',
        'possible_values' => 'object[]',
        'default' => 'string',
        'scss' => 'bool',
        'updated_at' => 'string',
        'plugin_set_entry_id' => 'int'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'id' => null,
        'key' => null,
        'value' => null,
        'plugin_id' => null,
        'tab' => null,
        'label' => null,
        'type' => null,
        'possible_values' => null,
        'default' => null,
        'scss' => null,
        'updated_at' => null,
        'plugin_set_entry_id' => null];

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
        'key' => 'key',
        'value' => 'value',
        'plugin_id' => 'plugin_id',
        'tab' => 'tab',
        'label' => 'label',
        'type' => 'type',
        'possible_values' => 'possibleValues',
        'default' => 'default',
        'scss' => 'scss',
        'updated_at' => 'updated_at',
        'plugin_set_entry_id' => 'pluginSetEntryId'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'key' => 'setKey',
        'value' => 'setValue',
        'plugin_id' => 'setPluginId',
        'tab' => 'setTab',
        'label' => 'setLabel',
        'type' => 'setType',
        'possible_values' => 'setPossibleValues',
        'default' => 'setDefault',
        'scss' => 'setScss',
        'updated_at' => 'setUpdatedAt',
        'plugin_set_entry_id' => 'setPluginSetEntryId'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'key' => 'getKey',
        'value' => 'getValue',
        'plugin_id' => 'getPluginId',
        'tab' => 'getTab',
        'label' => 'getLabel',
        'type' => 'getType',
        'possible_values' => 'getPossibleValues',
        'default' => 'getDefault',
        'scss' => 'getScss',
        'updated_at' => 'getUpdatedAt',
        'plugin_set_entry_id' => 'getPluginSetEntryId'];

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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['plugin_id'] = isset($data['plugin_id']) ? $data['plugin_id'] : null;
        $this->container['tab'] = isset($data['tab']) ? $data['tab'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['possible_values'] = isset($data['possible_values']) ? $data['possible_values'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['scss'] = isset($data['scss']) ? $data['scss'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['plugin_set_entry_id'] = isset($data['plugin_set_entry_id']) ? $data['plugin_set_entry_id'] : null;
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
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets plugin_id
     *
     * @return int
     */
    public function getPluginId()
    {
        return $this->container['plugin_id'];
    }

    /**
     * Sets plugin_id
     *
     * @param int $plugin_id plugin_id
     *
     * @return $this
     */
    public function setPluginId($plugin_id)
    {
        $this->container['plugin_id'] = $plugin_id;

        return $this;
    }

    /**
     * Gets tab
     *
     * @return string
     */
    public function getTab()
    {
        return $this->container['tab'];
    }

    /**
     * Sets tab
     *
     * @param string $tab tab
     *
     * @return $this
     */
    public function setTab($tab)
    {
        $this->container['tab'] = $tab;

        return $this;
    }

    /**
     * Gets label
     *
     * @return object
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param object $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets possible_values
     *
     * @return object[]
     */
    public function getPossibleValues()
    {
        return $this->container['possible_values'];
    }

    /**
     * Sets possible_values
     *
     * @param object[] $possible_values possible_values
     *
     * @return $this
     */
    public function setPossibleValues($possible_values)
    {
        $this->container['possible_values'] = $possible_values;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets scss
     *
     * @return bool
     */
    public function getScss()
    {
        return $this->container['scss'];
    }

    /**
     * Sets scss
     *
     * @param bool $scss scss
     *
     * @return $this
     */
    public function setScss($scss)
    {
        $this->container['scss'] = $scss;

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
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets plugin_set_entry_id
     *
     * @return int
     */
    public function getPluginSetEntryId()
    {
        return $this->container['plugin_set_entry_id'];
    }

    /**
     * Sets plugin_set_entry_id
     *
     * @param int $plugin_set_entry_id plugin_set_entry_id
     *
     * @return $this
     */
    public function setPluginSetEntryId($plugin_set_entry_id)
    {
        $this->container['plugin_set_entry_id'] = $plugin_set_entry_id;

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
