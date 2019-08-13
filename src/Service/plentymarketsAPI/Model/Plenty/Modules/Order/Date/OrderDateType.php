<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Date;

class OrderDateType
{
    /**
     *  The ID of the order date type. The following date types are availabel:
     *
     * Deleted on = 1
     * Created on = 2
     * Paid date = 3
     * Last update = 4
     * Completed on = 5
     * Return date = 6
     * Payment due date = 7
     * Estimated shipping date = 8
     * Start date = 9
     * End date = 10
     * Possible delivery date = 11
     * Market transfer date = 12
     * Subscription cancelled on = 13
     * Subscription last run = 14
     * Subscription next run = 15
     *
     * @var integer
     */
    public $id;

    /**
     *  Flag that indicates if this type can be deleted or not.
     * @var boolean
     */
    public $isErasable;

    /**
     *  The position for sorting
     * @var integer
     */
    public $position;

}
