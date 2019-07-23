<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeMap
{
    /**
     *  The unique ID of the market.
     * @var float
     */
    public $marketId;
    
    /**
     *  The unique ID of the attribute.
     * @var integer
     */
    public $attributeId;
    
    /**
     *  The name of the attribute map. The name must be unique and must not contain commas, colons, semicolons or quotation marks. It is not visible in the plentymarkets front end.
     * @var string
     */
    public $name;
    
    /**
     *  The information regarding the marketplace.
     * @var string
     */
    public $marketInformation1;
    
    /**
     *  The information regarding the marketplace.
     * @var string
     */
    public $marketInformation2;
    
}
