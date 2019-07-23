<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting\Vat;

class Vat
{
    /**
     *  The ID of the VAT configuration. A VAT configuration includes 4 VAT rates
     * @var integer
     */
    public $id;

    /**
     *  The ID of the country that the VAT configuration belongs to
     * @var integer
     */
    public $countryId;

    /**
     *  The tax id number of VAT configuration.
     * @var string
     */
    public $taxIdNumber;

    /**
     *  The date when the VAT configuration went into effect
     * @var string
     */
    public $startedAt;

    /**
     *  The date when the VAT configuration should not be used any more
     * @var string
     */
    public $invalidFrom;

    /**
     *  The ID of the location
     * @var integer
     */
    public $locationId;

    /**
     *  Specifies the tax rate that is used, when the margin scheme is applied. Available values: 'none', 'vat1', 'vat2', 'vat3', 'vat4'.
     * @var string
     */
    public $marginScheme;

    /**
     *  Flag that indicates if the VAT configuration is used only applied to digital goods or not. True= The VAT set is only applied to digital goods. False = The VAT set is applied to all types of goods.
     * @var boolean
     */
    public $isRestrictedToDigitalItems;

    /**
     *  Flag that indicates if the VAT configuration is the standard VAT configuration for the location
     * @var boolean
     */
    public $isStandard;

    /**
     *  The date at which the VAT configuration was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the VAT configuration was last updated.
     * @var string
     */
    public $updatedAt;

}
