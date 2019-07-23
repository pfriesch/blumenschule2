<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Transaction;

class OrderItemTransaction
{
    /**
     *  The ID of the transaction
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order item
     * @var integer
     */
    public $orderItemId;

    /**
     *  The quantity
     * @var float
     */
    public $quantity;

    /**
     *  The ID of the user
     * @var integer
     */
    public $userId;

    /**
     *  External identification. Can be an arbitrary string.
     * @var string
     */
    public $identification;

    /**
     *  The direction. Possible values are 'in' and 'out'.
     * @var string
     */
    public $direction;

    /**
     *  The status. Possible values are 'regular' and 'cancelled'.
     * @var string
     */
    public $status;

    /**
     *  The receipt ID
     * @var integer
     */
    public $receiptId;

    /**
     *  The ID of the warehouse location
     * @var integer
     */
    public $warehouseLocationId;

    /**
     *  The batch
     * @var string
     */
    public $batch;

    /**
     *  The best before date
     * @var string
     */
    public $bestBeforeDate;

    /**
     *  Deprecated. Replaced by $batch and $bestBeforeDate.
     * @var integer
     */
    public $batchBestBeforeDateId;

    /**
     *  The date the transaction was created
     * @var string
     */
    public $createdAt;

    /**
     *  The date the transaction was last updated
     * @var string
     */
    public $updatedAt;

}
