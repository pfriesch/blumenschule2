<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Property;

class PropertyGroupName
{
    /**
     *  The ID of the property group name
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the property group
     * @var integer
     */
    public $propertyGroupId;
    
    /**
     *  The language of the property group name as ISO 639-1 language code, e.g. en for English
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the property group
     * @var string
     */
    public $name;
    
    /**
     *  The description of the property group
     * @var string
     */
    public $description;
    
}
