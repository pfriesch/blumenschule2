<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Item;

class Item
{
    /**
     *  The ID of the item. The ID must be unique.
     * @var integer
     */
    public $id;
    
    /**
     *  The position of the item
     * @var integer
     */
    public $position;
    
    /**
     *  The type of the item. Because Set items are managed using a separate route, this value is always Default.
     * @var string
     */
    public $itemType;
    
    /**
     *  The stock type of the item. Possible values:0 = Stocked item (default)1 = Production item2 = Colli3 = Special order item
     * @var integer
     */
    public $stockType;
    
    /**
     *  Option to present items more prominently in the online store.1 = Special offer2 = New items3 = Top items
     * @var integer
     */
    public $storeSpecial;
    
    /**
     *  The plentymarkets user that is assigned as owner of this item.
     * @var integer
     */
    public $ownerId;
    
    /**
     *  The ID of the manufacturer of the item
     * @var integer
     */
    public $manufacturerId;
    
    /**
     *  The ID of the country in which the item was manufactured.
     * @var integer
     */
    public $producingCountryId;
    
    /**
     *  The ID of the main variation of the item. The ID must be unique.
     * @var integer
     */
    public $mainVariationId;
    
    /**
     *  The customs tariff number of the item; usually a 11 digit code number based on the Harmonised System
     * @var string
     */
    public $customsTariffNumber;
    
    /**
     *  The revenue account the item is linked to. An individual revenue account can be saved for each item in plentymarkets. If this is not done, plentymarkets automatically determines a revenue account based on the VAT rate.
     * @var integer
     */
    public $revenueAccount;
    
    /**
     *  Indicates if the item can be purchased using a promotional coupon.0 = Permitted1 = Not permitted2 = Purchasable with coupon only
     * @var integer
     */
    public $couponRestriction;
    
    /**
     *  The condition of the item. Possible values:0 = New1 = Used2 = Boxed as new3 = New with label4 = Factory seconds
     * @var integer
     */
    public $condition;
    
    /**
     *  The condition of the item that is transferred to markets via API.0 = New1 = Used but as new2 = Used but very good3 = Used but good4 = Used but acceptable5 = Factory seconds
     * @var integer
     */
    public $conditionApi;
    
    /**
     *  Timestamp of the date and time the item was created.
     * @var string
     */
    public $createdAt;
    
    /**
     *  Timestamp of the last date and time the item was updated.
     * @var string
     */
    public $updatedAt;
    
    /**
     *  Flag that indicates if the item can be ordered as a subscription item. If yes, the item can be ordered for delivery at regular intervals.
     * @var boolean
     */
    public $isSubscribable;
    
    /**
     *  Flag that indicates if serial numbers are to be assigned to variations of this item to uniquely identify every item sold. Serial numbers ensure traceability of an item in case of errors or problems.
     * @var boolean
     */
    public $isSerialNumber;
    
    /**
     *  Flag that indicates if a shipping package is to be used for this item. If yes and the variation's dimensions are entered in the <b>Settings</b> tab of a variation, the correct shipping package is assigned automatically.
     * @var boolean
     */
    public $isShippingPackage;
    
    /**
     *  Indicates the platform used for Fulfilment by Amazon (FBA). 0 = Do not use1 = AMAZON EU (Europe)2 = AMAZON FE (Far East)3 = AMAZON NA (North America)
     * @var integer
     */
    public $amazonFbaPlatform;
    
    /**
     *  Flag that indicates if the item can be shipped with Amazon Multi-Channel. Amazon Multi-Channel Fulfillment is a service for fulfilling orders from sales channels other than Amazon platforms using inventory stored in the Amazon fulfillment center.
     * @var boolean
     */
    public $isShippableByAmazon;
    
    /**
     *  The Amazon product type of the item. List of IDs: https://www.plentymarkets.co.uk/manual/data-exchange/data-formats/item/
     * @var integer
     */
    public $amazonProductType;
    
