<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Wizard;

class Wizard
{
    /**
     *  The title
     * @var string
     */
    public $title;

    /**
     *  The wizard's key
     * @var string
     */
    public $key;

    /**
     *  Settings handler
     * @var string
     */
    public $settingsHandlerClass;

    /**
     *  The short description
     * @var string
     */
    public $shortDescription;

    /**
     *  The translation key
     * @var string
     */
    public $translationKey;

    /**
     *  Delete confirmation Text in deletion overlay
     * @var string
     */
    public $deleteConfirmationText;

    /**
     *  The topics
     * @var array
     */
    public $topics;

    /**
     *  Wizard's structure
     * @var array
     */
    public $steps;

    /**
     *  Wizard's listing priority in the overview
     * @var integer
     */
    public $priority;

    /**
     *  Wizard's level of relevance
     * @var string
     */
    public $relevance;

}
