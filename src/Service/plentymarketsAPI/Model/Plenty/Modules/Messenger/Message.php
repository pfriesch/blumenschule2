<?php


namespace App\Service\plentymarketsAPI\Model\Plenty\Modules\Messenger;

class Message
{
    /**
     *  The UUID5 identifier of the message
     * @var string
     */
    public $uuid;

    /**
     *  The plenty ID hash
     * @var string
     */
    public $plentyIdHash;

    /**
     *  The uuid5 of the parent message.
     * @var string
     */
    public $parentUuid;

    /**
     *  Whether the message is wispered (not visible for the contact/order linked to the message) or not.
     * @var boolean
     */
    public $whispered;

    /**
     *  An array with tag IDs assigned to the message
     * @var array
     */
    public $tags;

    /**
     *  The title of the message
     * @var string
     */
    public $title;

    /**
     *  The first two lines of the message without any markup
     * @var string
     */
    public $preview;

    /**
     *  The content of the message
     * @var string
     */
    public $message;

    /**
     *  The amount of attached files (readonly)
     * @var integer
     */
    public $attachedFilesCount;

    /**
     *  The date the messages setted done.
     * @var string
     */
    public $doneAt;

    /**
     *  The creation date of the message.
     * @var string
     */
    public $createdAt;

    /**
     *  The date of the last update of the message.
     * @var string
     */
    public $updatedAt;

    /**
     *  The date the message was deleted.
     * @var string
     */
    public $deletedAt;

    /**
     *  The id of the user deleted the message.
     * @var integer
     */
    public $deletedBy;

}
