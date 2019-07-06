<?php
/**
 * PlentyModulesAccountContactModelsContact
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
 * PlentyModulesAccountContactModelsContact Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PlentyModulesAccountContactModelsContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plenty\Modules\Account\Contact\Models\Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'external_id' => 'string',
'number' => 'string',
'type_id' => 'int',
'first_name' => 'string',
'last_name' => 'string',
'full_name' => 'string',
'email' => 'string',
'secondary_email' => 'string',
'gender' => 'string',
'title' => 'string',
'form_of_address' => 'string',
'newsletter_allowance_at' => 'string',
'class_id' => 'int',
'blocked' => 'int',
'rating' => 'int',
'book_account' => 'string',
'lang' => 'string',
'referrer_id' => 'BigDecimal',
'plenty_id' => 'int',
'user_id' => 'int',
'birthday_at' => 'string',
'last_login_at' => 'string',
'last_login_at_timestamp' => 'string',
'last_order_at' => 'string',
'created_at' => 'string',
'updated_at' => 'string',
'private_phone' => 'string',
'private_fax' => 'string',
'private_mobile' => 'string',
'ebay_name' => 'string',
'paypal_email' => 'string',
'paypal_payer_id' => 'string',
'klarna_personal_id' => 'string',
'dhl_post_ident' => 'string',
'forum_username' => 'string',
'forum_group_id' => 'string',
'single_access' => 'string',
'contact_person' => 'string',
'marketplace_partner' => 'string',
'valuta' => 'int',
'discount_days' => 'int',
'discount_percent' => 'BigDecimal',
'time_for_payment_allowed_days' => 'int',
'sales_representative_contact_id' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'external_id' => null,
'number' => null,
'type_id' => null,
'first_name' => null,
'last_name' => null,
'full_name' => null,
'email' => null,
'secondary_email' => null,
'gender' => null,
'title' => null,
'form_of_address' => null,
'newsletter_allowance_at' => null,
'class_id' => null,
'blocked' => null,
'rating' => null,
'book_account' => null,
'lang' => null,
'referrer_id' => null,
'plenty_id' => null,
'user_id' => null,
'birthday_at' => null,
'last_login_at' => null,
'last_login_at_timestamp' => null,
'last_order_at' => null,
'created_at' => null,
'updated_at' => null,
'private_phone' => null,
'private_fax' => null,
'private_mobile' => null,
'ebay_name' => null,
'paypal_email' => null,
'paypal_payer_id' => null,
'klarna_personal_id' => null,
'dhl_post_ident' => null,
'forum_username' => null,
'forum_group_id' => null,
'single_access' => null,
'contact_person' => null,
'marketplace_partner' => null,
'valuta' => null,
'discount_days' => null,
'discount_percent' => null,
'time_for_payment_allowed_days' => null,
'sales_representative_contact_id' => null    ];

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
'external_id' => 'externalId',
'number' => 'number',
'type_id' => 'typeId',
'first_name' => 'firstName',
'last_name' => 'lastName',
'full_name' => 'fullName',
'email' => 'email',
'secondary_email' => 'secondaryEmail',
'gender' => 'gender',
'title' => 'title',
'form_of_address' => 'formOfAddress',
'newsletter_allowance_at' => 'newsletterAllowanceAt',
'class_id' => 'classId',
'blocked' => 'blocked',
'rating' => 'rating',
'book_account' => 'bookAccount',
'lang' => 'lang',
'referrer_id' => 'referrerId',
'plenty_id' => 'plentyId',
'user_id' => 'userId',
'birthday_at' => 'birthdayAt',
'last_login_at' => 'lastLoginAt',
'last_login_at_timestamp' => 'lastLoginAtTimestamp',
'last_order_at' => 'lastOrderAt',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'private_phone' => 'privatePhone',
'private_fax' => 'privateFax',
'private_mobile' => 'privateMobile',
'ebay_name' => 'ebayName',
'paypal_email' => 'paypalEmail',
'paypal_payer_id' => 'paypalPayerId',
'klarna_personal_id' => 'klarnaPersonalId',
'dhl_post_ident' => 'dhlPostIdent',
'forum_username' => 'forumUsername',
'forum_group_id' => 'forumGroupId',
'single_access' => 'singleAccess',
'contact_person' => 'contactPerson',
'marketplace_partner' => 'marketplacePartner',
'valuta' => 'valuta',
'discount_days' => 'discountDays',
'discount_percent' => 'discountPercent',
'time_for_payment_allowed_days' => 'timeForPaymentAllowedDays',
'sales_representative_contact_id' => 'salesRepresentativeContactId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'external_id' => 'setExternalId',
'number' => 'setNumber',
'type_id' => 'setTypeId',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'full_name' => 'setFullName',
'email' => 'setEmail',
'secondary_email' => 'setSecondaryEmail',
'gender' => 'setGender',
'title' => 'setTitle',
'form_of_address' => 'setFormOfAddress',
'newsletter_allowance_at' => 'setNewsletterAllowanceAt',
'class_id' => 'setClassId',
'blocked' => 'setBlocked',
'rating' => 'setRating',
'book_account' => 'setBookAccount',
'lang' => 'setLang',
'referrer_id' => 'setReferrerId',
'plenty_id' => 'setPlentyId',
'user_id' => 'setUserId',
'birthday_at' => 'setBirthdayAt',
'last_login_at' => 'setLastLoginAt',
'last_login_at_timestamp' => 'setLastLoginAtTimestamp',
'last_order_at' => 'setLastOrderAt',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'private_phone' => 'setPrivatePhone',
'private_fax' => 'setPrivateFax',
'private_mobile' => 'setPrivateMobile',
'ebay_name' => 'setEbayName',
'paypal_email' => 'setPaypalEmail',
'paypal_payer_id' => 'setPaypalPayerId',
'klarna_personal_id' => 'setKlarnaPersonalId',
'dhl_post_ident' => 'setDhlPostIdent',
'forum_username' => 'setForumUsername',
'forum_group_id' => 'setForumGroupId',
'single_access' => 'setSingleAccess',
'contact_person' => 'setContactPerson',
'marketplace_partner' => 'setMarketplacePartner',
'valuta' => 'setValuta',
'discount_days' => 'setDiscountDays',
'discount_percent' => 'setDiscountPercent',
'time_for_payment_allowed_days' => 'setTimeForPaymentAllowedDays',
'sales_representative_contact_id' => 'setSalesRepresentativeContactId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'external_id' => 'getExternalId',
'number' => 'getNumber',
'type_id' => 'getTypeId',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'full_name' => 'getFullName',
'email' => 'getEmail',
'secondary_email' => 'getSecondaryEmail',
'gender' => 'getGender',
'title' => 'getTitle',
'form_of_address' => 'getFormOfAddress',
'newsletter_allowance_at' => 'getNewsletterAllowanceAt',
'class_id' => 'getClassId',
'blocked' => 'getBlocked',
'rating' => 'getRating',
'book_account' => 'getBookAccount',
'lang' => 'getLang',
'referrer_id' => 'getReferrerId',
'plenty_id' => 'getPlentyId',
'user_id' => 'getUserId',
'birthday_at' => 'getBirthdayAt',
'last_login_at' => 'getLastLoginAt',
'last_login_at_timestamp' => 'getLastLoginAtTimestamp',
'last_order_at' => 'getLastOrderAt',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'private_phone' => 'getPrivatePhone',
'private_fax' => 'getPrivateFax',
'private_mobile' => 'getPrivateMobile',
'ebay_name' => 'getEbayName',
'paypal_email' => 'getPaypalEmail',
'paypal_payer_id' => 'getPaypalPayerId',
'klarna_personal_id' => 'getKlarnaPersonalId',
'dhl_post_ident' => 'getDhlPostIdent',
'forum_username' => 'getForumUsername',
'forum_group_id' => 'getForumGroupId',
'single_access' => 'getSingleAccess',
'contact_person' => 'getContactPerson',
'marketplace_partner' => 'getMarketplacePartner',
'valuta' => 'getValuta',
'discount_days' => 'getDiscountDays',
'discount_percent' => 'getDiscountPercent',
'time_for_payment_allowed_days' => 'getTimeForPaymentAllowedDays',
'sales_representative_contact_id' => 'getSalesRepresentativeContactId'    ];

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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['secondary_email'] = isset($data['secondary_email']) ? $data['secondary_email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['form_of_address'] = isset($data['form_of_address']) ? $data['form_of_address'] : null;
        $this->container['newsletter_allowance_at'] = isset($data['newsletter_allowance_at']) ? $data['newsletter_allowance_at'] : null;
        $this->container['class_id'] = isset($data['class_id']) ? $data['class_id'] : null;
        $this->container['blocked'] = isset($data['blocked']) ? $data['blocked'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['book_account'] = isset($data['book_account']) ? $data['book_account'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['referrer_id'] = isset($data['referrer_id']) ? $data['referrer_id'] : null;
        $this->container['plenty_id'] = isset($data['plenty_id']) ? $data['plenty_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['birthday_at'] = isset($data['birthday_at']) ? $data['birthday_at'] : null;
        $this->container['last_login_at'] = isset($data['last_login_at']) ? $data['last_login_at'] : null;
        $this->container['last_login_at_timestamp'] = isset($data['last_login_at_timestamp']) ? $data['last_login_at_timestamp'] : null;
        $this->container['last_order_at'] = isset($data['last_order_at']) ? $data['last_order_at'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['private_phone'] = isset($data['private_phone']) ? $data['private_phone'] : null;
        $this->container['private_fax'] = isset($data['private_fax']) ? $data['private_fax'] : null;
        $this->container['private_mobile'] = isset($data['private_mobile']) ? $data['private_mobile'] : null;
        $this->container['ebay_name'] = isset($data['ebay_name']) ? $data['ebay_name'] : null;
        $this->container['paypal_email'] = isset($data['paypal_email']) ? $data['paypal_email'] : null;
        $this->container['paypal_payer_id'] = isset($data['paypal_payer_id']) ? $data['paypal_payer_id'] : null;
        $this->container['klarna_personal_id'] = isset($data['klarna_personal_id']) ? $data['klarna_personal_id'] : null;
        $this->container['dhl_post_ident'] = isset($data['dhl_post_ident']) ? $data['dhl_post_ident'] : null;
        $this->container['forum_username'] = isset($data['forum_username']) ? $data['forum_username'] : null;
        $this->container['forum_group_id'] = isset($data['forum_group_id']) ? $data['forum_group_id'] : null;
        $this->container['single_access'] = isset($data['single_access']) ? $data['single_access'] : null;
        $this->container['contact_person'] = isset($data['contact_person']) ? $data['contact_person'] : null;
        $this->container['marketplace_partner'] = isset($data['marketplace_partner']) ? $data['marketplace_partner'] : null;
        $this->container['valuta'] = isset($data['valuta']) ? $data['valuta'] : null;
        $this->container['discount_days'] = isset($data['discount_days']) ? $data['discount_days'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['time_for_payment_allowed_days'] = isset($data['time_for_payment_allowed_days']) ? $data['time_for_payment_allowed_days'] : null;
        $this->container['sales_representative_contact_id'] = isset($data['sales_representative_contact_id']) ? $data['sales_representative_contact_id'] : null;
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
     * @param int $id The ID of the contact
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id The external ID of the contact
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number The number of the contact (previous customer number)
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets type_id
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param int $type_id The ID of the contact type
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name The first name of the contact
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name The last name of the contact
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name The full name of the contact. A concatenation of first and last name.
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The private email address of the contact
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets secondary_email
     *
     * @return string
     */
    public function getSecondaryEmail()
    {
        return $this->container['secondary_email'];
    }

    /**
     * Sets secondary_email
     *
     * @param string $secondary_email The secondary private email address of the contact
     *
     * @return $this
     */
    public function setSecondaryEmail($secondary_email)
    {
        $this->container['secondary_email'] = $secondary_email;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender The gender of the contact
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

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
     * @param string $title The title of the contact, e.g. a doctorate
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets form_of_address
     *
     * @return string
     */
    public function getFormOfAddress()
    {
        return $this->container['form_of_address'];
    }

    /**
     * Sets form_of_address
     *
     * @param string $form_of_address The form of address for the contact
     *
     * @return $this
     */
    public function setFormOfAddress($form_of_address)
    {
        $this->container['form_of_address'] = $form_of_address;

        return $this;
    }

    /**
     * Gets newsletter_allowance_at
     *
     * @return string
     */
    public function getNewsletterAllowanceAt()
    {
        return $this->container['newsletter_allowance_at'];
    }

    /**
     * Sets newsletter_allowance_at
     *
     * @param string $newsletter_allowance_at The time the contact registered for the newsletter as unix timestamp
     *
     * @return $this
     */
    public function setNewsletterAllowanceAt($newsletter_allowance_at)
    {
        $this->container['newsletter_allowance_at'] = $newsletter_allowance_at;

        return $this;
    }

    /**
     * Gets class_id
     *
     * @return int
     */
    public function getClassId()
    {
        return $this->container['class_id'];
    }

    /**
     * Sets class_id
     *
     * @param int $class_id The ID of the contact class
     *
     * @return $this
     */
    public function setClassId($class_id)
    {
        $this->container['class_id'] = $class_id;

        return $this;
    }

    /**
     * Gets blocked
     *
     * @return int
     */
    public function getBlocked()
    {
        return $this->container['blocked'];
    }

    /**
     * Sets blocked
     *
     * @param int $blocked The blocked status of the contact. Contacts can be blocked for a specific client (store). Possible values: <ul> <li> 0 = not blocked</li> <li> 1 = blocked</li> </ul>
     *
     * @return $this
     */
    public function setBlocked($blocked)
    {
        $this->container['blocked'] = $blocked;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating The rating of the contact. This rating is for internal use only. 5 red stars are for the worst and 5 yellow stars for the best rating. Possible values: <ul> <li>-5 = 5 red stars (worst rating)</li> <li>-4 = 4 red stars</li> <li>-3 = 3 red stars</li> <li>-2 = 2 red stars</li> <li>-1 = 1 red star</li> <li>0 = 5 grey stars, no rating saved for the contact</li> <li>1 = 1 yellow star</li> <li>2 = 2 yellow stars</li> <li>3 = 3 yellow stars</li> <li>4 = 4 yellow stars</li> <li>5 = 5 yellow stars (best rating)</li> </ul>
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets book_account
     *
     * @return string
     */
    public function getBookAccount()
    {
        return $this->container['book_account'];
    }

    /**
     * Sets book_account
     *
     * @param string $book_account The book account (debtor account) of the contact. An additional, separate number that generally corresponds to the customer number or the debtor number in your financial accounting.
     *
     * @return $this
     */
    public function setBookAccount($book_account)
    {
        $this->container['book_account'] = $book_account;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang The language of the contact
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets referrer_id
     *
     * @return BigDecimal
     */
    public function getReferrerId()
    {
        return $this->container['referrer_id'];
    }

    /**
     * Sets referrer_id
     *
     * @param BigDecimal $referrer_id The origin of the contact
     *
     * @return $this
     */
    public function setReferrerId($referrer_id)
    {
        $this->container['referrer_id'] = $referrer_id;

        return $this;
    }

    /**
     * Gets plenty_id
     *
     * @return int
     */
    public function getPlentyId()
    {
        return $this->container['plenty_id'];
    }

    /**
     * Sets plenty_id
     *
     * @param int $plenty_id The client (store) that is assigned to the contact
     *
     * @return $this
     */
    public function setPlentyId($plenty_id)
    {
        $this->container['plenty_id'] = $plenty_id;

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
     * @param int $user_id The owner ID of the contact
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets birthday_at
     *
     * @return string
     */
    public function getBirthdayAt()
    {
        return $this->container['birthday_at'];
    }

    /**
     * Sets birthday_at
     *
     * @param string $birthday_at The date of birth of the contact
     *
     * @return $this
     */
    public function setBirthdayAt($birthday_at)
    {
        $this->container['birthday_at'] = $birthday_at;

        return $this;
    }

    /**
     * Gets last_login_at
     *
     * @return string
     */
    public function getLastLoginAt()
    {
        return $this->container['last_login_at'];
    }

    /**
     * Sets last_login_at
     *
     * @param string $last_login_at The date of the last login of the contact
     *
     * @return $this
     */
    public function setLastLoginAt($last_login_at)
    {
        $this->container['last_login_at'] = $last_login_at;

        return $this;
    }

    /**
     * Gets last_login_at_timestamp
     *
     * @return string
     */
    public function getLastLoginAtTimestamp()
    {
        return $this->container['last_login_at_timestamp'];
    }

    /**
     * Sets last_login_at_timestamp
     *
     * @param string $last_login_at_timestamp The date of the last login of the contact
     *
     * @return $this
     */
    public function setLastLoginAtTimestamp($last_login_at_timestamp)
    {
        $this->container['last_login_at_timestamp'] = $last_login_at_timestamp;

        return $this;
    }

    /**
     * Gets last_order_at
     *
     * @return string
     */
    public function getLastOrderAt()
    {
        return $this->container['last_order_at'];
    }

    /**
     * Sets last_order_at
     *
     * @param string $last_order_at The date of the last order
     *
     * @return $this
     */
    public function setLastOrderAt($last_order_at)
    {
        $this->container['last_order_at'] = $last_order_at;

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
     * @param string $created_at The date the contact was created
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
     * @param string $updated_at The date the contact was last updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets private_phone
     *
     * @return string
     */
    public function getPrivatePhone()
    {
        return $this->container['private_phone'];
    }

    /**
     * Sets private_phone
     *
     * @param string $private_phone The private phone number of the contact
     *
     * @return $this
     */
    public function setPrivatePhone($private_phone)
    {
        $this->container['private_phone'] = $private_phone;

        return $this;
    }

    /**
     * Gets private_fax
     *
     * @return string
     */
    public function getPrivateFax()
    {
        return $this->container['private_fax'];
    }

    /**
     * Sets private_fax
     *
     * @param string $private_fax The private fax number of the contact
     *
     * @return $this
     */
    public function setPrivateFax($private_fax)
    {
        $this->container['private_fax'] = $private_fax;

        return $this;
    }

    /**
     * Gets private_mobile
     *
     * @return string
     */
    public function getPrivateMobile()
    {
        return $this->container['private_mobile'];
    }

    /**
     * Sets private_mobile
     *
     * @param string $private_mobile The private mobile phone number of the contact
     *
     * @return $this
     */
    public function setPrivateMobile($private_mobile)
    {
        $this->container['private_mobile'] = $private_mobile;

        return $this;
    }

    /**
     * Gets ebay_name
     *
     * @return string
     */
    public function getEbayName()
    {
        return $this->container['ebay_name'];
    }

    /**
     * Sets ebay_name
     *
     * @param string $ebay_name The eBay account name of the contact
     *
     * @return $this
     */
    public function setEbayName($ebay_name)
    {
        $this->container['ebay_name'] = $ebay_name;

        return $this;
    }

    /**
     * Gets paypal_email
     *
     * @return string
     */
    public function getPaypalEmail()
    {
        return $this->container['paypal_email'];
    }

    /**
     * Sets paypal_email
     *
     * @param string $paypal_email The email address of the PayPal account of the contact
     *
     * @return $this
     */
    public function setPaypalEmail($paypal_email)
    {
        $this->container['paypal_email'] = $paypal_email;

        return $this;
    }

    /**
     * Gets paypal_payer_id
     *
     * @return string
     */
    public function getPaypalPayerId()
    {
        return $this->container['paypal_payer_id'];
    }

    /**
     * Sets paypal_payer_id
     *
     * @param string $paypal_payer_id The PayPal payer id of the contact
     *
     * @return $this
     */
    public function setPaypalPayerId($paypal_payer_id)
    {
        $this->container['paypal_payer_id'] = $paypal_payer_id;

        return $this;
    }

    /**
     * Gets klarna_personal_id
     *
     * @return string
     */
    public function getKlarnaPersonalId()
    {
        return $this->container['klarna_personal_id'];
    }

    /**
     * Sets klarna_personal_id
     *
     * @param string $klarna_personal_id The Klarna personal id of the contact
     *
     * @return $this
     */
    public function setKlarnaPersonalId($klarna_personal_id)
    {
        $this->container['klarna_personal_id'] = $klarna_personal_id;

        return $this;
    }

    /**
     * Gets dhl_post_ident
     *
     * @return string
     */
    public function getDhlPostIdent()
    {
        return $this->container['dhl_post_ident'];
    }

    /**
     * Sets dhl_post_ident
     *
     * @param string $dhl_post_ident The DHL PostIdent of the contact
     *
     * @return $this
     */
    public function setDhlPostIdent($dhl_post_ident)
    {
        $this->container['dhl_post_ident'] = $dhl_post_ident;

        return $this;
    }

    /**
     * Gets forum_username
     *
     * @return string
     */
    public function getForumUsername()
    {
        return $this->container['forum_username'];
    }

    /**
     * Sets forum_username
     *
     * @param string $forum_username The user name of the contact in the forum
     *
     * @return $this
     */
    public function setForumUsername($forum_username)
    {
        $this->container['forum_username'] = $forum_username;

        return $this;
    }

    /**
     * Gets forum_group_id
     *
     * @return string
     */
    public function getForumGroupId()
    {
        return $this->container['forum_group_id'];
    }

    /**
     * Sets forum_group_id
     *
     * @param string $forum_group_id The ID of the forum group that is assigned to the contact
     *
     * @return $this
     */
    public function setForumGroupId($forum_group_id)
    {
        $this->container['forum_group_id'] = $forum_group_id;

        return $this;
    }

    /**
     * Gets single_access
     *
     * @return string
     */
    public function getSingleAccess()
    {
        return $this->container['single_access'];
    }

    /**
     * Sets single_access
     *
     * @param string $single_access The access type of the contact
     *
     * @return $this
     */
    public function setSingleAccess($single_access)
    {
        $this->container['single_access'] = $single_access;

        return $this;
    }

    /**
     * Gets contact_person
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->container['contact_person'];
    }

    /**
     * Sets contact_person
     *
     * @param string $contact_person The contact person of the contact
     *
     * @return $this
     */
    public function setContactPerson($contact_person)
    {
        $this->container['contact_person'] = $contact_person;

        return $this;
    }

    /**
     * Gets marketplace_partner
     *
     * @return string
     */
    public function getMarketplacePartner()
    {
        return $this->container['marketplace_partner'];
    }

    /**
     * Sets marketplace_partner
     *
     * @param string $marketplace_partner The marketplace partner status of the contact
     *
     * @return $this
     */
    public function setMarketplacePartner($marketplace_partner)
    {
        $this->container['marketplace_partner'] = $marketplace_partner;

        return $this;
    }

    /**
     * Gets valuta
     *
     * @return int
     */
    public function getValuta()
    {
        return $this->container['valuta'];
    }

    /**
     * Sets valuta
     *
     * @param int $valuta The foreign currency of the contact
     *
     * @return $this
     */
    public function setValuta($valuta)
    {
        $this->container['valuta'] = $valuta;

        return $this;
    }

    /**
     * Gets discount_days
     *
     * @return int
     */
    public function getDiscountDays()
    {
        return $this->container['discount_days'];
    }

    /**
     * Sets discount_days
     *
     * @param int $discount_days The early payment discount period in days specified for the account
     *
     * @return $this
     */
    public function setDiscountDays($discount_days)
    {
        $this->container['discount_days'] = $discount_days;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return BigDecimal
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param BigDecimal $discount_percent The early payment discount in percent specified for the account
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets time_for_payment_allowed_days
     *
     * @return int
     */
    public function getTimeForPaymentAllowedDays()
    {
        return $this->container['time_for_payment_allowed_days'];
    }

    /**
     * Sets time_for_payment_allowed_days
     *
     * @param int $time_for_payment_allowed_days The payment due date in days specified for the account
     *
     * @return $this
     */
    public function setTimeForPaymentAllowedDays($time_for_payment_allowed_days)
    {
        $this->container['time_for_payment_allowed_days'] = $time_for_payment_allowed_days;

        return $this;
    }

    /**
     * Gets sales_representative_contact_id
     *
     * @return int
     */
    public function getSalesRepresentativeContactId()
    {
        return $this->container['sales_representative_contact_id'];
    }

    /**
     * Sets sales_representative_contact_id
     *
     * @param int $sales_representative_contact_id The salesRepresentative ID of the contact
     *
     * @return $this
     */
    public function setSalesRepresentativeContactId($sales_representative_contact_id)
    {
        $this->container['sales_representative_contact_id'] = $sales_representative_contact_id;

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
