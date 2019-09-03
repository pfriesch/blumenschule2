<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationProperty;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationProperty\VariationPropertyValueText;

class VariationPropertyValue
{
    /**
     *  The unique ID of the link between the variation and the property value
     * @var integer
     */
    public $id;

    /**
     *  The unique ID of the variation
     * @var integer
     */
    public $variationId;

    /**
     *  The unique ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The unique ID of the property selection of the variation
     * @var integer
     */
    public $propertySelectionId;

    /**
     *  The int value of the property value of the variation
     * @var integer
     */
    public $valueInt;

    /**
     *  The float value of the property value of the variation
     * @var float
     */
    public $valueFloat;

    /**
     *  The file value of the property value of the variation
     * @var string
     */
    public $valueFile;

    /**
     *  The surcharge of the property value of the variation
     * @var float
     */
    public $surcharge;

    /**
     *   (Object)
     * @var object
     */
    public $property;

    /**
     *   (List)
     * @var VariationPropertyValueText[]
     */
    public $valueTexts;

}
