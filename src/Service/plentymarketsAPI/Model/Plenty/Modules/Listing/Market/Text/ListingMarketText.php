<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\Market\Text;

class ListingMarketText
{
    /**
     *  The ID of the listing market text.
     * @var integer
     */
    public $id;

    /**
     *  The ID of the listing market the text belongs to.
     * @var integer
     */
    public $listingMarketId;

    /**
     *  The language of the listing market text. Availabel values: 'de', 'en', 'fr', 'it', 'es', 'tr', 'nl', 'pl', 'nn', 'da', 'se', 'cz', 'ru', 'sk', 'cn', 'vn', 'pt', 'bg', 'ro'.
     * @var string
     */
    public $lang;

    /**
     *  The title of the listing market text.
     * @var string
     */
    public $title;

    /**
     *  The subtitle of the listing market text.
     * @var string
     */
    public $subtitle;

    /**
     *  The description of the listing market text.
     * @var string
     */
    public $description;

}
