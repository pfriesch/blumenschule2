<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Market\Settings;

class Settings
{
    /**
     *  The ID of the market settings.
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the marketplace.
     * @var integer
     */
    public $marketplaceId;
    
    /**
     *  The type of the current market settings. Possible values are: attribute, attributeValue, property, category, shipping.
     * @var string
     */
    public $type;
    
    /**
     *  The market settings for the current marketplace.
     * @var array
     */
    public $settings;
    
}
