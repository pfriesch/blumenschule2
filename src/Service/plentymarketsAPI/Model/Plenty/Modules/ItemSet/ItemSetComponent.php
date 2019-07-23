<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ItemSet;

class ItemSetComponent
{
    /**
     *  The item set component ID. The ID must be unique.
     * @var integer
     */
    public $id;

    /**
     *  The item ID of the item set. The ID must be unique.
     * @var integer
     */
    public $setId;

    /**
     *  The item ID of the set component
     * @var integer
     */
    public $itemId;

    /**
     *  The number of copies of the component that are part of the set. Default quantity is 1.
     * @var integer
     */
    public $quantity;

    /**
     *  Flag that indicates if enough stock is available for at least one variation of the component to cover the specified quantity.
     * @var boolean
     */
    public $isPurchasable;

}
