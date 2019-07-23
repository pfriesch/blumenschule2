<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Report;

use BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Report\RawData;

class RawDataSearchResult
{
    /**
     *  The last evaluated key as base64, provide that as the starting point for the next query (pagination).
     * @var string
     */
    public $after;
    
    /**
     *  The raw data search result (List)
     * @var RawData[]
     */
    public $searchResult;
    
}
