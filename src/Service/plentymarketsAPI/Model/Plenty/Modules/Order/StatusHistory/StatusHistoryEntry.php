<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\StatusHistory;

class StatusHistoryEntry
{
    /**
     *  The ID of the status history entry
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;
    
    /**
     *  The ID of the status
     * @var float
     */
    public $statusId;
    
    /**
     *  The date when the entry was created
     * @var string
     */
    public $createdAt;
    
    /**
     *  The ID of the user
     * @var integer
     */
    public $userId;
    
    /**
     *  The information text of the procedure that created the entry
     * @var string
     */
    public $procedureText;
    
}
