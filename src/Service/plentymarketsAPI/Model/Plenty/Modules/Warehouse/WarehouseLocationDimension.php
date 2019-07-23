<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Warehouse;

class WarehouseLocationDimension
{
    /**
     *  The ID of the warehouse location dimension
     * @var integer
     */
    public $id;
    
    /**
     *  The parent ID of the warehouse location dimension
     * @var integer
     */
    public $parentId;
    
    /**
     *  The warehouse ID of the warehouse location dimension
     * @var integer
     */
    public $warehouseId;
    
    /**
     *  The level of the warehouse location dimension
     * @var integer
     */
    public $level;
    
    /**
     *  The name of the warehouse location dimension
     * @var string
     */
    public $name;
    
    /**
     *  The shortcut of the warehouse location dimension
     * @var string
     */
    public $shortcut;
    
    /**
     *  The separator of the warehouse location dimension
     * @var string
     */
    public $separator;
    
    /**
     *  If true, the dimension prefix will be shown in the storage location name
     * @var integer
     */
    public $displayInName;
    
    /**
     *  Active flag for pickup path of the warehouse location dimension
     * @var integer
     */
    public $isActiveForPickupPath;
    
}
