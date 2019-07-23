<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse;

class Warehouse
{
    /**
     *  The id of the warehouse
     * @var integer
     */
    public $id;

    /**
     *  The name of the warehouse
     * @var string
     */
    public $name;

    /**
     *  A note for this warehouse
     * @var string
     */
    public $note;

    /**
     *  The id of the warehouse type. The following types are available:
     *
     *     0 = Sales warehouse
     *     1 = Repair warehouse
     *     4 = Storage warehouse
     *     5 = Transit warehouse
     *     6 = Distribution warehouse
     *     7 = Other
     *
     * @var integer
     */
    public $typeId;

    /**
     *  Displayed availability of a variation if stock is available
     * @var integer
     */
    public $onStockAvailability;

    /**
     *  Displayed availability of a variation if no stock is available
     * @var integer
     */
    public $outOfStockAvailability;

    /**
     *  Flag that indicates if for this warehouse orders are split by shipping profiles or not. True = Orders are split by shipping profiles False = Orders will not be split by shipping profiles
     * @var boolean
     */
    public $splitByShippingProfile;

    /**
     *  The storage location type. The following types are available: none smallmedium large europallet
     * @var string
     */
    public $storageLocationType;

    /**
     *  The zone that the storage location is in
     * @var integer
     */
    public $storageLocationZone;

    /**
     *  The id of the associated repair warehouse
     * @var integer
     */
    public $repairWarehouseId;

    /**
     *  Flag that indicates if the inventory mode for this warehouse is active or not. True = active False = inactive
     * @var boolean
     */
    public $isInventoryModeActive;

    /**
     *  The id of the logistics type of the warehouse. The logistics type states which service provider fulfills the storage and shipping. The following logistics types are available:
     *
     * own
     * amazon
     * dhlFulfillment
     *
     * @var string
     */
    public $logisticsType;

    /**
     *  The updated at timestamp of the warehouse
     * @var string
     */
    public $updatedAt;

    /**
     *  The created at timestamp of the warehouse
     * @var string
     */
    public $createdAt;

}
