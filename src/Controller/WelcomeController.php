<?php


namespace BSApp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WelcomeController extends AbstractController
{
    public function indexAction()
    {

        return $this->render('index/index.html.twig', []);
//        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }

}