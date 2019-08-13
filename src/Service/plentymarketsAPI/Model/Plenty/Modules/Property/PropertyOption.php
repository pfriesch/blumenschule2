<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyOption
{
    /**
     *  The ID of the property option
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property
     * @var integer
     */
    public $propertyId;

    /**
     *  The identifier of the type option
     * @var string
     */
    public $typeOptionIdentifier;

}
