<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Information;

class ShippingInformation
{
    /**
     *  The ID of the order
     * @var integer
     */
    public $orderId;

    /**
     *  The name of the shipping service provider
     * @var string
     */
    public $shippingServiceProvider;

    /**
     *  The ID of the transaction
     * @var string
     */
    public $transactionId;

    /**
     *  The shipping status. Possible values are 'open', 'prepared' and 'registered'.
     * @var string
     */
    public $shippingStatus;

    /**
     *  The shipping costs
     * @var float
     */
    public $shippingCosts;

    /**
     *  The additional data. Depending on the shipping service provider selected, this data may contain different information, e.g. shipping service, email address and order ID.
     * @var string
     */
    public $additionalData;

    /**
     *  The date and time the shipment was registered
     * @var integer
     */
    public $registrationAt;

    /**
     *  The date the items will be shipped
     * @var integer
     */
    public $shipmentAt;

}
