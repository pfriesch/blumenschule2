<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationDescription;

class VariationDescription
{
    /**
     *  The unique ID of the description
     * @var integer|null
     */
    public $id;

    /**
     *  The unique ID of the item that this description belongs to
     * @var integer|null
     */
    public $itemId;

    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#countries" target="_blank">language code</a> of the description
     * @var string|null
     */
    public $lang;

    /**
     *  The default name of the item. By default, this name is displayed in the online store. For Default items, this name is also used for markets. Character limit: max. 240 characters.
     * @var string
     */
    public $name1;

    /**
     *  Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters.
     * @var string|null
     */
    public $name2;

    /**
     *  Alternative item name that can be used e.g. for markets. Character limit: max. 240 characters.
     * @var string|null
     */
    public $name3;

    /**
     *  The preview text. The preview text is a short description that can be displayed in item lists.
     * @var string|null
     */
    public $previewDescription;

    /**
     *  The meta description of the item. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters.
     * @var string|null
     */
    public $metaDescription;

    /**
     *  The item description. This is a detailed description displayed in the item layout of the online store.
     * @var string|null
     */
    public $description;

    /**
     *  The technical data for the item. To display the technical data in the online store, insert the template variable TechnicalData and an optional title into the template ItemViewSingleItem.
     * @var string|null
     */
    public $technicalData;

    /**
     *  The URL path of the item in the online store. By default, the URL path consists of the categories and the item name. The path will be assigned automatically by plentymarkets when the item is created and will be displayed as part of the URL when the item is selected in the online store.
     * @var string|null
     */
    public $urlPath;

    /**
     *  Meta keywords to tag the item for search engines. More than one keyword can be separated by commas.
     * @var string|null
     */
    public $metaKeywords;

}
