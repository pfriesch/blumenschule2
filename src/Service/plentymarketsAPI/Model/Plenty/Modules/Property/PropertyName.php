<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyName
{
    /**
     *  The ID of the property name
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The language of the property name as ISO 639-1 language code, e.g. en for English
     * @var string
     */
    public $lang;

    /**
     *  The name of the property
     * @var string
     */
    public $name;

    /**
     *  The description of the property
     * @var string
     */
    public $description;

}
