<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Variation;

class Variation
{
    /**
     *  The ID of the variation. The ID must be unique.
     * @var integer
     */
    public $id;

    /**
     *  Flag that indicates if the variation is the main variation of the item.
     * @var boolean
     */
    public $isMain;

    /**
     *  The variation ID of the item's main variation. Value is NULL if this variation is the item's main variation.
     * @var integer
     */
    public $mainVariationId;

    /**
     *  The item ID of the item that this variation belongs to.
     * @var integer
     */
    public $itemId;

    /**
     *  The position of the variation. Value is inherited from the item's main variation if inheritance is active.
     * @var integer
     */
    public $position;

    /**
     *  Flag that indicates if the variation is active. Only active variations can be offered in the online store and/or on markets.
     * @var boolean
     */
    public $isActive;

    /**
     *  The unique variation number of the variation. The variation number must be specified.
     * @var string
     */
    public $number;

    /**
     *  The model of the variation. Value is inherited from the item's main variation if inheritance is active.
     * @var string
     */
    public $model;

    /**
     *  The external variation ID of this variation. The external variation number is optional and allows importing items and variations from external systems to plentymarkets.
     * @var string
     */
    public $externalId;

    /**
     *  The availability of the variation. Possible values: 1 to 10, null = Variation inherits value of main variation.
     * @var integer
     */
    public $availability;

    /**
     *  The estimated delivery date of variations on reorder.
     * @var string
     */
    public $estimatedAvailableAt;

    /**
     *  The net purchase price. Value e.g. is used for price calculations.
     * @var float
     */
    public $purchasePrice;

    /**
     *  The moving average purchase price of the variation.
     * @var float
     */
    public $movingAveragePrice;

    /**
     *  The time the variation was created.
     * @var string
     */
    public $createdAt;

    /**
     *  The time the variation was last updated.
     * @var string
     */
    public $updatedAt;

    /**
     *  The time at which related information for this variation was last updated. Related information is defined as information that is linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category.
     * @var string
     */
    public $relatedUpdatedAt;

    /**
     *  The time at which the availability of this variation was last updated.
     * @var string
     */
    public $availabilityUpdatedAt;

    /**
     *  The ID of the price calculation linked to the variation.
     * @var integer
     */
    public $priceCalculationId;

    /**
     *  The order picking type of the variation. Possible values: single_picking, no_single_picking, exclude_from_picklist, null (no order picking type)
     * @var string
     */
    public $picking;

    /**
     *  The stock limitation for the variation. Possible values: 0 = No limitation, i.e. stock is not limited. The variations's availability is not checked automatically.1 = Stock is limited to net stock. The variation's availability is checked automatically.2 = Do not administer stock for this variation.
     * @var integer
     */
    public $stockLimitation;

    /**
     *  Flag that indicates if the variation is visible in the online store if net stock is positive. If true, the variation automatically becomes visible when the net stock changes to positive.
     * @var boolean
     */
    public $isVisibleIfNetStockIsPositive;

    /**
     *  Flag that indicates if the variation is invisible in the online store if net stock is not positive. If true, the variation automatically becomes invisible when the net stock changes to 0 or negative.
     * @var boolean
     */
    public $isInvisibleIfNetStockIsNotPositive;

    /**
     *  Flag that indicates if the variation is available in the online store if net stock is positive. If true, the variation automatically becomes available when the net stock changes to positive.
     * @var boolean
     */
    public $isAvailableIfNetStockIsPositive;

    /**
     *  Flag that indicates if the variation is unavailable in the online store if net stock is not positive. If true, the variation automatically becomes available when the net stock changes to 0 or negative.
     * @var boolean
     */
    public $isUnavailableIfNetStockIsNotPositive;

    /**
     *  Flag that indicates if the variation is visible in the item list of the online store if net stock is positive. If true, the variation automatically becomes visible in categories, search results and item lists (store specials, cross-selling, last seen items) when the net stock changes to positive.
     * @var boolean
     */
    public $isVisibleInListIfNetStockIsPositive;

