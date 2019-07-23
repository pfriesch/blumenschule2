<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationWarehouse;

class VariationWarehouse
{
    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the warehouse
     * @var integer
     */
    public $warehouseId;

    /**
     *  The unique ID of the warehouse zone
     * @var integer
     */
    public $warehouseZoneId;

    /**
     *  The storage location type of the warehouse
     * @var string
     */
    public $storageLocationType;

    /**
     *  The reorder level for the variation in this warehouse
     * @var integer
     */
    public $reorderLevel;

    /**
     *  The maximum stock for the variation in this warehouse
     * @var integer
     */
    public $maximumStock;

    /**
     *  The stock turnover in days for the variation in this warehouse
     * @var integer
     */
    public $stockTurnoverInDays;

    /**
     *  The storage location of the variation in this warehouse
     * @var integer
     */
    public $storageLocation;

    /**
     *  The stock buffer for the variation in this warehouse
     * @var integer
     */
    public $stockBuffer;

    /**
     *  Is for warehouse and variation stock batch active
     * @var boolean
     */
    public $isBatch;

    /**
     *  Is for warehouse and variation stock best before date active
     * @var boolean
     */
    public $isBestBeforeDate;

    /**
     *  The time the warehouse data was last updated.
     * @var string
     */
    public $lastUpdateTimestamp;

    /**
     *  The time the warehouse data was created.
     * @var string
     */
    public $createdAt;

}
