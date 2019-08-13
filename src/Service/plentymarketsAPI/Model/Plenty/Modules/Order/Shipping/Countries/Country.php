<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Countries;

class Country
{
    /**
     *  The country id.
     * @var integer
     */
    public $id;

    /**
     *  The system country name.
     * @var string
     */
    public $name;

    /**
     *  The shipping destination (region) id.
     * @var integer
     */
    public $shippingDestinationId;

    /**
     *  The active flag (1: active, 2: backend active, 3: supplier active
     * @var integer
     */
    public $active;

    /**
     *  The id of the main warehouse in this country.
     * @var integer
     */
    public $storehouseId;

    /**
     *  The ISO 3166 ALPHA-2 code of the country.
     * @var string
     */
    public $isoCode2;

    /**
     *  The ISO 3166 ALPHA-3 code of the country.
     * @var string
     */
    public $isoCode3;

    /**
     *  The main language spoken in the country.
     * @var string
     */
    public $lang;

    /**
     *  Flag that states if a country state is mandatory for the country.
     * @var boolean
     */
    public $isCountryStateMandatory;

}
