<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Property;

class OrderItemProperty
{
    /**
     *  The ID of the order item property.
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order item that the property belongs to.
     * @var integer
     */
    public $orderItemId;

    /**
     *  The ID of the property type.
     *
     * WAREHOUSE                      =    1
     * SHIPPING_PROFILE                  =    2
     * PAYMENT_METHOD                  =    3
     * WEIGHT                          =    11
     * WIDTH                          =    12
     * LENGTH                          =    13
     * HEIGHT                          = 14
     * EXTERNAL_TOKEN_ID              =    16
     * EXTERNAL_ITEM_ID               =    17
     * COUPON_CODE                      =    18
     * COUPON_TYPE                      =    19
     * ORIGINAL_WAREHOUSE              =    20
     * ORIGINAL_QUANTITY              =    21
     * CATEGORY_ID                    = 22
     * MARKET_FEE                      =    23
     * STOCK_REVERSING                  =    24
     * DISPUTE_STATUS                  =    25
     * NO_CHANGE_BY_CONTACT           = 26
     * SIZE                          =    29
     * LOCATION_RESERVED              =    30
     * EXTERNAL_SHIPMENT_ITEM_ID      =    31
     * PARTIAL_SHIPPING_COSTS         =    32
     * MAIN_DOCUMENT_NUMBER           =    33
     * SALES_TAX_ID_NUMBER            =    34
     * RETURNS_REASON                 =    35
     * RETURNS_ITEM_STATUS            =    36
     * FULFILLMENT_CENTER_ID          = 37
     * FULFILLMENT_CENTER_COUNTRY_ISO = 38
     * REORDER_ITEM_ID                = 39
     * LISTING_TYPE                   = 40
     * SOLD_COUPON_CODE               = 46
     * ORDER_ITEM_STATE               = 48
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The value of the property. The value depends on type.
     * @var string
     */
    public $value;

    /**
     *  The date that the property was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The date that the property was last updated.
     * @var string
     */
    public $updatedAt;

}
