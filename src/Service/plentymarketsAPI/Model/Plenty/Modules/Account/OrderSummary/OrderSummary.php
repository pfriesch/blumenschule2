<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Account\OrderSummary;

class OrderSummary
{
    /**
     *  The ID of the order summary
     * @var integer
     */
    public $id;

    /**
     *  The address ID of the order summary
     * @var integer
     */
    public $addressId;

    /**
     *  The ID of the contact
     * @var integer
     */
    public $contactId;

    /**
     *  The number of unpaid orders
     * @var integer
     */
    public $unpaidOrdersCount;

    /**
     *  The total amount of unpaid orders
     * @var float
     */
    public $unpaidOrderTotalAmount;

    /**
     *  The number of all orders of the associated model
     * @var integer
     */
    public $orderCount;

    /**
     *  The time the order summary was created as unix timestamp
     * @var string
     */
    public $createdAt;

    /**
     *  The time the order summary was last updated as unix timestamp
     * @var string
     */
    public $updatedAt;

}
