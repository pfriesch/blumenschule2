<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationSku;

class VariationSku
{
    /**
     *  The row ID of the table plenty_item_variation_market_status
     * @var integer
     */
    public $id;

    /**
     *  The ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The ID of the market
     * @var float
     */
    public $marketId;

    /**
     *  The ID of the market account
     * @var integer
     */
    public $accountId;

    /**
     *  The initial SKU of the variation. The initial SKU cannot be modified even if the variation SKU is changed. However, it is possible to reset the variation SKU to the initial SKU.
     * @var string
     */
    public $initialSku;

    /**
     *  The SKU of the variation. The SKU is adjustable but may not exist twice for the combination of market Id and account Id.
     * @var string
     */
    public $sku;

    /**
     *  The Parent SKU of the variation. The Parent SKU is adjustable. The same Parent SKU value should be used on variations of same article.
     * @var string
     */
    public $parentSku;

    /**
     *  Flag that indicates if the item is ready for export (currently not in use).
     * @var boolean
     */
    public $isActive;

    /**
     *  The time the SKU was created (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $createdAt;

    /**
     *  The time the SKU was updated (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $updatedAt;

    /**
     *  The time the variation was last exported (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $exportedAt;

    /**
     *
     * @var string
     */
    public $stockUpdatedAt;

    /**
     *  The time the variation was deleted (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $deletedAt;

    /**
     *  The status of the variation after the export. Possible entries are INACTIVE, ERROR, SENT and ACTIVE.
     * @var string
     */
    public $status;

    /**
     *  The field that contains additional information.
     * @var string
     */
    public $additionalInformation;

}
