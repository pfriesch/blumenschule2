<?php


namespace BSApp\Tests\plentymarketsAPI;


use BSApp\Service\plentymarketsAPI\Api\AuthenticationApi;
use BSApp\Service\plentymarketsAPI\Api\ItemApi;
use BSApp\Service\plentymarketsAPI\Configuration;
use GuzzleHttp\Client;
use http\Exception;
use PHPUnit\Framework\TestCase;
use stdClass;

class AuthenticationTest extends TestCase
{

    public function testAuthentication()
    {

        $apiInstance = new AuthenticationApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            Configuration::getDefaultConfiguration()
        );
        $body = new stdClass; // object |
        $body->username = $_SERVER['PLENTY_USERNAME'];
        $body->password = $_SERVER['PLENTY_PASSWORD'];

        try {
            $result = $apiInstance->restLoginPost($body);
            Configuration::getDefaultConfiguration()->setAccessToken($result->getAccessToken());

        } catch (Exception $e) {
            echo 'Exception when calling AuthenticationApi->restLoginPost: ', $e->getMessage(), PHP_EOL;
        }

        $apiInstance = new ItemApi(
        // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
        // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            Configuration::getDefaultConfiguration()
        );
        $item_id = 1424; // int |
        $lang = "DE"; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.

        try {
            $result = $apiInstance->restItemsItemIdGet($item_id, $lang);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ItemApi->restItemsItemIdGet: ', $e->getMessage(), PHP_EOL;
        }
        $with = null; // string | Includes the specified variation information in the results. The following parameters are available: itemProperties, itemCrossSelling, variations, itemImages, itemShippingProfiles, ebayTitles
        $lang = "DE"; // string | The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
        $page = null; // int | Limits the results to a specific page. The page number must be specified.
        $items_per_page = null; // int | Limits the number of results listed per page to a specific number. The number of variations to be listed per page must be specified.
        $name = "lavendel"; // string | Filter restricts the list of results to items with the specified item name. An item name must be specified.
        $manufacturer_id = null; // string | Filter restricts the list of results to items with the specified manufacturerId.
        $tag_id = null; // int | Filter restricts the list of results to items with the specified tagId. More than one ID should be separated by commas.
        $flag_one = null; // int | Filter restricts the list of results to items with the specified flagOne.
        $flag_two = null; // int | Filter restricts the list of results to items with the specified flagTwo.
        $updated_between = null; // string | Filter restricts the list of results to items updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items updated since 2016-01-01. The PHP function strtotime is also supported.
        $variation_updated_between = null; // string | Filter restricts the list of results to items with variations that were updated during the specified period. The end date (to) is optional. If no end date is specified, items with variations updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../items?updatedBetween=1451606400,1456790400 will list items with variations that were updated between 2016-01-01 and 2016-03-01. .../items?updatedBetween=1451606400 will list items with variations that were updated since 2016-01-01. The PHP function strtotime is also supported.
        $variation_related_updated_between = null; // string | Filter restricts the list of results to items with variations for which related information was updated during the specified period. Related information is defined as information linked to the variation, i.e. barcodes, categories, images, markets, clients (stores), prices, suppliers, warehouses and the default category. See variationUpdatedBetween for supported formats.

        try {
            $result = $apiInstance->restItemsGet($with, $lang, $page, $items_per_page, $name, $manufacturer_id, $tag_id, $flag_one, $flag_two, $updated_between, $variation_updated_between, $variation_related_updated_between);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ItemApi->restItemsGet: ', $e->getMessage(), PHP_EOL;
        }
    }

}