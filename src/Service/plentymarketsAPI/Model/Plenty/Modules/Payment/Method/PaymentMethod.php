<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Payment\Method;

class PaymentMethod
{
    /**
     *  The ID of the payment method
     * @var integer
     */
    public $id;

    /**
     *  The plugin key of the payment method
     * @var string
     */
    public $pluginKey;

    /**
     *  The payment key of the payment method
     * @var string
     */
    public $paymentKey;

    /**
     *  The name of the payment method
     * @var string
     */
    public $name;

}