    /**
     *  The FEDAS product classification key of the item.
     * @var string
     */
    public $amazonFedas;
    
    /**
     *  The eBay preset ID. This plentymarkets ID must be specified to save values for $ebayCategory, $ebayCategory2, $ebayStoreCategory and $ebayStoreCategory2.
     * @var integer
     */
    public $ebayPresetId;
    
    /**
     *  The eBay category 1 of the item. This category is used when a new listing is created.
     * @var integer
     */
    public $ebayCategory;
    
    /**
     *  The eBay category 2 of the item. This category is used when a new listing is created.
     * @var integer
     */
    public $ebayCategory2;
    
    /**
     *  The ID of the eBay store category 1 of the item. This value is used for new listings.
     * @var integer
     */
    public $ebayStoreCategory;
    
    /**
     *  The ID of the eBay store category 2 of the item. This value is used for new listings.
     * @var integer
     */
    public $ebayStoreCategory2;
    
    /**
     *  The ID of the Rakuten category of this item.
     * @var integer
     */
    public $rakutenCategoryId;
    
    /**
     *  Flag 1 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 31, 0 = no flag
     * @var integer
     */
    public $flagOne;
    
    /**
     *  Flag 2 of the item. Flags can be used to organise and filter items. Each item can be assigned up to two flags. Possible values: 1 to 11, 0 = no flag
     * @var integer
     */
    public $flagTwo;
    
    /**
     *  The age customers must be to purchase the item. Items with an age rating of 18+ must be linked to a shipping profile for which the PostIdent option is activated.0 = None available3 = Released for ages 3 and up6 = Ages 6 and up9 = Ages 9 and up12 = Ages 12 and up14 = Ages 14 and up16 = Ages 16 and up18 = Ages 18 and up50 = Not marked88 = Not required99 = Unknown
     * @var integer
     */
    public $ageRestriction;
    
    /**
     *  The feedback, i.e. rating, that this item received. Possible values are 1 to 5 or 1 to 10 depending on the maximum rating setting. An initial feedback can be saved for items. The saved value will then be displayed as the initial feedback. Every time new feedback is submitted, the average value will be recalculated automatically.
     * @var integer
     */
    public $feedback;
    
    /**
     *  The content of the free text field 1. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free1;
    
    /**
     *  The content of the free text field 2. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free2;
    
    /**
     *  The content of the free text field 3. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free3;
    
    /**
     *  The content of the free text field 4. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free4;
    
    /**
     *  The content of the free text field 5. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free5;
    
    /**
     *  The content of the free text field 6. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free6;
    
    /**
     *  The content of the free text field 7. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free7;
    
    /**
     *  The content of the free text field 8. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free8;
    
    /**
     *  The content of the free text field 9. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free9;
    
    /**
     *  The content of the free text field 10. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free10;
    
    /**
     *  The content of the free text field 11. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free11;
    
    /**
     *  The content of the free text field 12. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free12;
    
    /**
     *  The content of the free text field 13. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free13;
    
    /**
     *  The content of the free text field 14. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free14;
    
    /**
     *  The content of the free text field 15. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free15;
    
    /**
     *  The content of the free text field 16. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free16;
    
    /**
     *  The content of the free text field 17. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free17;
    
    /**
     *  The content of the free text field 18. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free18;
    
    /**
     *  The content of the free text field 19. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free19;
    
    /**
     *  The content of the free text field 20. This can be displayed in the online store or on eBay.
     * @var string
     */
    public $free20;
    
    /**
     *  The maximum order quantity of an item permitted per order. If a maximum order quantity is specified, no more than this quantity of any combination of the variations of the item can be ordered. Decimal values are possible to allow orders by weight or length. Default value is 0. If value is 0, the maximum order quantity is unlimited.
     * @var float
     */
    public $maximumOrderQuantity;
    
}
