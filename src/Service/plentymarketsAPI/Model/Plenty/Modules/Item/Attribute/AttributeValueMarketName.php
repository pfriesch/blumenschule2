<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeValueMarketName
{
    /**
     *  The unique ID of the attribute value.
     * @var integer
     */
    public $valueId;
    
    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries" target="_blank">language</a> of the attribute value market.
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the attribute value market.
     * @var string
     */
    public $name;
    
    /**
     *  
     * @var integer
     */
    public $attributeId;
    
    /**
     *  
     * @var string
     */
    public $referenceType;
    
}
