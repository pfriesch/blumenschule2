<?php

namespace App\Controller;

use App\Service\plentymarketsAPI\BSPlentyService;
use phpDocumentor\Reflection\Types\Integer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;

use setasign\Fpdi\Tcpdf\Fpdi;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Product controller.
 * @Route("/")
 */
class ProductController extends AbstractController
{

//    private $limit = 50;

    /**
     * Matches / exactly
     * @Route("/", name="label_index")
     */
    public function indexAction(BSPlentyService $plentyService)
    {

        return $this->render('product/label.html.twig', array(
            'urlPDF' => "/publicprint/label.pdf",
            'storageLocations' => $plentyService->getStorageLocations()
//            'data' => (object)[]

        ));


    }

    private function buildlabel($pdf, \App\Entity\Item $item, $width = 98, $height = 25)
    {

        $pdf->AddPage('L', array($width, $height));
        //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

        $pdf->SetFont('helvetica', 'B', 11);
        //$pdf->Write(1,$item->getName(),'',false,'L',1);
        //$pdf->Cell(2, 6, $item->getName(),1,1);
        $pdf->Text(0, 0, $item->name, false, false, true, 0, 1);
        $pdf->SetFont('helvetica', 'B', 8);
        $pdf->Text(32, 4, $item->name_botanic, false, false, true, 0, 1);
        //$pdf->Cell(2, 6, $item->getName2(),1,1);
        //$pdf->Write(1,$item->getName(),'',false,'L',1);

        $style = array(
            'position' => '',
            'align' => 'L',
            'stretch' => false,
            'fitwidth' => false,
            'cellfitalign' => '',
            'border' => false,
            'hpadding' => '0',
            'vpadding' => '0',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255),
            'text' => false,
            'font' => 'helvetica',
            'fontsize' => 8,
            'stretchtext' => 0
        );
        //( 	code,	 	type,		x = '', 	y = '',	w = '',	h = '',xres = '',style = '',align = '')

        $pdf->write1DBarcode($item->variant_id, 'EAN8', 1, 8, 30, 10, 0.5, $style, 'T');
        $pdf->Text(2, 17, $item->code . ' - ' . $item->article_id, false, false, true, 0, 1);
        $pdf->SetFont('helvetica', '', 7);
        $strings = $this->split_words($item->label_text);
        $line = 0;
        foreach ($strings as $s) {
            $pdf->Text(30, 7 + $line, $s, false, false, true, 0, 1);
            $line += 3;
        }


        //$pdf->Cell(15, 2,  $strings[0],0,1);
        // MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
        //$pdf->MultiCell(58, 30, ,0,'L',0,1,'','');

