<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceCountry
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The unique ID of the <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries"  target="_blank">country</a>
     * @var integer
     */
    public $countryId;

    /**
     *  The time the country was activated.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the relationship between country and sales price was last updated.
     * @var string
     */
    public $updatedAt;

}
