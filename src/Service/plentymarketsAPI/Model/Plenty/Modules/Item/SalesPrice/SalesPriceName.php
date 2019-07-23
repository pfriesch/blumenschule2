<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

class SalesPriceName
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $salesPriceId;

    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#languages" target="_blank">language code</a> of the sales price name
     * @var string
     */
    public $lang;

    /**
     *  The internal name of the sales price. The internal name is used in the plentymarkets back end only.
     * @var string
     */
    public $nameInternal;

    /**
     *  The external name of the sales price. The external name is displayed in the online store and as such is visible for customers.
     * @var string
     */
    public $nameExternal;

    /**
     *  The time the name was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the name was last updated.
     * @var string
     */
    public $updatedAt;

}
