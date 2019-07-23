<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeName
{
    /**
     *  The id of the attribute.
     * @var integer
     */
    public $attributeId;
    
    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries" target="_blank">language</a> of the attribute.
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the attribute. This attribute name is displayed in the online store.
     * @var string
     */
    public $name;
    
}
