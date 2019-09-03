<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

class OrderReturns
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
    public $orderId;

    /**
     *
     * @var integer
     */
    public $returnsOrderId;

    /**
     *
     * @var integer
     */
    public $providerId;

    /**
     *
     * @var string
     */
    public $fileName;

    /**
     *
     * @var string
     */
    public $externalNumber;

    /**
     *
     * @var string
     */
    public $externalData;

}
