<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Manufacturer;

class Manufacturer
{
    /**
     *  The unique ID of the manufacturer.
     * @var integer
     */
    public $id;

    /**
     *  The name of the manufacturer
     * @var string
     */
    public $name;

    /**
     *  The external name of the manufacturer. The external name is used for the item export to external markets. If no external name is saved, the Name will be used. The external name will also be transferred to FINDOLOGIC and will be indexed for item searches.
     * @var string
     */
    public $externalName;

    /**
     *  The URL of the manufacturer's logo
     * @var string
     */
    public $logo;

    /**
     *  The URL of the manufacturer's website
     * @var string
     */
    public $url;

    /**
     *  The street of the manufacturer's address
     * @var string
     */
    public $street;

    /**
     *  The house number of the manufacturer's address
     * @var string
     */
    public $houseNo;

    /**
     *  The postal code of the manufacturer's address
     * @var string
     */
    public $postcode;

    /**
     *  The town of the manufacturer's address
     * @var string
     */
    public $town;

    /**
     *  The phone number of the manufacturer
     * @var string
     */
    public $phoneNumber;

    /**
     *  The fax number of the manufacturer
     * @var string
     */
    public $faxNumber;

    /**
     *  The email address of the manufacturer
     * @var string
     */
    public $email;

    /**
     *  The ID of the <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries" target="_blank">country</a> in which the manufacturer is based; 0 = unknown.
     * @var integer
     */
    public $countryId;

    /**
     *  The manufacturer's ID on the market Pixmania
     * @var integer
     */
    public $pixmaniaBrandId;

    /**
     *  The manufacturer's ID on the market Neckermann Austria, Enterprise version
     * @var integer
     */
    public $neckermannAtEpBrandId;

    /**
     *  The manufacturer's ID on the market La Redoute
     * @var integer
     */
    public $laRedouteBrandId;

    /**
     *  The position of the manufacturer
     * @var integer
     */
    public $position;

    /**
     *  Internal comments about the manufacturer (optional)
     * @var string
     */
    public $comment;

    /**
     *  The time the manufacturer information was last updated.
     * @var string
     */
    public $updatedAt;

}
