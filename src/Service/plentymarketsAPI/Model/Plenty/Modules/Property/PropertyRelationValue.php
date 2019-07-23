<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyRelationValue
{
    /**
     *  The ID of the property relation value
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the property relation
     * @var integer
     */
    public $propertyRelationId;
    
    /**
     *  The language of the property relation value
     * @var string
     */
    public $lang;
    
    /**
     *  The value of the property relation
     * @var string
     */
    public $value;
    
    /**
     *  The description of the property relation value
     * @var string
     */
    public $description;
    
}
