<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Property;

class OrderProperty
{
    /**
     *  The ID of the order property
     * @var integer
     */
    public $id;

    /**
     *  The ID of the order that the property belongs to
     * @var integer
     */
    public $orderId;

    /**
     *  The ID of the property type. The following types are available:
     *
     *   WAREHOUSE        =    1
     *   SHIPPING_PROFILE    =    2
     *   PAYMENT_METHOD            =    3
     *   PAYMENT_STATUS            =    4
     *   EXTERNAL_SHIPPING_PROFILE            =    5
     *   DOCUMENT_LANGUAGE            =    6
     *   EXTERNAL_ORDER_ID            =    7
     *   CUSTOMER_SIGN            =    8
     *   DUNNING_LEVEL            =    9
     *   SELLER_ACCOUNT            =    10
     *   WEIGHT            =    11
     *   WIDTH            =    12
     *   LENGTH          =    13
     *   HEIGHT        =    14
     *   FLAG            =    15
     *   EXTERNAL_TOKEN_ID            =    16
     *   EXTERNAL_ITEM_ID            =    17
     *   COUPON_CODE            =    18
     *   COUPON_TYPE         =   19
     *   SALES_TAX_ID_NUMBER =   34
     *   MAIN_DOCUMENT_NUMBER = 33
     *   PAYMENT_TRANSACTION_ID = 45
     *   EXTERNAL_TAX_SERVICE = 47
     *   MERCHANT_ID = 60
     *   REPORT_ID = 61
     *   PREFERRED_STORAGE_LOCATION_ID = 63
     *   AMAZON_SHIPPING_LABEL = 64
     *   EBAY_PLUS = 994
     *   FULFILLMENT_SERVICE = 995
     *
     * @var integer
     */
    public $typeId;

    /**
     *  The value of the property. The value depends on the type.
     * @var string
     */
    public $value;

}
