<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Feedback;

class Feedback
{
    /**
     *  The ID of the feedback
     * @var integer
     */
    public $id;

    /**
     *  The title of the feedback
     * @var string
     */
    public $title;

    /**
     *  The name of the feedback's author
     * @var string
     */
    public $authorName;

    /**
     *  If true, the feedback is visible
     * @var boolean
     */
    public $isVisible;

}
