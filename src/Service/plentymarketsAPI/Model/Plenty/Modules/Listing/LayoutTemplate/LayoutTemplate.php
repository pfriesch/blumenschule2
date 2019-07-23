<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Listing\LayoutTemplate;

class LayoutTemplate
{
    /**
     *  The ID of the layout template.
     * @var integer
     */
    public $id;

    /**
     *  The name of the layout template.
     * @var string
     */
    public $name;

    /**
     *  The css of the layout template.
     * @var string
     */
    public $css;

    /**
     *  The html structure of the layout template.
     * @var string
     */
    public $htmlStructure;

    /**
     *  The main frame of the layout template.
     * @var string
     */
    public $mainFrame;

    /**
     *  The additional content of the layout template.
     * @var array
     */
    public $additionalContent;

    /**
     *  The appendix type of the layout template.
     * @var string
     */
    public $appendixType;

}