    /**
     *  Flag that indicates if the variation is invisible in the item list of the online store if net stock is not positive. If true and no net stock is available for the variation, the variation can only be opened using the direct URL. The variation is not shown in the categories, search results or item lists (store specials, cross-selling, last seen items).
     * @var boolean
     */
    public $isInvisibleInListIfNetStockIsNotPositive;

    /**
     *  The ID of the main warehouse of the variation.
     * @var integer
     */
    public $mainWarehouseId;

    /**
     *  The maximum order quantity permitted per order. Decimal values are possible to allow orders by weight or length. Default value is 0. If value is 0, the maximum order quantity is unlimited.
     * @var float
     */
    public $maximumOrderQuantity;

    /**
     *  The minimum order quantity. Decimal values are possible to allow orders by weight or length.
     * @var float
     */
    public $minimumOrderQuantity;

    /**
     *  The quantity intervals the variation can be ordered in. Decimal values are possible to allow orders by weight or length.
     * @var float
     */
    public $intervalOrderQuantity;

    /**
     *  The last date the item will be available for sale.
     * @var string
     */
    public $availableUntil;

    /**
     *  The release date of the variation. This is the date on which the variation will become available. The variation can be visible in the online store before this date, e.g. for preorders.
     * @var string
     */
    public $releasedAt;

    /**
     *  The name of the variation
     * @var string
     */
    public $name;

    /**
     *  The unit combination id of the variation
     * @var integer
     */
    public $unitCombinationId;

    /**
     *  The gross weight of the variation in gramms (g). This weight includes the packaging for variations that are packaged separately. This value is used for calculating shipping packages and weight-based shipping costs.
     * @var integer
     */
    public $weightG;

    /**
     *  The net weight of the variation in gramms (g). This is the weight of the variation without packaging.
     * @var integer
     */
    public $weightNetG;

    /**
     *  The width of the variation in millimetres (mm)
     * @var integer
     */
    public $widthMM;

    /**
     *  The length of the variation in millimeters (mm)
     * @var integer
     */
    public $lengthMM;

    /**
     *  The height of the variation in millimetres (mm)
     * @var integer
     */
    public $heightMM;

    /**
     *  The extra shipping charge 1 for the variation. Extra shipping charges are useful for large or bulky items that are particularly expensive to ship. Charge 1 is added to the regular shipping costs for the first item of an order. If different variations are ordered, the extra shipping charge 1 of the variation with the highest charge 1 is selected.
     * @var float
     */
    public $extraShippingCharge1;

    /**
     *  The extra shipping charge 2 for the variation. Extra shipping charges are useful for large or bulky items that are expensive to ship. Charge 2 is added to the shipping costs for any additional items of an order.
     * @var float
     */
    public $extraShippingCharge2;

    /**
     *  The number of sales units contained in one package. Default value is 1.
     * @var integer
     */
    public $unitsContained;

    /**
     *  The ID of the pallet type
     * @var integer
     */
    public $palletTypeId;

    /**
     *  The number of packing units if the item consists of multiple packages. Value is 0 if an item is sent as one package. All items of an order that have the value 0 will be packed into one package.
     * @var integer
     */
    public $packingUnits;

    /**
     *  The ID of the packing unit type.
     * @var integer
     */
    public $packingUnitTypeId;

    /**
     *  The net transportation costs for the variation. This value is used for price calculations and for calculating the acquisition price.
     * @var float
     */
    public $transportationCosts;

    /**
     *  The net storage costs for the variation
     * @var float
     */
    public $storageCosts;

    /**
     *  The customs rate in percent
     * @var float
     */
    public $customs;

    /**
     *  The operating costs for the variation in percent
     * @var float
     */
    public $operatingCosts;

    /**
     *  The ID of the VAT rate of the variation. VAT rates are created for each client (store) and linked to the variation.
     * @var integer
     */
    public $vatId;

    /**
     *  Indicates the bundle type of the variation. Possible values:bundle = The variation is a bundlebundle_item = The variation is a bundle component.Null = The variation is not associated with a bundle
     * @var string
     */
    public $bundleType;

