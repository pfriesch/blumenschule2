<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationSupplier;

class VariationSupplier
{
    /**
     *  The unique ID of the link between variation and supplier
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the supplier
     * @var integer
     */
    public $supplierId;

    /**
     *  The price at which the variation was purchased from this supplier.
     * @var float
     */
    public $purchasePrice;

    /**
     *  The minimum quantity of the variation that has to be ordered from the supplier. This value is also used as a quantity suggestion when creating reorders.
     * @var integer
     */
    public $minimumPurchase;

    /**
     *  The external item number assigned to the variation by this supplier
     * @var string
     */
    public $itemNumber;

    /**
     *  The date of the last price query to this supplier. This helps to plan price negotiations.
     * @var string
     */
    public $lastPriceQuery;

    /**
     *  The delivery time in days for the variation saved for this supplier
     * @var integer
     */
    public $deliveryTimeInDays;

    /**
     *  The discount in percent the supplier grants for the variation.
     * @var float
     */
    public $discount;

    /**
     *  Flag that indicates if the supplier's discount for this variation is active.
     * @var string
     */
    public $isDiscountable;

    /**
     *  The packaging unit of the supplier if it differs from the packaging unit settings in plentymarkets.
     * @var float
     */
    public $packagingUnit;

    /**
     *  The time the supplier data was last updated
     * @var string
     */
    public $lastUpdateTimestamp;

    /**
     *  The time the supplier data was created
     * @var string
     */
    public $createdAt;

}
