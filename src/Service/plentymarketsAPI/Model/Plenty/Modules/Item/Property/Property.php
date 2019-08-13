<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

class Property
{
    /**
     *  The ID of the property
     * @var integer
     */
    public $id;

    /**
     *  The position of the property
     * @var integer
     */
    public $position;

    /**
     *  The ID of the property group the property is assigned to. Value is null if property is not assigned to a property group.
     * @var integer
     */
    public $propertyGroupId;

    /**
     *  The unit of measurement of the property. Value is null if no unit is associated.
     * @var string
     */
    public $unit;

    /**
     *  The backend name of the property. The back end name is not visible to customers.
     * @var string
     */
    public $backendName;

    /**
     *  Internal comment/note saved for the property. Internal comments are not visible to customers.
     * @var string
     */
    public $comment;

    /**
     *  Permitted property values are: empty = No property typeint = A whole number can be saved for an item, e.g. a size.float = A number with decimal places can be saved for an item, e.g. a measurement.selection = One of several options can be saved for the item. The values of the property value Selection can be managed using the route PropertySelection.text = Text can be saved for an item.file = A file can be saved for an item.
     * @var string
     */
    public $valueType;

    /**
     *  Flag that indicates if items can be found by entering the property name as a search term.
     * @var boolean
     */
    public $isSearchable;

    /**
     *  Flag that indicates if the property is availabel in the order process. Depending on the property type, customers e.g. can enter a text or value or select an option from a drop-down list.
     * @var boolean
     */
    public $isOderProperty;

    /**
     *  Flag that indicates if the property will be shown on the item's page in the online store-
     * @var boolean
     */
    public $isShownOnItemPage;

    /**
     *  Flag that indicates if the property will be shown in the item listing in the online store.
     * @var boolean
     */
    public $isShownOnItemList;

    /**
     *  Flag that indicates if the property will be shown in the order process.
     * @var boolean
     */
    public $isShownAtCheckout;

    /**
     *  Flag that indicates if the property will be shown in PDF documents.
     * @var boolean
     */
    public $isShownInPdf;

    /**
     *  Display as additional costs
     * @var boolean
     */
    public $isShownAsAdditionalCosts;

    /**
     *  The surcharge for the property. Surcharges will automatically be added to the item price in the detailed view of an item and in the order process. The default value is 0.00, i.e. no surcharge. In the plentymarkets front end, the template variable PriceDynamic displays the price of a variation including the surcharge.
     * @var float
     */
    public $surcharge;

    /**
     *  The time the property was last updated.
     * @var string
     */
    public $updatedAt;

}
