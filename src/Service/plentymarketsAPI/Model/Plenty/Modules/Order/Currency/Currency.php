<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Currency;

class Currency
{
    /**
     *  The ISO 4217 code and id of the currency.
     * @var string
     */
    public $currency;
    
    /**
     *  The html code (entity) for the currency.
     * @var string
     */
    public $htmlCode;
    
    /**
     *  The unicode symbol for the currency. If no unicode symbol exists, the html code will be used.
     * @var string
     */
    public $unicodeSign;
    
    /**
     *  Flag that indicates if the currency is active in the system or not. Currencies are activated per sales price.
     * @var boolean
     */
    public $isActive;
    
    /**
     *  Flag that indicates if this currency can be deleted or not. False = Currency cannot be deletedTrue = Currency can be deleted
     * @var boolean
     */
    public $isErasable;
    
    /**
     *  The current exchange rate for this currency.
     * @var float
     */
    public $exchangeRate;
    
}
