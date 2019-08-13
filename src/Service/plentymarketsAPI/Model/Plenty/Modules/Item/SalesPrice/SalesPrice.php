<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceName;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceAccount;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceCountry;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceCurrency;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceCustomerClass;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceReferrer;
use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\SalesPrice\SalesPriceOnlineStore;

class SalesPrice
{
    /**
     *  The unique ID of the sales price
     * @var integer
     */
    public $id;

    /**
     *  The position of the sales price
     * @var integer
     */
    public $position;

    /**
     *  The minimum order quantity of the sales price. Sales prices with different minimum quantities can be used to create a quantity based graduation of prices in plentymarkets.
     * @var float
     */
    public $minimumOrderQuantity;

    /**
     *  The price type of the sales price.RRP = Sales price is the recommended retail price (RRP). If the RRP and another sales price are linked with a variation, the RRP will be displayed in the online store as red strike-through text next to the sales price.Special offer = Sales price as a special offer. Special offers are used for markets, e.g. Amazon and Hitmeister.
     * @var string
     */
    public $type;

    /**
     *  Flag that indicates if the sales price is a customer price. Currently, this setting is not in use.
     * @var boolean
     */
    public $isCustomerPrice;

    /**
     *  Flag that indicates if the sales price is displayed automatically in the Sales Prices area of the plentymarkets backend when a new item is created. When false, the sales price can still be added manually when a new item is created.
     * @var boolean
     */
    public $isDisplayedByDefault;

    /**
     *  Flag that indicates if the sales price is converted live in the online store. When true, the default currency price will be converted into the active currencies based on the conversion rates saved in plentymarkets.
     * @var boolean
     */
    public $isLiveConversion;

    /**
     *  The interval of the price. Possible values are: daily, weekly, monthly, quarterly, half-yearly and yearly.
     * @var string
     */
    public $interval;

    /**
     *  names (List)
     * @var SalesPriceName[]
     */
    public $names;

    /**
     *  accounts (List)
     * @var SalesPriceAccount[]
     */
    public $accounts;

    /**
     *  countries (List)
     * @var SalesPriceCountry[]
     */
    public $countries;

    /**
     *  currencies (List)
     * @var SalesPriceCurrency[]
     */
    public $currencies;

    /**
     *  customerClasses (List)
     * @var SalesPriceCustomerClass[]
     */
    public $customerClasses;

    /**
     *  referrer (List)
     * @var SalesPriceReferrer[]
     */
    public $referrers;

    /**
     *  clients (List)
     * @var SalesPriceOnlineStore[]
     */
    public $clients;

}
