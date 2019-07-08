<?php
/**
 * PlentyModulesAccountContactContactEventModelsContactEvent
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
 * PlentyModulesAccountContactContactEventModelsContactEvent Class Doc Comment
 *
 * @category Class
 * @package  BSApp\Service\plentymarketsAPI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesAccountContactContactEventModelsContactEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Plenty\Modules\Account\Contact\ContactEvent\Models\ContactEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'event_id' => 'int',
        'contact_id' => 'int',
        'user_id' => 'int',
        'event_duration' => 'int',
        'event_type' => 'string',
        'order_row_id' => 'int',
        'event_info' => 'string',
        'billable' => 'bool',
        'event_inserted_at' => 'string',
        'event_billed_at' => 'string',
        'event_provision_paid_at' => 'string',
        'event_credit_value' => 'BigDecimal'];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'event_id' => null,
        'contact_id' => null,
        'user_id' => null,
        'event_duration' => null,
        'event_type' => null,
        'order_row_id' => null,
        'event_info' => null,
        'billable' => null,
        'event_inserted_at' => null,
        'event_billed_at' => null,
        'event_provision_paid_at' => null,
        'event_credit_value' => null];

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
        'event_id' => 'eventId',
        'contact_id' => 'contactId',
        'user_id' => 'userId',
        'event_duration' => 'eventDuration',
        'event_type' => 'eventType',
        'order_row_id' => 'orderRowId',
        'event_info' => 'eventInfo',
        'billable' => 'billable',
        'event_inserted_at' => 'eventInsertedAt',
        'event_billed_at' => 'eventBilledAt',
        'event_provision_paid_at' => 'eventProvisionPaidAt',
        'event_credit_value' => 'eventCreditValue'];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
        'contact_id' => 'setContactId',
        'user_id' => 'setUserId',
        'event_duration' => 'setEventDuration',
        'event_type' => 'setEventType',
        'order_row_id' => 'setOrderRowId',
        'event_info' => 'setEventInfo',
        'billable' => 'setBillable',
        'event_inserted_at' => 'setEventInsertedAt',
        'event_billed_at' => 'setEventBilledAt',
        'event_provision_paid_at' => 'setEventProvisionPaidAt',
        'event_credit_value' => 'setEventCreditValue'];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
        'contact_id' => 'getContactId',
        'user_id' => 'getUserId',
        'event_duration' => 'getEventDuration',
        'event_type' => 'getEventType',
        'order_row_id' => 'getOrderRowId',
        'event_info' => 'getEventInfo',
        'billable' => 'getBillable',
        'event_inserted_at' => 'getEventInsertedAt',
        'event_billed_at' => 'getEventBilledAt',
        'event_provision_paid_at' => 'getEventProvisionPaidAt',
        'event_credit_value' => 'getEventCreditValue'];

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
        $this->container['event_id'] = isset($data['event_id']) ? $data['event_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['event_duration'] = isset($data['event_duration']) ? $data['event_duration'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['order_row_id'] = isset($data['order_row_id']) ? $data['order_row_id'] : null;
        $this->container['event_info'] = isset($data['event_info']) ? $data['event_info'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['event_inserted_at'] = isset($data['event_inserted_at']) ? $data['event_inserted_at'] : null;
        $this->container['event_billed_at'] = isset($data['event_billed_at']) ? $data['event_billed_at'] : null;
        $this->container['event_provision_paid_at'] = isset($data['event_provision_paid_at']) ? $data['event_provision_paid_at'] : null;
        $this->container['event_credit_value'] = isset($data['event_credit_value']) ? $data['event_credit_value'] : null;
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
     * Gets event_id
     *
     * @return int
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param int $event_id The ID of the event
     *
     * @return $this
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return int
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param int $contact_id The ID of the contact this event belongs to
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

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
     * @param int $user_id The ID of the user this event belongs to
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets event_duration
     *
     * @return int
     */
    public function getEventDuration()
    {
        return $this->container['event_duration'];
    }

    /**
     * Sets event_duration
     *
     * @param int $event_duration The duration of the event in seconds
     *
     * @return $this
     */
    public function setEventDuration($event_duration)
    {
        $this->container['event_duration'] = $event_duration;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type The type of the event. Possible values are call, ticket, email, meeting, webinar, development and design.
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets order_row_id
     *
     * @return int
     */
    public function getOrderRowId()
    {
        return $this->container['order_row_id'];
    }

    /**
     * Sets order_row_id
     *
     * @param int $order_row_id order_row_id
     *
     * @return $this
     */
    public function setOrderRowId($order_row_id)
    {
        $this->container['order_row_id'] = $order_row_id;

        return $this;
    }

    /**
     * Gets event_info
     *
     * @return string
     */
    public function getEventInfo()
    {
        return $this->container['event_info'];
    }

    /**
     * Sets event_info
     *
     * @param string $event_info Informational text about the event
     *
     * @return $this
     */
    public function setEventInfo($event_info)
    {
        $this->container['event_info'] = $event_info;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable Billable if set to 1
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets event_inserted_at
     *
     * @return string
     */
    public function getEventInsertedAt()
    {
        return $this->container['event_inserted_at'];
    }

    /**
     * Sets event_inserted_at
     *
     * @param string $event_inserted_at The date the event was created at as unix timestamp
     *
     * @return $this
     */
    public function setEventInsertedAt($event_inserted_at)
    {
        $this->container['event_inserted_at'] = $event_inserted_at;

        return $this;
    }

    /**
     * Gets event_billed_at
     *
     * @return string
     */
    public function getEventBilledAt()
    {
        return $this->container['event_billed_at'];
    }

    /**
     * Sets event_billed_at
     *
     * @param string $event_billed_at The date the event was billed at as unix timestamp
     *
     * @return $this
     */
    public function setEventBilledAt($event_billed_at)
    {
        $this->container['event_billed_at'] = $event_billed_at;

        return $this;
    }

    /**
     * Gets event_provision_paid_at
     *
     * @return string
     */
    public function getEventProvisionPaidAt()
    {
        return $this->container['event_provision_paid_at'];
    }

    /**
     * Sets event_provision_paid_at
     *
     * @param string $event_provision_paid_at The date the provision was paid at as unix timestamp
     *
     * @return $this
     */
    public function setEventProvisionPaidAt($event_provision_paid_at)
    {
        $this->container['event_provision_paid_at'] = $event_provision_paid_at;

        return $this;
    }

    /**
     * Gets event_credit_value
     *
     * @return BigDecimal
     */
    public function getEventCreditValue()
    {
        return $this->container['event_credit_value'];
    }

    /**
     * Sets event_credit_value
     *
     * @param BigDecimal $event_credit_value The credit value of the event
     *
     * @return $this
     */
    public function setEventCreditValue($event_credit_value)
    {
        $this->container['event_credit_value'] = $event_credit_value;

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
