<?php
/**
 * PlentyModulesItemAttributeModelsAttribute
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
 * PlentyModulesItemAttributeModelsAttribute Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesItemAttributeModelsAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plenty\Modules\Item\Attribute\Models\Attribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'backend_name' => 'string',
'position' => 'int',
'is_surcharge_percental' => 'bool',
'is_linkable_to_image' => 'bool',
'amazon_attribute' => 'string',
'fruugo_attribute' => 'string',
'pixmania_attribute' => 'int',
'otto_attribute' => 'string',
'google_shopping_attribute' => 'string',
'neckermann_at_ep_attribute' => 'int',
'type_of_selection_in_online_store' => 'string',
'la_redoute_attribute' => 'int',
'is_groupable' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'backend_name' => null,
'position' => null,
'is_surcharge_percental' => null,
'is_linkable_to_image' => null,
'amazon_attribute' => null,
'fruugo_attribute' => null,
'pixmania_attribute' => null,
'otto_attribute' => null,
'google_shopping_attribute' => null,
'neckermann_at_ep_attribute' => null,
'type_of_selection_in_online_store' => null,
'la_redoute_attribute' => null,
'is_groupable' => null    ];

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
'backend_name' => 'backendName',
'position' => 'position',
'is_surcharge_percental' => 'isSurchargePercental',
'is_linkable_to_image' => 'isLinkableToImage',
'amazon_attribute' => 'amazonAttribute',
'fruugo_attribute' => 'fruugoAttribute',
'pixmania_attribute' => 'pixmaniaAttribute',
'otto_attribute' => 'ottoAttribute',
'google_shopping_attribute' => 'googleShoppingAttribute',
'neckermann_at_ep_attribute' => 'neckermannAtEpAttribute',
'type_of_selection_in_online_store' => 'typeOfSelectionInOnlineStore',
'la_redoute_attribute' => 'laRedouteAttribute',
'is_groupable' => 'isGroupable'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'backend_name' => 'setBackendName',
'position' => 'setPosition',
'is_surcharge_percental' => 'setIsSurchargePercental',
'is_linkable_to_image' => 'setIsLinkableToImage',
'amazon_attribute' => 'setAmazonAttribute',
'fruugo_attribute' => 'setFruugoAttribute',
'pixmania_attribute' => 'setPixmaniaAttribute',
'otto_attribute' => 'setOttoAttribute',
'google_shopping_attribute' => 'setGoogleShoppingAttribute',
'neckermann_at_ep_attribute' => 'setNeckermannAtEpAttribute',
'type_of_selection_in_online_store' => 'setTypeOfSelectionInOnlineStore',
'la_redoute_attribute' => 'setLaRedouteAttribute',
'is_groupable' => 'setIsGroupable'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'backend_name' => 'getBackendName',
'position' => 'getPosition',
'is_surcharge_percental' => 'getIsSurchargePercental',
'is_linkable_to_image' => 'getIsLinkableToImage',
'amazon_attribute' => 'getAmazonAttribute',
'fruugo_attribute' => 'getFruugoAttribute',
'pixmania_attribute' => 'getPixmaniaAttribute',
'otto_attribute' => 'getOttoAttribute',
'google_shopping_attribute' => 'getGoogleShoppingAttribute',
'neckermann_at_ep_attribute' => 'getNeckermannAtEpAttribute',
'type_of_selection_in_online_store' => 'getTypeOfSelectionInOnlineStore',
'la_redoute_attribute' => 'getLaRedouteAttribute',
'is_groupable' => 'getIsGroupable'    ];

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
        $this->container['backend_name'] = isset($data['backend_name']) ? $data['backend_name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['is_surcharge_percental'] = isset($data['is_surcharge_percental']) ? $data['is_surcharge_percental'] : null;
        $this->container['is_linkable_to_image'] = isset($data['is_linkable_to_image']) ? $data['is_linkable_to_image'] : null;
        $this->container['amazon_attribute'] = isset($data['amazon_attribute']) ? $data['amazon_attribute'] : null;
        $this->container['fruugo_attribute'] = isset($data['fruugo_attribute']) ? $data['fruugo_attribute'] : null;
        $this->container['pixmania_attribute'] = isset($data['pixmania_attribute']) ? $data['pixmania_attribute'] : null;
        $this->container['otto_attribute'] = isset($data['otto_attribute']) ? $data['otto_attribute'] : null;
        $this->container['google_shopping_attribute'] = isset($data['google_shopping_attribute']) ? $data['google_shopping_attribute'] : null;
        $this->container['neckermann_at_ep_attribute'] = isset($data['neckermann_at_ep_attribute']) ? $data['neckermann_at_ep_attribute'] : null;
        $this->container['type_of_selection_in_online_store'] = isset($data['type_of_selection_in_online_store']) ? $data['type_of_selection_in_online_store'] : null;
        $this->container['la_redoute_attribute'] = isset($data['la_redoute_attribute']) ? $data['la_redoute_attribute'] : null;
        $this->container['is_groupable'] = isset($data['is_groupable']) ? $data['is_groupable'] : null;
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
     * @param int $id The unique ID of the attribute.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets backend_name
     *
     * @return string
     */
    public function getBackendName()
    {
        return $this->container['backend_name'];
    }

    /**
     * Sets backend_name
     *
     * @param string $backend_name The back end name of the attribute. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end.
     *
     * @return $this
     */
    public function setBackendName($backend_name)
    {
        $this->container['backend_name'] = $backend_name;

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
     * @param int $position The position of the attribute. Attributes are displayed in the attribute overview in ascending order by position.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets is_surcharge_percental
     *
     * @return bool
     */
    public function getIsSurchargePercental()
    {
        return $this->container['is_surcharge_percental'];
    }

    /**
     * Sets is_surcharge_percental
     *
     * @param bool $is_surcharge_percental Flag that indicates if the surcharge is percental.
     *
     * @return $this
     */
    public function setIsSurchargePercental($is_surcharge_percental)
    {
        $this->container['is_surcharge_percental'] = $is_surcharge_percental;

        return $this;
    }

    /**
     * Gets is_linkable_to_image
     *
     * @return bool
     */
    public function getIsLinkableToImage()
    {
        return $this->container['is_linkable_to_image'];
    }

    /**
     * Sets is_linkable_to_image
     *
     * @param bool $is_linkable_to_image Flag that indicates if an image can be linked to the attribute.
     *
     * @return $this
     */
    public function setIsLinkableToImage($is_linkable_to_image)
    {
        $this->container['is_linkable_to_image'] = $is_linkable_to_image;

        return $this;
    }

    /**
     * Gets amazon_attribute
     *
     * @return string
     */
    public function getAmazonAttribute()
    {
        return $this->container['amazon_attribute'];
    }

    /**
     * Sets amazon_attribute
     *
     * @param string $amazon_attribute The attribute of the market Amazon that this attribute is liked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setAmazonAttribute($amazon_attribute)
    {
        $this->container['amazon_attribute'] = $amazon_attribute;

        return $this;
    }

    /**
     * Gets fruugo_attribute
     *
     * @return string
     */
    public function getFruugoAttribute()
    {
        return $this->container['fruugo_attribute'];
    }

    /**
     * Sets fruugo_attribute
     *
     * @param string $fruugo_attribute The attribute of the market Fruugo that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     *
     * @return $this
     */
    public function setFruugoAttribute($fruugo_attribute)
    {
        $this->container['fruugo_attribute'] = $fruugo_attribute;

        return $this;
    }

    /**
     * Gets pixmania_attribute
     *
     * @return int
     */
    public function getPixmaniaAttribute()
    {
        return $this->container['pixmania_attribute'];
    }

    /**
     * Sets pixmania_attribute
     *
     * @param int $pixmania_attribute The attribute of the market PIXmania that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setPixmaniaAttribute($pixmania_attribute)
    {
        $this->container['pixmania_attribute'] = $pixmania_attribute;

        return $this;
    }

    /**
     * Gets otto_attribute
     *
     * @return string
     */
    public function getOttoAttribute()
    {
        return $this->container['otto_attribute'];
    }

    /**
     * Sets otto_attribute
     *
     * @param string $otto_attribute The attribute of the market OTTO that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     *
     * @return $this
     */
    public function setOttoAttribute($otto_attribute)
    {
        $this->container['otto_attribute'] = $otto_attribute;

        return $this;
    }

    /**
     * Gets google_shopping_attribute
     *
     * @return string
     */
    public function getGoogleShoppingAttribute()
    {
        return $this->container['google_shopping_attribute'];
    }

    /**
     * Sets google_shopping_attribute
     *
     * @param string $google_shopping_attribute The attribute of the market Google Shopping that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market.
     *
     * @return $this
     */
    public function setGoogleShoppingAttribute($google_shopping_attribute)
    {
        $this->container['google_shopping_attribute'] = $google_shopping_attribute;

        return $this;
    }

    /**
     * Gets neckermann_at_ep_attribute
     *
     * @return int
     */
    public function getNeckermannAtEpAttribute()
    {
        return $this->container['neckermann_at_ep_attribute'];
    }

    /**
     * Sets neckermann_at_ep_attribute
     *
     * @param int $neckermann_at_ep_attribute The component of the market neckermann AT EP that this attribute is linked to. To list variations on this market, attributes must be linked to one of the components specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setNeckermannAtEpAttribute($neckermann_at_ep_attribute)
    {
        $this->container['neckermann_at_ep_attribute'] = $neckermann_at_ep_attribute;

        return $this;
    }

    /**
     * Gets type_of_selection_in_online_store
     *
     * @return string
     */
    public function getTypeOfSelectionInOnlineStore()
    {
        return $this->container['type_of_selection_in_online_store'];
    }

    /**
     * Sets type_of_selection_in_online_store
     *
     * @param string $type_of_selection_in_online_store How customers can select the attribute in the front end of a client. To allow attribute selection by check mark, attribute availability must be checked on the client side.
     *
     * @return $this
     */
    public function setTypeOfSelectionInOnlineStore($type_of_selection_in_online_store)
    {
        $this->container['type_of_selection_in_online_store'] = $type_of_selection_in_online_store;

        return $this;
    }

    /**
     * Gets la_redoute_attribute
     *
     * @return int
     */
    public function getLaRedouteAttribute()
    {
        return $this->container['la_redoute_attribute'];
    }

    /**
     * Sets la_redoute_attribute
     *
     * @param int $la_redoute_attribute The attribute of the market La Redoute that this attribute is linked to. To list variations on this market, attributes must be linked to one of the attributes specified by the market. Check documentation of the market for permitted values.
     *
     * @return $this
     */
    public function setLaRedouteAttribute($la_redoute_attribute)
    {
        $this->container['la_redoute_attribute'] = $la_redoute_attribute;

        return $this;
    }

    /**
     * Gets is_groupable
     *
     * @return bool
     */
    public function getIsGroupable()
    {
        return $this->container['is_groupable'];
    }

    /**
     * Sets is_groupable
     *
     * @param bool $is_groupable Flag that indicates if the attribute can be grouped in item lists. If yes, variations with this attribute can be shown in the ItemViewCategoriesList template first. Other attributes are nested and can only be selected after this attribute has been selected.
     *
     * @return $this
     */
    public function setIsGroupable($is_groupable)
    {
        $this->container['is_groupable'] = $is_groupable;

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
