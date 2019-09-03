<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Account\Address;

class Address
{
    /**
     *  The ID of the address
     * @var integer
     */
    public $id;

    /**
     *  The gender ("female", "male" or "diverse")
     * @var string|null
     */
    public $gender;

    /**
     *  The name 1 field (default: company name)
     * @var string|null
     */
    public $name1;

    /**
     *  The name 2 field (default: first name)
     * @var string|null
     */
    public $name2;

    /**
     *  The name 3 field (default: last name)
     * @var string|null
     */
    public $name3;

    /**
     *  The name 4 field (default: c/o)
     * @var string|null
     */
    public $name4;

    /**
     *  The company name (read only)
     * @var string|null
     */
    public $companyName;

    /**
     *  The first name (read only)
     * @var string|null
     */
    public $firstName;

    /**
     *  The last name (read only)
     * @var string|null
     */
    public $lastName;

    /**
     *  The c/o (read only)
     * @var string|null
     */
    public $careOf;

    /**
     *  The address 1 field (street|PACKSTATION|POSTFILIALE)
     * @var string|null
     */
    public $address1;

    /**
     *  The address 2 field (house no|packstation id)
     * @var string|null
     */
    public $address2;

    /**
     *  The address 3 field (additional)
     * @var string|null
     */
    public $address3;

    /**
     *  The address 4 field is currently undefined and can be freely used.
     * @var string|null
     */
    public $address4;

    /**
     *  The street (read only)
     * @var string|null
     */
    public $street;

    /**
     *  The house number (read only)
     * @var string|null
     */
    public $houseNumber;

    /**
     *  The additional address information (read only)
     * @var string|null
     */
    public $additional;

    /**
     *  The postcode
     * @var string|null
     */
    public $postalCode;

    /**
     *  The town
     * @var string|null
     */
    public $town;

    /**
     *  The ID of the country
     * @var integer|null
     */
    public $countryId;

    /**
     *  The ID of the state
     * @var integer|null
     */
    public $stateId;

    /**
     *  Flag that indicates if the data record is read only
     * @var boolean|null
     */
    public $readOnly;

    /**
     *  The session ID that was used when the address was created
     * @var string|null
     */
    public $sessionId;

    /**
     *  The time the address was checked as unix timestamp
     * @var string|null
     */
    public $checkedAt;

    /**
     *  The time the address was created as unix timestamp
     * @var string|null
     */
    public $createdAt;

    /**
     *  The time the address was last updated as unix timestamp
     * @var string|null
     */
    public $updatedAt;

    /**
     *  The taxIdNumber option
     * @var string|null
     */
    public $taxIdNumber;

    /**
     *  The title option
     * @var string|null
     */
    public $title;

    /**
     *  The externalId option
     * @var string|null
     */
    public $externalId;

    /**
     *  The entryCertificate option
     * @var boolean|null
     */
    public $entryCertificate;

    /**
     *  The phone option
     * @var string|null
     */
    public $phone;

    /**
     *  The email option
     * @var string|null
     */
    public $email;

    /**
     *  The PostIdent option
     * @var string|null
     */
    public $postident;

    /**
     *  The age rating option
     * @var string|null
     */
    public $fsk;

    /**
     *  The birthday option
     * @var string|null
     */
    public $birthday;

    /**
     *  The personal number option
     * @var string|null
     */
    public $personalNumber;

    /**
     *  The packstation number
     * @var string|null
     */
    public $packstationNo;

    /**
     *  Flag that indicates if the address is a packstation
     * @var boolean|null
     */
    public $isPackstation;

    /**
     *  Flag that indicates if the address is a postfiliale (post office)
     * @var boolean|null
     */
    public $isPostfiliale;

}
