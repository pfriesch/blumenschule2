<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Date;

class OrderDate
{
    /**
     *  The ID of the order date
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order that the date belongs to
     * @var integer
     */
    public $orderId;

    /**
     *  The ID of the date type. The following types are available:
     *
     * Deleted on = 1
     * Created on = 2
     * Paid date = 3
     * Last update = 4
     * Completed date = 5
     * Return date = 6
     * Payment due date = 7
     * Estimated shipping date = 8
     * Start date = 9
     * End date = 10
     * Estimated delivery date = 11
     * Market transfer date = 12
     * Subscription cancelled on = 13
     * Subscription last run = 14
     * Subscription next run = 15
     * Purchase date = 16
     * Finish date = 17
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The date when the date was created
     * @var string
     */
    public $createdAt;

    /**
     *  The date when the date was last updated
     * @var string
     */
    public $updatedAt;

}
