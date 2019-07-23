<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemCrossSelling;

class ItemCrossSelling
{
    /**
     *  The unique ID of the item to which cross-selling items are linked
     * @var integer
     */
    public $itemId;
    
    /**
     *  The unique ID of the cross-selling item that is linked to the item
     * @var integer
     */
    public $crossItemId;
    
    /**
     *  The cross-selling relationship between item and cross-selling item. Possible values:Accessory = The cross-selling item is an accessory of the item.ReplacementPart = The cross-selling item is a replacement part for the item.Similar = The cross-selling item is similar to the item.Bundle = The cross-selling item is suitable to be sold as a bundle with the item.
     * @var string
     */
    public $relationship;
    
    /**
     *  Flag that indicates if the cross-selling link was generated automatically.
     * @var boolean
     */
    public $isDynamic;
    
}
