<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing;

class Listing
{
    /**
     *  The ID of the listing.
     * @var integer
     */
    public $id;

    /**
     *  The ID of the item.
     * @var integer
     */
    public $itemId;

    /**
     *  The ID of the listing type. Possible types are:
     *
     *     1 = Auction
     *     2 = Fixed
     *     3 = Shop item
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The ID of the listing stock dependence. Possible stock dependence types are:
     *
     *     1 = Unlimited with sync
     *     2 = Limited with reservation
     *     3 = Limited without reservation
     *     4 = Unlimited without sync
     *
     * @var integer
     */
    public $stockDependenceTypeId;

    /**
     *  The ID of the unit combination.
     * @var integer
     */
    public $unitCombinationId;

}
