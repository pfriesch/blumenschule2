<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\ShopBuilder;

class ContentLink
{
    /**
     *  The ID of the content link
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the content
     * @var integer
     */
    public $contentId;
    
    /**
     *  The name of the container
     * @var string
     */
    public $containerName;
    
    /**
     *  The Id of the plugin set
     * @var integer
     */
    public $pluginSetId;
    
    /**
     *  The language where the content is linked to.
     * @var string
     */
    public $language;
    
    /**
     *  Indicates if the link is active and the content should be visible for the frontend.
     * @var boolean
     */
    public $active;
    
    /**
     *  The content type the content is linked to
     * @var string
     */
    public $relatedContentType;
    
    /**
     *  The container name the content is linked to
     * @var string
     */
    public $relatedContainerName;
    
}
