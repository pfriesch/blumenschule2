<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\ParcelService;

class ParcelServicePreset
{
    /**
     *  The ID of the shipping profile (autoincrement value)
     * @var integer
     */
    public $id;

    /**
     *  The ID of the shipping service provider
     * @var integer
     */
    public $parcelServiceId;

    /**
     *  The back end name of the shipping profile
     * @var string
     */
    public $backendName;

    /**
     *  The icon of the shipping profile
     * @var integer
     */
    public $flag;

    /**
     *  The priority of the shipping profile
     * @var integer
     */
    public $priority;

    /**
     *  The category of the shipping profile
     * @var integer
     */
    public $category;

    /**
     *  Flag that indicates if the extra shipping charge saved in the item data record is used
     * @var integer
     */
    public $useArticlePorto;

    /**
     *  Flag that indicates if the shipping profile is insured
     * @var integer
     */
    public $isInsured;

    /**
     *  Flag that indicates if the shipping profile is used for express delivery
     * @var integer
     */
    public $isExpress;

    /**
     *  Flag that indicates if the shipping profile includes an authority verification
     * @var integer
     */
    public $isPostident;

    /**
     *  Flag that indicates if the shipping profile is automatically assigned to new items
     * @var integer
     */
    public $isDefaultEnabled;

    /**
     *  The extra charge for islands saved in the shipping profile
     * @var float
     */
    public $islandFee;

    /**
     *  Flag that indicates Cash on Delivery
     * @var integer
     */
    public $isCod;

    /**
     *  The clients (stores) that are activated for the shipping profile
     * @var array
     */
    public $supportedMultishop;

    /**
     *  The order referrers that are activated for the shipping profile
     * @var array
     */
    public $supportedReferrer;

    /**
     *  This field is currently without any function.
     * @var array
     */
    public $subreferrerSupport;

    /**
     *  The blocked payment methods that are not offered for the shipping profile
     * @var array
     */
    public $excludedPaymentMethods;

    /**
     *  The blocked customer groups for the shipping profile. Blocked customer groups cannot select the shipping profile during checkout.
     * @var array
     */
    public $excludedCustomerGroups;

    /**
     *  The group of the shipping profile
     * @var string
     */
    public $shippingGroup;

    /**
     *  This field is currently without any function.
     * @var string
     */
    public $dispatchIdentifier;

    /**
     *  The eBay listing type for the shipping profile
     * @var integer
     */
    public $auctionType;

    /**
     *  The loyalty programs that are supported by the shipping profile
     * @var array
     */
    public $supportedLoyaltyPrograms;

    /**
     *  The date the shipping profile was last updated
     * @var string
     */
    public $updatedAt;

    /**
     *
     * @var integer
     */
    public $showDataPrivacyAgreementHint;

    /**
     *
     * @var string
     */
    public $transmitPrivacyRule;

    /**
     *
     * @var string
     */
    public $alternativeEmail;

    /**
     *
     * @var string
     */
    public $alternativePhone;

    /**
     *  Indicates whether the e.g. paketshop is supported
     * @var integer
     */
    public $isParcelBox;

    /**
     *  Indicates whether the e.g. postfiliale is supported
     * @var integer
     */
    public $isPostOffice;

}
