<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Warehouse;

class WarehouseLocationLevel
{
    /**
     *  The ID of the warehouse location level
     * @var integer
     */
    public $id;
    
    /**
     *  The parent ID of the warehouse location level
     * @var integer
     */
    public $parentId;
    
    /**
     *  The warehouse location dimension id of the warehouse location level
     * @var integer
     */
    public $dimensionId;
    
    /**
     *  The position of the warehouse location level
     * @var integer
     */
    public $position;
    
    /**
     *  The name of the warehouse location level
     * @var string
     */
    public $name;
    
    /**
     *  The type of the warehouse location ['small','medium','large','europallet']
     * @var string
     */
    public $type;
    
    /**
     *  The complete path name from the level
     * @var string
     */
    public $pathName;
    
}
