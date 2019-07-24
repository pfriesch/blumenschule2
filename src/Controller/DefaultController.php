<?php

namespace BSApp\Controller;

use BSApp\Service\plentymarketsAPI\BSPlentyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    public function indexAction()
    {

        return $this->render('index/index.html.twig');
    }

    public function dataAction()
    {
        return $this->render('BSApp:Default:data.html.twig'); #TODO invalid template path
    }


    public function customerSearchAction($string, BSPlentyService $plentyMarketsAPI)
    {

        $customers = $plentyMarketsAPI->doGetCustomers(array('searchstring' => $string));

        $response = new Response(json_encode($customers));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }


}
