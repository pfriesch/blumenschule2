<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Accounting;

class RevenueAccountCountryConfiguration
{
    /**
     *  The ID of the country that the account configuration belongs to
     * @var integer
     */
    public $countryId;

    /**
     *  The ID configuration of the revenue account that these accounts are for.
     * @var integer
     */
    public $revenueAccountLocationId;

}
