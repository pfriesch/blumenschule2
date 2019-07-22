<?php


namespace BSApp\Service\plentymarketsAPI\Model\Used;


use ArrayAccess;
use BSApp\Service\plentymarketsAPI\Model\ModelInterface;
use BSApp\Service\plentymarketsAPI\Model\PlentyModulesOrderModelsOrder;
use BSApp\Service\plentymarketsAPI\ObjectSerializer;

class ModelsOrders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Orders';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'page' => 'int',
        'totals_count' => 'int',
        'is_last_page' => 'bool',
        'last_page_number' => 'int',
        'first_on_page' => 'int',
        'last_on_page' => 'int',
        'items_per_page' => 'int',
//        'entries' => [PlentyModulesOrderModelsOrder::class]];
        'entries' => 'map[,' . PlentyModulesOrderModelsOrder::class . ']'];


    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'page' => null,
        'totals_count' => null,
        'is_last_page' => null,
        'last_page_number' => null,
        'first_on_page' => null,
        'last_on_page' => null,
        'items_per_page' => null,
        'entries' => null];
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'page' => 'page',
        'totals_count' => 'totalsCount',
        'is_last_page' => 'isLastPage',
        'last_page_number' => 'lastPageNumber',
        'first_on_page' => 'firstOnPage',
        'last_on_page' => 'lastOnPage',
        'items_per_page' => 'itemsPerPage',
        'entries' => 'entries'];


    protected static $setters = [
        'page' => 'setPage',
        'totals_count' => 'setTotalsCount',
        'is_last_page' => 'setIsLastPage',
        'last_page_number' => 'setLastPageNumber',
        'first_on_page' => 'setFirstOnPage',
        'last_on_page' => 'setLastOnPage',
        'items_per_page' => 'setItemsPerPage',
        'entries' => 'setEntries'];

    protected static $getters = [
        'page' => 'getPage',
        'totals_count' => 'getTotalsCount',
        'is_last_page' => 'getIsLastPage',
        'last_page_number' => 'getLastPageNumber',
        'first_on_page' => 'getFirstOnPage',
        'last_on_page' => 'getLastOnPage',
        'items_per_page' => 'getItemsPerPage',
        'entries' => 'getEntries'];

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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['totals_count'] = isset($data['totals_count']) ? $data['totals_count'] : null;
        $this->container['is_last_page'] = isset($data['is_last_page']) ? $data['is_last_page'] : null;
        $this->container['last_page_number'] = isset($data['last_page_number']) ? $data['last_page_number'] : null;
        $this->container['first_on_page'] = isset($data['first_on_page']) ? $data['first_on_page'] : null;
        $this->container['last_on_page'] = isset($data['last_on_page']) ? $data['last_on_page'] : null;
        $this->container['items_per_page'] = isset($data['items_per_page']) ? $data['items_per_page'] : null;
        $this->container['entries'] = isset($data['entries']) ? $data['entries'] : null;
    }

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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function getPage()
    {
        return $this->container['page'];
    }

    public function getTotalsCount()
    {
        return $this->container['totals_count'];
    }

    public function getIsLastPage()
    {
        return $this->container['is_last_page'];
    }

    public function getLastPageNumber()
    {
        return $this->container['last_page_number'];
    }

    public function getFirstOnPage()
    {
        return $this->container['first_on_page'];
    }

    public function getLastOnPage()
    {
        return $this->container['last_on_page'];
    }

    public function getItemsPerPage()
    {
        return $this->container['items_per_page'];
    }

    public function getEntries()
    {
        return $this->container['entries'];
    }

    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    public function setTotalsCount($totals_count)
    {
        $this->container['totals_count'] = $totals_count;
        return $this;
    }

    public function setIsLastPage($is_last_page)
    {
        $this->container['is_last_page'] = $is_last_page;
        return $this;
    }

    public function setLastPageNumber($last_page_number)
    {
        $this->container['last_page_number'] = $last_page_number;
        return $this;
    }

    public function setFirstOnPage($first_on_page)
    {
        $this->container['first_on_page'] = $first_on_page;
        return $this;
    }

    public function setLastOnPage($last_on_page)
    {
        $this->container['last_on_page'] = $last_on_page;
        return $this;
    }

    public function setItemsPerPage($items_per_page)
    {
        $this->container['items_per_page'] = $items_per_page;
        return $this;
    }

    public function setEntries($entries)
    {
        $this->container['entries'] = $entries;
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