    /**
     *  Indicates if the variation is set as available for any clients (stores). Possible values:0 / -1 (GET) or 0 (POST) = Variation is not available in any client (store).1 / 2 (GET) or 1 (POST) = Variation is available in at least one client (store).The variation's actual visibility depends on the settings for net stock dependency.
     * @var integer
     */
    public $automaticClientVisibility;

    /**
     *  Indicates if the variation currently is visible in item lists. 3 = Variation is visible in item list because $isHiddenInCategoryList is false. 2, 1 = Variation is visible in item list because $isVisibleInListIfNetStockIsPositive is true and net stock is positive. 0, -1 = Variation is invisible in item list because $isInvisibleInListIfNetStockIsNotPositive is true and net stock is 0 or negative. -2 = Variation is invisible in item list because $isHiddenInCategoryList is true.
     * @var integer
     */
    public $automaticListVisibility;

    /**
     *  Flag that indicates if the variation is hidden in the category list. If true, the variation will not be shown in any item category and will not be returned as a search result. The variation can only be accessed via its URL.
     * @var boolean
     */
    public $isHiddenInCategoryList;

    /**
     *  The default shipping costs for the variation.
     * @var float
     */
    public $defaultShippingCosts;

    /**
     *  Display unit price in the online store
     * @var boolean
     */
    public $mayShowUnitPrice;

    /**
     *  The sales rank of the variation. This ranking is used to position top items automatically if the option <b>Automatically sort by monthly sales</b> (<b>Settings » Client (store) » Standard » Item layouts » Basic settings</b>) is set to <b>Yes</b>. The sales ranking is calculated daily. If the option <b>Automatically sort by monthly sales</b> is set to <b>No</b>, a value of 0 is returned and variations are sorted by position instead.
     * @var integer
     */
    public $salesRank;

    /**
     *
     * @var integer
     */
    public $parentVariationId;

    /**
     *
     * @var float
     */
    public $parentVariationQuantity;

    /**
     *
     * @var integer
     */
    public $singleItemCount;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Categories are not inherited from the main variation.ID of the item's main variation = Inheritance of categories is active.
     * @var integer
     */
    public $categoryVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Markets are not inherited from the main variation.ID of the item's main variation = Inheritance of markets is active.
     * @var integer
     */
    public $marketVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Clients (stores) are not inherited from the main variation.ID of the item's main variation = Inheritance of clients (stores) is active.
     * @var integer
     */
    public $clientVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Sales prices are not inherited from the main variation.ID of the item's main variation = Inheritance of sales prices is active.
     * @var integer
     */
    public $salesPriceVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Suppliers are not inherited from the main variation.ID of the item's main variation = Inheritance of suppliers is active.
     * @var integer
     */
    public $supplierVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Warehouses are not inherited from the main variation.ID of the item's main variation = Inheritance of warehouses is active.
     * @var integer
     */
    public $warehouseVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Properties are not inherited from the main variation.ID of the item's main variation = Inheritance of properties is active.
     * @var integer
     */
    public $propertyVariationId;

    /**
     *  Either the ID of the variation or the ID of the item's main variation. No other values are permitted.ID of the variation = Tags are not inherited from the main variation.ID of the item's main variation = Inheritance of tags is active.
     * @var integer
     */
    public $tagVariationId;

    /**
     *  Indicates if the gross bundle weight is calculated by its components.
     * @var boolean
     */
    public $hasCalculatedBundleWeight;

    /**
     *  Indicates if the net bundle weight is calculated by its components.
     * @var boolean
     */
    public $hasCalculatedBundleNetWeight;

    /**
     *  Indicates if the net purchase price is calculated by its components.
     * @var boolean
     */
    public $hasCalculatedBundlePurchasePrice;

    /**
     *  Indicates if the moving average net purchase price is calculated by its components.
     * @var boolean
     */
    public $hasCalculatedBundleMovingAveragePrice;

}
