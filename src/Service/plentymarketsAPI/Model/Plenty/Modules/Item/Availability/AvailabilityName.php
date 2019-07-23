<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Availability;

class AvailabilityName
{
    /**
     *  The ID of the availability that the name belongs to
     * @var integer
     */
    public $availabilityId;
    
    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#languages" target="_blank">language code</a> of the availability name
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the item availability in the specified language
     * @var string
     */
    public $name;
    
}
