<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Date;

class OrderItemDate
{
    /**
     *  The ID of the order date
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the order item that the date belongs to
     * @var integer
     */
    public $orderItemId;
    
    /**
     *  The ID of the date type. The following types are available:
     * 
     * Start date = 9
     * End date = 10
     * Estimated delivery date = 11
     * 
     * @var integer
     */
    public $typeId;
    
    /**
     *  The date when the date was created
     * @var string
     */
    public $createdAt;
    
    /**
     *  The date when the date was last updated
     * @var string
     */
    public $updatedAt;
    
}
