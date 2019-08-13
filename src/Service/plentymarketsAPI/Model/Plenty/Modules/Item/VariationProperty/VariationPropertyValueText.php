<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationProperty;

class VariationPropertyValueText
{
    /**
     *  The unique ID of the link between the variation and the property
     * @var integer
     */
    public $valueId;

    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#languages" target="_blank">language</a> of the property value text
     * @var string
     */
    public $lang;

    /**
     *  The text saved for the property of the type Text
     * @var string
     */
    public $value;

}
