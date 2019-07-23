<?php


namespace BSApp\Service\plentymarketsAPI\Model;


class PaginatedResponse
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $totalsCount;

    /**
     * @var bool
     */
    public $isLastPage;

    /**
     * @var int
     */
    public $lastPageNumber;

    /**
     * @var int
     */
    public $firstOnPage;

    /**
     * @var int
     */
    public $lastOnPage;

    /**
     * @var int
     */
    public $itemsPerPage;

    public $entries;
}


