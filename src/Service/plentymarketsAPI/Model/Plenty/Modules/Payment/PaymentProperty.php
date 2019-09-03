<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Payment;

class PaymentProperty
{
    /**
     *  The ID of the payment property
     * @var integer
     */
    public $id;

    /**
     *  The ID of the payment
     * @var integer
     */
    public $paymentId;

    /**
     *  The ID of the property type. The following property types are availabel:
     *
     *     Transaction ID = 1
     *     Reference ID = 2
     *     Booking text = 3
     *     Transaction password = 4
     *     Transaction code = 5
     *     Authorisation ID = 6
     *     Capture ID = 7
     *     Refund ID = 8
     *     Credit note ID = 9
     *     Order reference = 10
     *     Name of the sender = 11
     *     Email of the sender = 12
     *     The sender's sort code = 13
     *     The sender's bank name = 14
     *     The sender's bank account number = 15
     *     The holder of the bank account = 16
     *     The country of the sender's bank account = 17
     *     The sender's IBAN = 18
     *     The sender's BIC = 19
     *     Name of the recipient = 20
     *     The recipient's bank account = 21
     *     Reference text of the payment = 22
     *     Payment origin = 23
     *     Shipping address ID = 24
     *     Invoice address ID = 25
     *     Item buyer = 26
     *     Item number = 27
     *     Item transaction ID = 28
     *     External transaction type = 29
     *     External transaction status = 30
     *     The receiver's IBAN = 31
     *     The receiver's BIC = 32
     *     Transaction fee = 33
     *     Transaction lifespan = 34
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The value of the property type
     * @var string
     */
    public $value;

}
