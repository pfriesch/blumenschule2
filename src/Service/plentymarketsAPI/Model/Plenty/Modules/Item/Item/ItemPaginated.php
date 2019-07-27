<?php


namespace BSApp\Service\plentymarketsAPI\Model\Plenty\Modules\Item\Item;

use BSApp\Service\plentymarketsAPI\Model\PaginatedResponse;

class ItemPaginated extends PaginatedResponse
{
    /**
     * @var Item[]
     */
    public $entries;

    public function asLabelFormData()
    {
        $mappedItems = [];

        for ($e = 0; $e < count($this->entries); $e++) {
            $labelFormData = $this->entries[$e]->asLabelFormData();
            array_push($mappedItems, ...$labelFormData);
        }
        return $mappedItems;
    }
}
