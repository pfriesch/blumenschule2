<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Feedback;

class FeedbackRating
{
    /**
     *  The ID of the rating
     * @var integer
     */
    public $id;
    
    /**
     *  The value of the rating
     * @var string
     */
    public $ratingValue;
    
    /**
     *  If true, the rating is visible
     * @var boolean
     */
    public $isVisible;
    
}
