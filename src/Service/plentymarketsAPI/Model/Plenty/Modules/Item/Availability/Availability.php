<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Availability;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Availability\AvailabilityName;

class Availability
{
    /**
     *  The ID of this availability
     * @var integer
     */
    public $id;
    
    /**
     *  The icon of this availability
     * @var string
     */
    public $icon;
    
    /**
     *  The average delivery time in days for this availability
     * @var integer
     */
    public $averageDays;
    
    /**
     *   (List)
     * @var AvailabilityName[]
     */
    public $names;
    
}
