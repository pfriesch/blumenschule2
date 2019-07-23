<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Package;

class OrderShippingPackage
{
    /**
     *  The ID of the order shipping package
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;

    /**
     *  The ID of the package
     * @var integer
     */
    public $packageId;

    /**
     *  The weight of the package in grams
     * @var integer
     */
    public $weight;

    /**
     *  The package number
     * @var string
     */
    public $packageNumber;

    /**
     *  The path to the label
     * @var string
     */
    public $labelPath;

    /**
     *  The base64 encoded label
     * @var string
     */
    public $labelBase64;

    /**
     *  The base64 encoded export label
     * @var string
     */
    public $exportLabelBase64;

    /**
     *  The type of the package. The following types are valid:
     *
     * 0: unpacked
     * 1: Bale
     * 2: Dispenser
     * 3: Coil
     * 4: Roll pallet
     * 5: Colli
     * 6: Container
     * 7: Bucket
     * 8: Cask
     * 9: Bottles
     * 10: European flat pallet
     * 11: Structural frame
     * 12: Gas cylinder
     * 13: Pallet cage
     * 14: Hobbock
     * 15: Half pallet
     * 16: Pallet of food items
     * 17: Wooden coaster
     * 18: IBC container
     * 19: Pitcher
     * 20: Wicker bottle
     * 21: Case
     * 22: Canister
     * 23: Customer pallet
     * 24: Cardboard box
     * 25: Composite packaging
     * 26: Package
     * 27: Ring
     * 28: Role
     * 29: Sack
     * 30: units
     * 31: Tank
     * 32: Drum
     * 34: Crate
     * 35: Quarter pallet
     * 36: Other pallets
     * 37: Bin
     * 38: One-way pallet
     * 39: Foil bag
     *
     * @var integer
     */
    public $packageType;

    /**
     *  The volume of the package
     * @var float
     */
    public $volume;

    /**
     *  The id of the pallet of which the package belong to
     * @var integer
     */
    public $palletId;

    /**
     *  Flag to say if the package is editable or not
     * @var boolean
     */
    public $isClosed;

}
