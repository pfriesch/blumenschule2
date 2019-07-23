<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyMarket
{
    /**
     *  The ID of the property market
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the property
     * @var integer
     */
    public $propertyId;
    
    /**
     *  The ID of the referrer
     * @var float
     */
    public $referrerId;
    
    /**
     *  The ID of the sub referrer
     * @var integer
     */
    public $referrerSubId;
    
    /**
     *  The value of the property market
     * @var string
     */
    public $value;
    
}
