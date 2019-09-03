<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyGroupOption
{
    /**
     *  The ID of the property group option
     * @var integer
     */
    public $id;

    /**
     *  The ID of the property group
     * @var integer
     */
    public $propertyGroupId;

    /**
     *  The identifier of the property group option
     * @var string
     */
    public $groupOptionIdentifier;

    /**
     *  The value of the property group option
     * @var string
     */
    public $value;

}
