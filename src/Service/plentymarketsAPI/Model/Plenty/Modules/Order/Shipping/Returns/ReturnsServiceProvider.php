<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Order\Shipping\Returns;

class ReturnsServiceProvider
{
    /**
     *  The ID of the returns service provider
     * @var integer
     */
    public $id;

    /**
     *  The name of the returns service provider
     * @var string
     */
    public $name;

    /**
     *  The optional ID of the plugin when the returns service provider is registered as a plugin
     * @var integer
     */
    public $pluginId;

    /**
     *  The time the returns service provider was created
     * @var string
     */
    public $createdAt;

    /**
     *  The time the returns service provider was updated
     * @var string
     */
    public $updatedAt;

}
