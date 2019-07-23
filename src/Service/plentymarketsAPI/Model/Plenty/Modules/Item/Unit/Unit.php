<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Unit;

class Unit
{
    /**
     *  The unique ID of the unit
     * @var integer
     */
    public $id;
    
    /**
     *  The position of the unit
     * @var integer
     */
    public $position;
    
    /**
     *  The International System of Units (ISO) <a href="https://developers.plentymarkets.com/rest-doc/introduction#units"  target="_blank">code</a> of the unit
     * @var string
     */
    public $unitOfMeasurement;
    
    /**
     *  Flag that indicates if decimal places are allowed for this unit of measurement. If false, only integer values are allowed for the unit.
     * @var boolean
     */
    public $isDecimalPlacesAllowed;
    
}
