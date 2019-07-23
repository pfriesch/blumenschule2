<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\OptionTemplate;

class OptionTemplate
{
    /**
     *  The ID of the option template.
     * @var integer
     */
    public $id;
    
    /**
     *  The name of the option template.
     * @var string
     */
    public $name;
    
    /**
     *  The listing options of the option template.
     * @var array
     */
    public $listing;
    
    /**
     *  The listing market options of the option template.
     * @var array
     */
    public $listingMarket;
    
    /**
     *  The market options of the option template.
     * @var array
     */
    public $marketOptions;
    
}
