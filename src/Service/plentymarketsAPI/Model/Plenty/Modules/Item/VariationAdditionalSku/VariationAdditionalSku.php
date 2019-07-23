<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\VariationAdditionalSku;

class VariationAdditionalSku
{
    /**
     *  The ID of the additional sku
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the variation.
     * @var integer
     */
    public $variationId;
    
    /**
     *  The ID of the market reference.
     * @var float
     */
    public $marketId;
    
    /**
     *  The ID of the market account.
     * @var integer
     */
    public $marketAccountId;
    
    /**
     *  The additional sku for this variation.
     * @var string
     */
    public $sku;
    
    /**
     *  The time the SKU was created (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $createdAt;
    
    /**
     *  The time the SKU was updated (YYYY-MM-DD HH:MM:SS).
     * @var string
     */
    public $updatedAt;
    
}
