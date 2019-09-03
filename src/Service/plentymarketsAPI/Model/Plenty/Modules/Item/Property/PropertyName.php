<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Property;

class PropertyName
{
    /**
     *  The unique ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The language code of the property name
     * @var string
     */
    public $lang;

    /**
     *  The name of the property. The property name is displayed in the online store.
     * @var string
     */
    public $name;

    /**
     *  The description of the property. The property description is displayed in the online store.
     * @var string
     */
    public $description;

}
