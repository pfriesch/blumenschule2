<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Payment;

class Payment
{
    /**
     *  The ID of the payment
     * @var integer
     */
    public $id;

    /**
     *  The amount of the payment
     * @var float
     */
    public $amount;

    /**
     *  The exchange rate. Exchange rates are used if the default currency saved in plentymarkets differs from the currency of the order.
     * @var float
     */
    public $exchangeRatio;

    /**
     *  The ID of the parent payment
     * @var integer
     */
    public $parentId;

    /**
     *  A deleted payment. Deleted payments have the value 1 and are not displayed in the plentymarkets back end.
     * @var integer
     */
    public $deleted;

    /**
     *  An unassigned payment. Unassigned payments have the value 1.
     * @var integer
     */
    public $unaccountable;

    /**
     *  The currency of the payment in ISO 4217 code.
     * @var string
     */
    public $currency;

    /**
     *  The payment type. Available types are credit and debit.
     * @var string
     */
    public $type;

    /**
     *  The hash code of the payment. The hash code consists of 32 characters and is automatically generated.
     * @var string
     */
    public $hash;

    /**
     *  The origin of the payment. The following origins are available:
     *
     *     Undefined = 0
     *     System = 1
     *     Manually = 2
     *     SOAP = 3
     *     Import = 4
     *     Split payment = 5
     *     Plugin = 6
     *     POS = 7
     *
     * @var integer
     */
    public $origin;

    /**
     *  The time the payment was received
     * @var string
     */
    public $receivedAt;

    /**
     *  The time the payment was imported
     * @var string
     */
    public $importedAt;

    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#payment-statuses"  target="_blank">status</a> of the payment
     * @var integer
     */
    public $status;

    /**
     *  The transaction type of the payment. The following transaction types are available:
     *
     *     Interim transaction report = 1
     *     Booked payment = 2
     *     Split payment = 3
     *
     * @var integer
     */
    public $transactionType;

    /**
     *  The ID of the payment method
     * @var integer
     */
    public $mopId;

    /**
     *  If $regenerateHash is true, regenerate the payment hash value. Default is false.
     * @var boolean
     */
    public $regenerateHash;

    /**
     *  If $updateOrderPaymentStatus is true, update the order payment status. Default is false.
     * @var boolean
     */
    public $updateOrderPaymentStatus;

    /**
     *  If $isSystemCurrency is false, the value will be converted to the standard currency with the provided exchange rate. If $isSystemCurrency is false, the value is not converted. Default is true.
     * @var boolean
     */
    public $isSystemCurrency;

}
