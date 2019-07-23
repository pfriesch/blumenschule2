<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Basket;

class BasketItem
{
    /**
     *  The ID of the item in the shopping cart
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the shopping cart. The ID increases by 1 when a new customer enters the online store and adds an item to the shopping cart.
     * @var integer
     */
    public $basketId;
    
    /**
     *  The ID of the current customer session
     * @var string
     */
    public $sessionId;
    
    /**
     *  
     * @var integer
     */
    public $orderRowId;
    
    /**
     *  The current quantity of the item
     * @var float
     */
    public $quantity;
    
    /**
     *  The initial quantity of the item
     * @var float
     */
    public $quantityOriginally;
    
    /**
     *  The ID of the item
     * @var integer
     */
    public $itemId;
    
    /**
     *  The ID of the item price
     * @var integer
     */
    public $priceId;
    
    /**
     *  The ID of the attribute value set
     * @var integer
     */
    public $attributeValueSetId;
    
    /**
     *  The discount on the item
     * @var integer
     */
    public $rebate;
    
    /**
     *  The VAT
     * @var float
     */
    public $vat;
    
    /**
     *  The item price
     * @var float
     */
    public $price;
    
    /**
     *  
     * @var float
     */
    public $givenPrice;
    
    /**
     *  
     * @var boolean
     */
    public $useGivenPrice;
    
    /**
     *  The width of the item
     * @var integer
     */
    public $inputWidth;
    
    /**
     *  The length of the item
     * @var integer
     */
    public $inputLength;
    
    /**
     *  The height of the item
     * @var integer
     */
    public $inputHeight;
    
    /**
     *  The item type
     * @var integer
     */
    public $itemType;
    
    /**
     *  The external variation ID
     * @var string
     */
    public $externalItemId;
    
    /**
     *  Shows whether the item was edited by the customer
     * @var boolean
     */
    public $noEditByCustomer;
    
    /**
     *  
     * @var integer
     */
    public $costCenterId;
    
    /**
     *  
     * @var integer
     */
    public $giftPackageForRowId;
    
    /**
     *  The item position
     * @var integer
     */
    public $position;
    
    /**
     *  The item size
     * @var string
     */
    public $size;
    
    /**
     *  The ID of the shipping profile
     * @var integer
     */
    public $shippingProfileId;
    
    /**
     *  The ID of the order referrer
     * @var float
     */
    public $referrerId;
    
    /**
     *  The delivery date
     * @var string
     */
    public $deliveryDate;
    
    /**
     *  The ID of the item category
     * @var integer
     */
    public $categoryId;
    
    /**
     *  
     * @var integer
     */
    public $reservationDatetime;
    
    /**
     *  The ID of the item variation
     * @var integer
     */
    public $variationId;
    
    /**
     *  The ID of the item bundle type
     * @var integer
     */
    public $bundleVariationId;
    
    /**
     *  The date that the shopping cart was created
     * @var string
     */
    public $createdAt;
    
    /**
     *  The date that the shopping cart was updated last
     * @var string
     */
    public $updatedAt;
    
    /**
     *  attribute total markup
     * @var float
     */
    public $attributeTotalMarkup;
    
    /**
     *  Array of BasketItemParams
     * @var array
     */
    public $basketItemOrderParams;
    
}
