<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\History;

class ListingMarketHistory
{
    /**
     *  The listing market history ID.
     * @var integer
     */
    public $id;

    /**
     *  The listing market ID of the current listing market history.
     * @var integer
     */
    public $listingMarketId;

    /**
     *  The referrer ID.
     * @var integer
     */
    public $referrerId;

    /**
     *  The external ID of the listing market history.
     * @var string
     */
    public $externalId;

    /**
     *  The status ID of the current listing market history. The following properties are availabel:
     *
     * 1 = Active
     * 2 = Ended
     * 3 = Relisted
     * 4 = Hidden
     *
     * @var integer
     */
    public $statusId;

    /**
     *  The quantity availabel for sale on the marketplace.
     * @var integer
     */
    public $quantity;

    /**
     *  The quantity sold currently on the marketplace.
     * @var integer
     */
    public $quantitySold;

    /**
     *  The difference between the sold quantity and orders imported for this listing market history.
     * @var integer
     */
    public $quantitySoldDelta;

    /**
     *  The quantity remaining on the marketplace.
     * @var integer
     */
    public $quantityRemain;

    /**
     *  The price offered for this listing market. @see ListingMarketHistoryVariation if the listing market history contains variations.
     * @var float
     */
    public $price;

    /**
     *  The currency for the price of this listing market.
     * @var string
     */
    public $currency;

    /**
     *  The stock keeping unit of this listing market history.
     * @var string
     */
    public $sku;

    /**
     *  The date that the entry was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the entry was updated last.
     * @var string
     */
    public $updatedAt;

}
