<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\ServiceProvider;

class ShippingServiceProvider
{
    /**
     *  The ID of the shipping service provider
     * @var integer
     */
    public $id;

    /**
     *  The name of the shipping service provider
     * @var string
     */
    public $name;

    /**
     *  The optional ID of the plugin when the shipping service provider is registered as a plugin
     * @var integer
     */
    public $pluginId;

    /**
     *  The time the shipping service provider was created
     * @var string
     */
    public $createdAt;

    /**
     *  The time the shipping service provider was updated
     * @var string
     */
    public $updatedAt;

}
