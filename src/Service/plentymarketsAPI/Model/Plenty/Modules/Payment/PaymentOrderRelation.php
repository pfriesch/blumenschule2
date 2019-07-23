<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Payment;

class PaymentOrderRelation
{
    /**
     *  The ID of the payment order relation
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the payment
     * @var integer
     */
    public $paymentId;
    
    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;
    
    /**
     *  The time the payment order relation was assigned
     * @var string
     */
    public $assignedAt;
    
}
