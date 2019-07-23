<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\ItemSpecific;

class ListingMarketItemSpecific
{
    /**
     *  The ID of the item specific.
     * @var integer
     */
    public $id;

    /**
     *  The LMID which belongs to the item specific ID.
     * @var integer
     */
    public $listingMarketId;

    /**
     *  The name of the item specific.
     * @var string
     */
    public $name;

    /**
     *  The value of the item specific.
     * @var string
     */
    public $value;

}
