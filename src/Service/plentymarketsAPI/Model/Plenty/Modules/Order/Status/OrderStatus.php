<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Status;

class OrderStatus
{
    /**
     *  The ID of the status.
     * @var float
     */
    public $statusId;

    /**
     *  Flag that indicates whether the status is erasable or not.
     * @var boolean
     */
    public $isErasable;

    /**
     *  The date, when the status was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date, when the status was updated.
     * @var string
     */
    public $updatedAt;

    /**
     *  Indicates visibility in frontend.
     * @var boolean
     */
    public $isFrontendVisible;

    /**
     *  Indicates visibility in reorder.
     * @var boolean
     */
    public $isReorderVisible;

    /**
     *  Indicates visibility in redistribution.
     * @var boolean
     */
    public $isRedistributionVisible;

    /**
     *  The color of the status.
     * @var string
     */
    public $color;

}
