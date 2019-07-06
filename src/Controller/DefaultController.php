<?php

namespace BSApp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    public function indexAction()
    {

        return $this->render('BSApp:Default:index.html.twig');
    }

    public function dataAction()
    {
        return $this->render('BSApp:Default:data.html.twig');
    }


    public function customerSearchAction($string)
    {
        /** @var PlentyMarketsAPI $plentyMarketsAPI */
        $plentyMarketsAPI = $this->container->get('app.plenty_markets_api');


        $customers = $plentyMarketsAPI->doGetCustomers(array('searchstring' => $string));

        $response = new Response(json_encode($customers));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }


}