<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Comment;

class Comment
{
    /**
     *  The ID of the comment
     * @var integer
     */
    public $id;

    /**
     *  The reference type. Valid types are:
     *
     *    category
     *    contact
     *    order
     *  item_variation
     *  order_item
     *
     * @var string
     */
    public $referenceType;

    /**
     *  The reference value
     * @var integer
     */
    public $referenceValue;

    /**
     *  The ID of the user
     * @var integer
     */
    public $userId;

    /**
     *  The date when the comment was created
     * @var string
     */
    public $createdAt;

    /**
     *  The comment text
     * @var string
     */
    public $text;

    /**
     *  If true, the comment is visible for the associated contact.
     * @var boolean
     */
    public $isVisibleForContact;

}
