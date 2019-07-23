<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Attribute;

class AttributeValueName
{
    /**
     *  The unique ID of the attribute value.
     * @var integer
     */
    public $valueId;

    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries" target="_blank">language</a> of the attribute value.
     * @var string
     */
    public $lang;

    /**
     *  The name of the attribute value. This attribute value name is displayed in the online store.
     * @var string
     */
    public $name;

}
