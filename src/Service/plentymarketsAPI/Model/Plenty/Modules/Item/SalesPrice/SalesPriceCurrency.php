<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceCurrency
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The ISO code of the <a href="https://developers.plentymarkets.com/rest-doc/introduction#currencies" target="_blank">currency</a>; -1 = all currencies.
     * @var string
     */
    public $currency;

    /**
     *  The time the currency was activated.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the relationship between currency and sales price was last updated.
     * @var string
     */
    public $updatedAt;

}
