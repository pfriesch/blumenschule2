<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Ebay\ItemSpecific;

class ItemSpecific
{
    /**
     *  A recommended Item Specific name.
     * @var string
     */
    public $name;
    
    /**
     *  Minimum number of values that you can specify for this Item Specific.
     * @var integer
     */
    public $minValues;
    
    /**
     *  Maximum number of values that you can specify for this Item Specific.
     * @var integer
     */
    public $maxValues;
    
    /**
     *  Controls whether you can specify your own name and value in listing requests, or if you need to use a name and/or value that eBay has defined.
     * @var string
     */
    public $selectionMode;
    
    /**
     *  The data type (e.g., date) that eBay expects the value to adhere to in listing requests. Only returned if the data type is not Text. In some cases, more details about the data type are returned in the `valueFormat` field.
     * @var string
     */
    public $valueType;
    
    /**
     *  The format of the data type (e.g., date format) that eBay expects the item specific's value to adhere to in listing requests. A data type identified by the `valueType` field may have different representations, and `valueFormat` specifies the precise format that is required.
     * @var string
     */
    public $valueFormat;
    
    /**
     *  Help-text defines the purpose of the Item Specific. The help text will be shown only when it is available for the particular Item Specific.
     * @var string
     */
    public $helpText;
    
    /**
     *  A page on the eBay Web site with context-specific help tips that provide useful information about this Item Specific. Only returned when an applicable page is available in the system.
     * @var string
     */
    public $helpUrl;
    
    /**
     *  Indicates whether the name (e.g., Color) can (or must) be used to classify the variation pictures
     * @var string
     */
    public $variationPicture;
    
    /**
     *  Indicates whether the recommended name/value pair can be used as variation attributes in a fixed-price listing call. For example, a given category could disable a name like Brand in variation specifics (if Brand is only allowed in the item specifics at the Item level). The same category could enable a name like Size for variation specifics (in addition to recommending it for item specifics). If not returned, then the name/value can be used for both variation specifics and item specifics.
     * @var string
     */
    public $variationSpecifics;
    
    /**
     *  The available values.
     * @var array
     */
    public $values;
    
}
