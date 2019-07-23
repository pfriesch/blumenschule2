<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationStock;

class VariationStock
{
    /**
     *  The ID of the item
     * @var integer
     */
    public $itemId;
    
    /**
     *  The ID of the variation
     * @var integer
     */
    public $variationId;
    
    /**
     *  The ID of the warehouse
     * @var integer
     */
    public $warehouseId;
    
    /**
     *  The quantity of a variation that is reserved for listings
     * @var float
     */
    public $reservedListing;
    
    /**
     *  The quantity of a variation that is reserved for item bundles
     * @var float
     */
    public $reservedBundles;
    
    /**
     *  The value of goods based on the physical stock
     * @var float
     */
    public $valueOfGoods;
    
    /**
     *  The purchase price of the variation stock
     * @var float
     */
    public $purchasePrice;
    
    /**
     *  The physical stock of the variation stock
     * @var float
     */
    public $physicalStock;
    
    /**
     *  The reserved stock of the variation stock
     * @var float
     */
    public $reservedStock;
    
    /**
     *  The net stock is the stock that can still be sold
     * @var float
     */
    public $netStock;
    
    /**
     *  The quantity of a variation that triggers a reorder
     * @var float
     */
    public $reorderLevel;
    
    /**
     *  The quantity of a variation that is required to reach the reorder level
     * @var float
     */
    public $deltaReorderLevel;
    
}
