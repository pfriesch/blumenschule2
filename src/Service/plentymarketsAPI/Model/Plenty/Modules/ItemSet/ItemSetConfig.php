<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ItemSet;

class ItemSetConfig
{
    /**
     *  set id The item ID of the item set. The ID must be unique.
     * @var integer
     */
    public $setId;
    
    /**
     *  The discount in percent to be subtracted from the sum of the prices of the selected set components.
     * @var float
     */
    public $rebate;
    
    /**
     *  The minimum price of the sum of all components; read only
     * @var float
     */
    public $minPrice;
    
    /**
     *  the maximum price of the sum of all components; read only
     * @var float
     */
    public $maxPrice;
    
    /**
     *  Flag that indicates if all components of the set have sufficient stock. Purchasability of a set depends on the component with the lowest stock.
     * @var integer
     */
    public $isPurchasable;
    
}
