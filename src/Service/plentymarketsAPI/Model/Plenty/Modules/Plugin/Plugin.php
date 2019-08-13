<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Plugin;

use App\Service\plentymarketsAPI\Model\Plenty\Modules\System\Webstore;

class Plugin
{
    /**
     *  The ID of the plugin
     * @var integer
     */
    public $id;

    /**
     *  The name of the plugin
     * @var string
     */
    public $name;

    /**
     *  The position of the plugin. The position is used to determine the plugin
     * order.
     * @var integer
     */
    public $position;

    /**
     *  Shows whether the plugin is active in Stage. Inactive plugins will not
     * be provisioned in Stage.
     * @var boolean
     */
    public $activeStage;

    /**
     *  Shows whether the plugin is active in Productive. Inactive plugins will
     * not be provisioned in Productive.
     * @var boolean
     */
    public $activeProductive;

    /**
     *  The date that the plugin was created.
     * @var string
     */
    public $created_at;

    /**
     *  The date that the plugin was updated last.
     * @var string
     */
    public $updated_at;

    /**
     *  Shows whether the plugin is provisioned in Stage.
     * @var boolean
     */
    public $inStage;

    /**
     *  Shows whether the plugin is provisioned in Productive.
     * @var boolean
     */
    public $inProductive;

    /**
     *
     * @var boolean
     */
    public $isConnectedWithGit;

    /**
     *
     * @var array
     */
    public $updateInformation;

    /**
     *  The type of the plugin. The following plugin types are availabel:
     *
     *     Template
     *     Export
     *
     * @var string
     */
    public $type;

    /**
     *  Whether or not the plugin is installed. This will be false for plugins
     * that have been purchased from the marketplace but have not yet been installed in any set.
     * @var boolean
     */
    public $installed;

    /**
     *  The version of the plugin
     * @var string
     */
    public $version;

    /**
     *  The version of the plugin in stage
     * @var string
     */
    public $versionStage;

    /**
     *  The version of the plugin in productive
     * @var string
     */
    public $versionProductive;

    /**
     *  The description text of the plugin
     * @var string
     */
    public $description;

    /**
     *  The namespace of the plugin
     * @var string
     */
    public $namespace;

    /**
     *  A list of plugins with dependencies to the plugin
     * @var array
     */
    public $dependencies;

    /**
     *  The name of the plugin author
     * @var string
     */
    public $author;

    /**
     *  The price of the plugin
     * @var float
     */
    public $price;

    /**
     *  A list of plugin keywords
     * @var array
     */
    public $keywords;

    /**
     *  A list of plugins that are required by the plugin
     * @var array
     */
    public $require;

    /**
     *  A list of required plugins that are not installed
     * @var array
     */
    public $notInstalledRequirements;

    /**
     *  A list of required plugins that are not active in stage
     * @var array
     */
    public $notActiveStageRequirements;

    /**
     *  A list of required plugins that are not active in productive
     * @var array
     */
    public $notActiveProductiveRequirements;

    /**
     *  The list of classes to execute once on plugin build
     * @var array
     */
    public $runOnBuild;

    /**
     *  The list of classes to execute on every plugin build
     * @var array
     */
    public $checkOnBuild;

    /**
     *  The author icon
     * @var string
     */
    public $authorIcon;

    /**
     *  The plugin icon
     * @var string
     */
    public $pluginIcon;

    /**
     *  The plugin license
     * @var string
     */
    public $license;

    /**
     *
     * @var array
     */
    public $shortDescription;

    /**
     *  is closed source
     * @var boolean
     */
    public $isClosedSource;

    /**
     *  path in the inbox (closed source, open source)
     * @var string
     */
    public $inboxPath;

    /**
     *  The plugin name displayed in marketplace
     * @var array
     */
    public $marketplaceName;

    /**
     *  Whether this plugin was installed from marketplace, git or local
     * @var string
     */
    public $source;

    /**
     *  A list of included javascript files
     * @var array
     */
    public $javaScriptFiles;

    /**
     *  A list of provided containers with name and description
     * @var array
     */
    public $containers;

    /**
     *  A list of data providers with name and description
     * @var array
     */
    public $dataProviders;

    /**
     *
     * @var array
     */
    public $categories;

    /**
     *  webhookUrl
     * @var string
     */
    public $webhookUrl;

    /**
     *  is external tool
     * @var boolean
     */
    public $isExternalTool;

    /**
     *  A list of urls for the external tool
     * @var array
     */
    public $directDownloadLinks;

    /**
     *  A forward link to the external tool developers page
     * @var string
     */
    public $forwardLink;

    /**
     *  The branch to checkout for this particular Plugin
     * @var string
     */
    public $branch;

    /**
     *  Determines if the plugin offers a trial period for plentyMarketplace
     * @var boolean
     */
    public $offerTrial;

    /**
     *  Determines if the plugin offers freemium functionality
     * @var boolean
     */
    public $offerFreemium;

    /**
     *  A list of clients (stores) activated for the plugin (List)
     * @var Webstore[]
     */
    public $webstores;

    /**
     *  Array of PluginSet Ids where this plugin is contained.
     * @var array
     */
    public $pluginSetIds;

}
