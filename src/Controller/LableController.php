<?php

namespace BSApp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LableController extends AbstractController
{

    public function indexAction($page)
    {
        $fb = $this->createFormBuilder();
        $fb->add('code', 'text');
        $fb->add('deutsch', 'text');
        $fb->add('latein', 'text');
        $search_form = $fb->getForm();

        return $this->render('BSLableBundle:Default:base.html.twig', array('search_form' => $search_form->createView(), 'page' => $page));
    }


    public function searchAction($search)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT a FROM BSApp:Product a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $page,//$this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );


        return $this->render('BSLableBundle:Default:base.html.twig', array('form' => $search_form->createView()));

        //$response = new Response( json_encode($result));
        //$response->headers->set('Content-Type', 'application/json');

        //return $response;
    }

    public function autofillAction($search)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $dql = "SELECT a FROM BSApp:Product a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );


        return $this->render('BSLableBundle:Default:base.html.twig', array('form' => $form->createView()));

        //$response = new Response( json_encode($result));
        //$response->headers->set('Content-Type', 'application/json');

        //return $response;
    }

    public function printAction()
    {
        $fb = $this->createFormBuilder();
        $fb->add('deutsch', 'text');
        $fb->add('latein', 'text');
        $form = $fb->getForm();

        return $this->render('BSLableBundle:Default:base.html.twig', array('form' => $form->createView()));
    }
}
