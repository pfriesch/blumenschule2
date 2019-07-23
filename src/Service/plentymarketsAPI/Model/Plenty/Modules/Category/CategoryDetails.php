<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Category;

class CategoryDetails
{
    /**
     *  The unique ID of the category these category details belong to
     * @var integer
     */
    public $categoryId;
    
    /**
     *  The unique plenty ID of the client (store) in which the category is visible. If a subcategory is linked to a client, its parent categories will be linked to this client as well.
     * @var integer
     */
    public $plentyId;
    
    /**
     *  The <a href="https://developers.plentymarkets.com/rest-doc/introduction#languages" target="_blank">language</a> of the category
     * @var string
     */
    public $lang;
    
    /**
     *  The name of the category. The same category name can be used more than once in different categories or on different category levels. However, category names must be unique within the same category or level.
     * @var string
     */
    public $name;
    
    /**
     *  The category text. The description is inserted into the online store using template variables.
     * @var string
     */
    public $description;
    
    /**
     *  The category text 2. The description 2 is inserted into the online store using template variables.
     * @var string
     */
    public $description2;
    
    /**
     *  The short description of the category. The short description can be inserted into the store's design using template variables.
     * @var string
     */
    public $shortDescription;
    
    /**
     *  HTML meta keywords to tag the category for search engines. More than one keyword can be separated by commas.
     * @var string
     */
    public $metaKeywords;
    
    /**
     *  The meta description of the category. This description is analysed by search engines and displayed in search results. This text should be treated as an advertising text to maximise click-through from search engine result pages. Current recommended limit is 156 characters.
     * @var string
     */
    public $metaDescription;
    
    /**
     *  The category name to be used for the category's URL. The same URL name can be used more than once in different categories or on different category levels. However, URL names must be unique within the same category or level. The URL name should not be changed once the category is indexed by search engines. If no URL name is specified, the name will automatically be used as the URL name when the category is created.<br />Important: Name should contain ASCII code only and no special characters. The following character strings may not be used as prefixes to URL names: a-, b-, c-, f-, fa-, p-, t-. These prefixes will be removed automatically. For instance, a-class will be changed to class automatically. However, the URL name aclass can be used for a category named A-class.
     * @var string
     */
    public $nameUrl;
    
    /**
     *  This will be displayed as the title of a tab in the web browser and as a search result in search engines. If this is left blank, the category name will be used as the title. Current recommended limit is 50 characters. Longer titles will be cut off.
     * @var string
     */
    public $metaTitle;
    
    /**
     *  The ID to the image1 of the category.
     * @var string
     */
    public $image;
    
    /**
     *  The ID to the image2 of the category.
     * @var string
     */
    public $image2;
    
    /**
     *  The path to the image1 of the category.
     * @var string
     */
    public $imagePath;
    
    /**
     *  The path to the image2 of the category.
     * @var string
     */
    public $image2Path;
    
    /**
     *  The category's URL.
     * @var string
     */
    public $previewUrl;
    
    /**
     *  The position of the category within a category level.
     * @var integer
     */
    public $position;
    
    /**
     *  The template the category is linked to for the category overview. The template determines what the category overview will look like for this category. This option is available for categories of the type <strong>Item</strong> only. Possible values: ItemViewCategoriesList, ItemViewCategoriesList2 to ItemViewCategoriesList10.
     * @var string
     */
    public $itemListView;
    
    /**
     *  The template the category is linked to for the single item view. The template determines the appearance of the single item design for this category. This option is available for categories of the type <strong>Item</strong> only. Possible values: ItemViewSingleItem, ItemViewSingleItem2 to ItemViewSingleItem5.
     * @var string
     */
    public $singleItemView;
    
    /**
     *  
     * @var string
     */
    public $pageView;
    
    /**
     *  Flag that indicates if the complete category text, i.e. the complete description, will be searched.Y = Complete text will be searched.N = Text will not be searched completely.
     * @var boolean
     */
    public $fulltext;
    
    /**
     *  Values from the meta element Robots are analyzed by Web crawlers. These values tell the crawler what it should do with the page and with the links on the page.all = Include this category in the search engine index and follow the links on the page.index = Include in the search engine index.nofollow = Do not follow the links on the page.noindex = Do not include in the search engine index.nofollow, noindex = Do not follow the links and do not include the category in the search engine index.
     * @var string
     */
    public $metaRobots;
    
    /**
     *  The URL of any category that contains the same content. This
will avoid duplicate content.
     * @var string
     */
    public $canonicalLink;
    
    /**
     *  The time the category details were last updated
     * @var string
     */
    public $updatedAt;
    
    /**
     *  The user who last updated the category details
     * @var string
     */
    public $updatedBy;
    
}
