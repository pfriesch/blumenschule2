<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class Address
{
    /**
     *  The ID of the address
     * @var integer
     */
    public $id;
    
    /**
     *  The gender ("female", "male" or "diverse")
     * @var string
     */
    public $gender;
    
    /**
     *  The name 1 field (default: company name)
     * @var string
     */
    public $name1;
    
    /**
     *  The name 2 field (default: first name)
     * @var string
     */
    public $name2;
    
    /**
     *  The name 3 field (default: last name)
     * @var string
     */
    public $name3;
    
    /**
     *  The name 4 field (default: c/o)
     * @var string
     */
    public $name4;
    
    /**
     *  The company name (read only)
     * @var string
     */
    public $companyName;
    
    /**
     *  The first name (read only)
     * @var string
     */
    public $firstName;
    
    /**
     *  The last name (read only)
     * @var string
     */
    public $lastName;
    
    /**
     *  The c/o (read only)
     * @var string
     */
    public $careOf;
    
    /**
     *  The address 1 field (street|PACKSTATION|POSTFILIALE)
     * @var string
     */
    public $address1;
    
    /**
     *  The address 2 field (house no|packstation id)
     * @var string
     */
    public $address2;
    
    /**
     *  The address 3 field (additional)
     * @var string
     */
    public $address3;
    
    /**
     *  The address 4 field is currently undefined and can be freely used.
     * @var string
     */
    public $address4;
    
    /**
     *  The street (read only)
     * @var string
     */
    public $street;
    
    /**
     *  The house number (read only)
     * @var string
     */
    public $houseNumber;
    
    /**
     *  The additional address information (read only)
     * @var string
     */
    public $additional;
    
    /**
     *  The postcode
     * @var string
     */
    public $postalCode;
    
    /**
     *  The town
     * @var string
     */
    public $town;
    
    /**
     *  The ID of the country
     * @var integer
     */
    public $countryId;
    
    /**
     *  The ID of the state
     * @var integer
     */
    public $stateId;
    
    /**
     *  Flag that indicates if the data record is read only
     * @var boolean
     */
    public $readOnly;
    
    /**
     *  The session ID that was used when the address was created
     * @var string
     */
    public $sessionId;
    
    /**
     *  The time the address was checked as unix timestamp
     * @var string
     */
    public $checkedAt;
    
    /**
     *  The time the address was created as unix timestamp
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the address was last updated as unix timestamp
     * @var string
     */
    public $updatedAt;
    
    /**
     *  The taxIdNumber option
     * @var string
     */
    public $taxIdNumber;
    
    /**
     *  The title option
     * @var string
     */
    public $title;
    
    /**
     *  The externalId option
     * @var string
     */
    public $externalId;
    
    /**
     *  The entryCertificate option
     * @var boolean
     */
    public $entryCertificate;
    
    /**
     *  The phone option
     * @var string
     */
    public $phone;
    
    /**
     *  The email option
     * @var string
     */
    public $email;
    
    /**
     *  The PostIdent option
     * @var string
     */
    public $postident;
    
    /**
     *  The age rating option
     * @var string
     */
    public $fsk;
    
    /**
     *  The birthday option
     * @var string
     */
    public $birthday;
    
    /**
     *  The personal number option
     * @var string
     */
    public $personalNumber;
    
    /**
     *  The packstation number
     * @var string
     */
    public $packstationNo;
    
    /**
     *  Flag that indicates if the address is a packstation
     * @var boolean
     */
    public $isPackstation;
    
    /**
     *  Flag that indicates if the address is a postfiliale (post office)
     * @var boolean
     */
    public $isPostfiliale;
    
}
