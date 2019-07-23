<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\SerialNumber;

class OrderSerialNumber
{
    /**
     *  The ID of the serial number
     * @var integer
     */
    public $serialNumberId;
    
    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;
    
    /**
     *  The ID of the order item
     * @var integer
     */
    public $orderItemId;
    
    /**
     *  The serial number
     * @var string
     */
    public $serialNumber;
    
}
