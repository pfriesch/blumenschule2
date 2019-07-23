<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Property;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Property\OrderPropertyTypeName;

class OrderPropertyType
{
    /**
     *  The ID of the property type
     * @var integer
     */
    public $id;
    
    /**
     *  Flag that states if this type can be deleted or not.
     * @var boolean
     */
    public $isErasable;
    
    /**
     *  The position for sorting
     * @var integer
     */
    public $position;
    
    /**
     *  The data type of the values of this property type. Valid types are:
     * 
     * 	string
     * 	int
     * 	numeric
     * 	bool
     * 	enum(val1,val2,val3,...)
     * 
     * @var string
     */
    public $cast;
    
    /**
     *  The names of the order property types. (List)
     * @var OrderPropertyTypeName[]
     */
    public $names;
    
}
