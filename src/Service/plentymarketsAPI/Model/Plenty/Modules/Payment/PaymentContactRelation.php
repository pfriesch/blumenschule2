<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Payment;

class PaymentContactRelation
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
     *  The ID of the contact
     * @var integer
     */
    public $contactId;

    /**
     *  The time the payment contact relation was assigned
     * @var string
     */
    public $assignedAt;

}
