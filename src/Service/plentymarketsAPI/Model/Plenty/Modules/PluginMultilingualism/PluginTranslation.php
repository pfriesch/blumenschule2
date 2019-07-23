<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\PluginMultilingualism;

class PluginTranslation
{
    /**
     *  The ID of the translation
     * @var integer
     */
    public $id;
    
    /**
     *  The ID of the plugin set
     * @var integer
     */
    public $pluginSetId;
    
    /**
     *  The name of the plugin
     * @var string
     */
    public $pluginName;
    
    /**
     *  The code of the language
     * @var string
     */
    public $languageCode;
    
    /**
     *  The file of the key
     * @var string
     */
    public $fileName;
    
    /**
     *  The translation key
     * @var string
     */
    public $key;
    
    /**
     *  The translation value
     * @var string
     */
    public $value;
    
}
