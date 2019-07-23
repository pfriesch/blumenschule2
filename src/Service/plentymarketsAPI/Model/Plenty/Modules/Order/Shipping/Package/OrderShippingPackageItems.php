<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Package;

class OrderShippingPackageItems
{
    /**
     *  The ID of the order shipping package item. Primary key auto-increment
     * @var integer
     */
    public $id;

    /**
     *  The ID of the package (id column from plenty_package_type2order)
     * @var integer
     */
    public $packageId;

    /**
     *  The ID of the item (plenty_item_variation_base_item_id column from plenty_item_variation_base)
     * @var integer
     */
    public $itemId;

    /**
     *  The ID of the variation (plenty_item_variation_base_id column from plenty_item_variation_base)
     * @var integer
     */
    public $variationId;

    /**
     *  The quantity of the item in the package
     * @var float
     */
    public $itemQuantity;

}
