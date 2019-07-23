<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Warehouse;

class WarehouseLocation
{
    /**
     *  The ID of the warehouse location
     * @var integer
     */
    public $id;
    
    /**
     *  The level ID of the warehouse location
     * @var integer
     */
    public $levelId;
    
    /**
     *  The label of the warehouse location
     * @var string
     */
    public $label;
    
    /**
     *  The purpose key of the warehouse location
     * @var string
     */
    public $purposeKey;
    
    /**
     *  The status key of the warehouse location
     * @var string
     */
    public $statusKey;
    
    /**
     *  The position of the warehouse location
     * @var integer
     */
    public $position;
    
    /**
     *  The label with level path name
     * @var string
     */
    public $fullLabel;
    
    /**
     *  The type of the warehouse location (array values: 'small','medium','large','europallet')
     * @var string
     */
    public $type;
    
    /**
     *  The notes of the warehouse location
     * @var string
     */
    public $notes;
    
}
