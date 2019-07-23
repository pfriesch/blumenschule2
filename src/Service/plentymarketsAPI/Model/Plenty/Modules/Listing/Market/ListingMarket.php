<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market;

class ListingMarket
{
    /**
     *  The ID of the listing market.
     * @var integer
     */
    public $id;
    
    /**
     *  The listing ID of the current listing market.
     * @var integer
     */
    public $listingId;
    
    /**
     *  The variation ID for this listing market.
     * @var integer
     */
    public $variationId;
    
    /**
     *  The ID of the referrer.
     * @var integer
     */
    public $referrerId;
    
    /**
     *  The credentials ID that this listing market belongs to.
     * @var integer
     */
    public $credentialsId;
    
    /**
     *  The directory ID of the listing market.
     * @var integer
     */
    public $directoryId;
    
    /**
     *  Indicates if the listing market is enabled.
     * @var boolean
     */
    public $enabled;
    
    /**
     *  The duration of the listing market.
     * @var string
     */
    public $duration;
    
    /**
     *  Indicates if the listing market has been verified. Possible values are: 'succeeded', 'failed', 'unknown'.
     * @var string
     */
    public $verified;
    
    /**
     *  The quantity set for this listing market.
     * @var integer
     */
    public $quantity;
    
    /**
     *  Indicates if all variations should be included.
     * @var boolean
     */
    public $allVariations;
    
    /**
     *  The date that the listing was created.
     * @var string
     */
    public $createdAt;
    
    /**
     *  The date that the listing was last updated.
     * @var string
     */
    public $updatedAt;
    
}
