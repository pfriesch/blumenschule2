<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

class Rack
{
    /**
     *  The id of the rack.
     * @var integer
     */
    public $id;

    /**
     *  The name of the rack.
     * @var integer
     */
    public $name;

    /**
     *  The position of the rack.
     * @var integer
     */
    public $position;

    /**
     *  The id of the warehouse the rack belongs to.
     * @var integer
     */
    public $warehouseId;

    /**
     *  The zone of the rack. Numbers between 1 and 20 are valid.
     * @var integer
     */
    public $zone;

}
