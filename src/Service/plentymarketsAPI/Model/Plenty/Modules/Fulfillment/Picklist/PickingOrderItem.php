<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Fulfillment\Picklist;

class PickingOrderItem
{
    /**
     *  
     * @var integer
     */
    public $id;
    
    /**
     *  
     * @var integer
     */
    public $pickingOrderId;
    
    /**
     *  
     * @var integer
     */
    public $orderItemId;
    
    /**
     *  
     * @var string
     */
    public $processState;
    
    /**
     *  
     * @var string
     */
    public $processDate;
    
    /**
     *  
     * @var integer
     */
    public $processUserId;
    
    /**
     *  
     * @var string
     */
    public $comment;
    
    /**
     *  
     * @var float
     */
    public $quantity;
    
    /**
     *  
     * @var integer
     */
    public $itemId;
    
    /**
     *  
     * @var integer
     */
    public $holdingArea;
    
    /**
     *  
     * @var integer
     */
    public $warehouseId;
    
    /**
     *  
     * @var string
     */
    public $orderIdList;
    
}
