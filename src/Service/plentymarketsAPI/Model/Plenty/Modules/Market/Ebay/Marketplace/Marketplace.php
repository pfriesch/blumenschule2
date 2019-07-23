<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\Marketplace;

class Marketplace
{
    /**
     *  The ID of the site exactly as eBay specifies it in the docs. This value is/was used in the old eBay SOAP APIs
     * @var integer
     */
    public $siteId;

    /**
     *  The ID of the marketplace exactly as eBay specifies it in the docs. This value is used in the new eBay REST APIs. Eg. `EBAY_DE` or `EBAY-DE`
     * @var string
     */
    public $marketplaceId;

    /**
     *  System-Listing wide internal ID for the listing marketplace. This id occurs only in correlation with the listing DB tables.
     * @var integer
     */
    public $marketId;

    /**
     *  System wide internal ID for the marketplace. Use this instead of `marketId` whenever possible!
     * @var float
     */
    public $referrerId;

    /**
     *  The marketplace shortcut name.
     * @var string
     */
    public $shortcut;

    /**
     *  The currency used for the marketplace
     * @var string
     */
    public $currency;

}
