<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\ItemShippingProfiles;

class ItemShippingProfiles
{
    /**
     *  The unique ID of the link between item and shipping profile
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the item
     * @var integer
     */
    public $itemId;

    /**
     *  The unique ID of the shipping profile
     * @var integer
     */
    public $profileId;

}
