<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyAvailability
{
    /**
     *  The ID of the property availability
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The type of the property availability
     * @var string
     */
    public $type;

    /**
     *  The value of the property availability
     * @var float
     */
    public $value;

}
