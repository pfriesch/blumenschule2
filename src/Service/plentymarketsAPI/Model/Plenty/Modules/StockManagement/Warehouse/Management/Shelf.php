<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\StockManagement\Warehouse\Management;

class Shelf
{
    /**
     *  The id of the shelf.
     * @var integer
     */
    public $id;

    /**
     *  The id of the rack the shelf belongs to.
     * @var integer
     */
    public $rackId;

    /**
     *  The name of the shelf.
     * @var string
     */
    public $name;

    /**
     *  The level of the shelf. Numbers between 1 and 25 are valid.
     * @var integer
     */
    public $level;

}
