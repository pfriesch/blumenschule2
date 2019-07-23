<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Feedback;

class FeedbackComment
{
    /**
     *  The ID of the comment
     * @var integer
     */
    public $id;

    /**
     *  The message of the comment
     * @var string
     */
    public $message;

    /**
     *  If true, the comment is visible
     * @var boolean
     */
    public $isVisible;

}
