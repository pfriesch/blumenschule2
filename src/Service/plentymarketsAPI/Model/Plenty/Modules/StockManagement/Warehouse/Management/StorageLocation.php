<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

class StorageLocation
{
    /**
     *  The id of the storage location.
     * @var integer
     */
    public $id;

    /**
     *  The id of the warehouse the storage location belongs to.
     * @var integer
     */
    public $warehouseId;

    /**
     *  The id of the rack the storage location belongs to.
     * @var integer
     */
    public $rackId;

    /**
     *  The id of the shelf the storage location belongs to.
     * @var integer
     */
    public $shelfId;

    /**
     *  The name of the storage location.
     * @var string
     */
    public $name;

    /**
     *  The type of the storage location. Valid strings are: 'small', 'medium', 'large', 'europallet'.
     * @var integer
     */
    public $type;

    /**
     *  The position of the storage location.
     * @var integer
     */
    public $position;

}
