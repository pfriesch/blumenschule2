<?php


namespace BSApp\Tests\plentymarketsAPI;

use BSApp\Service\plentymarketsAPI\BSPlentyService;

use BSApp\Service\plentymarketsAPI\Api\OrderApi;
use BSApp\Service\plentymarketsAPI\Configuration;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class SearchArticleTest extends TestCase
{

    public function testSearchArticle()
    {
        $plentyService = new BSPlentyService();
//        $article = $plentyService->getItemById(2474);
        $articles = $plentyService->searchItemsByName("vervain");
        $result = [$articles->entries[0]->getName(),
            $articles->entries[0]->getCode(),
            $articles->entries[0]->getLabelText(),
            $articles->entries[0]->getNameBotanic(),
            $articles->entries[0]->getArticleId(),
            $articles->entries[0]->getVariantenId()];
        print_r($result);
    }

}