        return $pdf;

    }

    function split_words($string, $max = 58)
    {
        //$words = str_word_count($string, 1);
        $words = explode(' ', trim($string));


        $lines = array();
        $line = '';

        foreach ($words as $k => $word) {
            $length = strlen($line . ' ' . $word);
            if ($length <= $max) {
                $line .= ' ' . trim($word);
            } else if ($length > $max) {
                if (!empty($line)) $lines[] = $line;
                $line = trim($word);
            } else {
                $lines[] = trim($line) . ' ' . $word;
                $line = '';
            }
        }
        $lines[] = ($line = trim($line)) ? $line : $word;

        return $lines;
    }

    /**
     * @Route("/item/search/{search}", name="search")
     */
    public function searchAction($search, BSPlentyService $plentyService)
    {
        $result = $plentyService->searchItemsByName($search);


        $response = new Response(json_encode(($result->asLabelFormData())));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }

    /**
     * @Route("/item/{article_id}/variant/{variation_id}/quantity/{quantity}", name="get_item")
     */
    public function getItemVariationAction($article_id, $variation_id, $quantity, Request $request, BSPlentyService $plentyService)
    {

        $article_id = (int)$article_id;
        $variation_id = (int)$variation_id;
        $quantity = (int)$quantity;

        $is_json_request = (bool)strpos($request->headers->get('accept'), "json");

        $item = $plentyService->getItemByVariantenNr($article_id, $variation_id);

        if ($quantity <= 0) {
            throw new Exception("Quantity can't be lower than 1");
        }
        $this->printAction(new \App\Entity\Item($item), $quantity, 98, 25);

        if ($is_json_request) {
            $response = new Response(json_encode($item));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        } else {
            $item['articleid'] = $article_id;
            $item['variantid'] = $variation_id;

            return $this->render('product/label.html.twig', array(
                'urlPDF' => "/publicprint/label.pdf",
                'storageLocations' => $plentyService->getStorageLocations(),
                'data' => $item
            ));
        }


    }

    public function printAction(\App\Entity\Item $item, $quantity, $width, $height)
    {
        $printTempDir = $_SERVER['DOCUMENT_ROOT'] . "/publicprint/";
        if (!is_dir($printTempDir)) {
            mkdir($printTempDir, 0777, true);
        }

        $tcpdf = new Fpdi();

        $tcpdf->SetAutoPageBreak(false, 0);
        $tcpdf->setPrintHeader(false);
        $tcpdf->setPrintFooter(false);
        $tcpdf->setCellPaddings(1, 1, 1, 1);
        $tcpdf->setCellMargins(1, 1, 1, 1);
        for ($i = 0; $i < $quantity; $i++) {
            $tcpdf = $this->buildlabel($tcpdf, $item, $width, $height);
        }


        //$pdf->Output("print/".$entity->getArticleNo().".pdf", 'F');
        $tcpdf->Output($printTempDir . "label.pdf", 'F');

        return $this->render('product/print.html.twig', array(
            'urlPDF' => "/publicprint/label.pdf",
        ));


    }

    /**
     * @Route("/product/printA6", name="print_A6")
     */
    public function printA6Action(Request $request)
    {


        $data = $request->request->get('A6Label');

        return $this->render('product/printA6.html.twig', array(

            'data' => $data
        ));
    }

    /**
     * @Route("/item/addstock", name="add_stock")
     */
    public function addStock(Request $request, BSPlentyService $plentyService)
    {
        $article_id = (int)$request->get('article_id');
        $variation_id = (int)$request->get('variant_id');
        $quantity = (int)$request->get('quantity');

        $resultStock = $plentyService->bookIncommingStock($article_id, $variation_id, $quantity);

        $response = new Response(json_encode($resultStock));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/item/removestock", name="remove_stock")
     */
    public function removeStock(Request $request, BSPlentyService $plentyService)
    {

        $article_id = (int)$request->get('article_id');
        $variation_id = (int)$request->get('variant_id');
        $new_quantity = (int)$request->get('new_quantity');

        if ($new_quantity <= 0) {
            throw new \Exception("The given quantity is 0 or lower");
        }

        $resultVariationStock = $plentyService->getItemByVariantenNrStorageLocationStock($article_id, $variation_id);


        $resultStock = $plentyService->correctStock($article_id, $variation_id, $new_quantity, $resultVariationStock['storageLocationId']);

        $result = [];
        $result['article_id'] = $article_id;
        $result['variation_id'] = $variation_id;
        $result['stock'] = $resultStock;

        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

//    /**
//     * @Route("/storageLocationsList", name="list_storage_locations")
//     */
//    public function listStorageLocations(Request $request, BSPlentyService $plentyService)
//    {
//        $result = $plentyService->getAllStorageLocations();
//        $response = new Response(json_encode($result));
//        $response->headers->set('Content-Type', 'application/json');
//
//        return $response;
//    }

    /**
     * @Route("/item/changeStorageLocation", name="change_storage_location")
     */
    public function changeStorageLocation(Request $request, BSPlentyService $plentyService)
    {
        $article_id = (int)$request->get('article_id');
        $variation_id = (int)$request->get('variant_id');
        $new_quantity = (int)$request->get('new_quantity');
        $old_storage_location = (int)$request->get('old_storage_location');
        $new_storage_location = (int)$request->get('new_storage_location');
        $result_double_stock = $plentyService->correctStock($article_id, $variation_id, $new_quantity, $new_storage_location);
        $result_fixed_stock = $plentyService->correctStock($article_id, $variation_id, 0, $old_storage_location);
        $response = new Response(json_encode($result_fixed_stock));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
