<?php

namespace Acme\BSDataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BSDataBundle\Entity\Plant;
use Acme\BSDataBundle\Form\PlantType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Plant controller.
 *
 * @Route("/data/plant")
 */
class PlantController extends Controller
{
    /**
     * Lists all Plant entities.
     *
     * @Route("/", name="BSData_plant")
     * @Template()
     */
    public function indexAction($page = 1)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM BSDataBundle:Plant a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $page,
            50
        );
        return array('pagination' => $pagination);

    }

    /**
     * Finds and displays a Plant by Article_No.
     *
     * @Route("/sname/{$search}", name="BSData_plant_search_name")
     * @Template()
     */
    public function searchNameAction($search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSDataBundle:Plant p')
            ->add('where',
                $qb->expr()->like('p.name', '?1')
            )->setParameter('1', '%'.$search.'%' );
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSDataBundle:Plant:index.html.twig', array(
            'pagination'=>$pagination  ));
    }

    /**
     * Finds and displays a Plant entity.
     *
     * @Route("/{id}/show", name="BSData_plant_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }




    /**
     * Displays a form to create a new Plant entity.
     *
     * @Route("/new", name="BSData_plant_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Plant();
        $form   = $this->createForm(new PlantType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Plant entity.
     *
     * @Route("/create", name="BSData_plant_create")
     * @Method("post")
     * @Template("BSDataBundle:Plant:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Plant();
        $request = $this->getRequest();
        $form    = $this->createForm(new PlantType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_plant_edit', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Plant entity.
     *
     * @Route("/{id}/edit", name="BSData_plant_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $editForm = $this->createForm(new PlantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Plant entity.
     *
     * @Route("/{id}/update", name="BSData_plant_update")
     * @Method("post")
     * @Template("BSDataBundle:Plant:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $editForm   = $this->createForm(new PlantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_plant_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Plant entity.
     *
     * @Route("/{id}/delete", name="BSData_plant_delete")

     */
    public function deleteAction($id)
    {
        //$form = $this->createDeleteForm($id);
        $request = $this->getRequest();

       // $form->bind($request);

       // if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BSDataBundle:Plant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Plant entity.');
            }

            $em->remove($entity);
            $em->flush();
       // }

        return $this->redirect($this->generateUrl('BSData_plant'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }



    /**

     *
     * @Route("/{id}/createProduct", name="BSData_plant_crate_product")
     * @Template()
     */
    public function crateProductAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Plant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }
        $soap = new \Acme\PlentyMarketsBundle\Controller\PlentySoapClient($this,$this->getDoctrine());

        $return = $soap->doAddItemsBase($entity->getCode(),0,$entity->getName(),$entity->getLatein(),$entity->getLabeltext());

        return $this->redirect($this->generateUrl('BSData_plant'));

    }


    /**
     * Finds and displays a Plant by Article_No.
     *
     * @Route("/search/code/{$search}", name="BSData_plant_search_code")
     * @Template()
     */
    public function searchCodeAction($page,$search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSDataBundle:Plant p')
            ->add('where',
                $qb->expr()->like('p.code', '?1')
            )->setParameter('1', $search.'%');


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $page,//$this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSDataBundle:Plant:index.html.twig', array(
            'pagination'=>$pagination  ));
    }
    /**
     * Finds and displays a Plant by Article_No.
     *
     * @Route("/autotext/{$search}", name="BSData_plant_autotext")
     * @Template()
     */
    public function searchAutotextAction($type,$search)
    {
        $type = str_replace('[','',$type);
        $type = str_replace(']','',$type);

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p.'.$type.' term')
            ->add('from', 'BSDataBundle:Plant p')
            ->add('where',
                $qb->expr()->like('p.'.$type, "'%".$search."%'")
            )
            ->addGroupBy('p.'.$type)
        ;


        $SQL = $qb->getQuery()->getSQL();
        $results = $qb->getQuery()->getArrayResult();

        $response = new Response( json_encode($results));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }





    /**
     * Finds and displays a Plant by Article_No.
     *
     * @Route("/search/latein/{$search}", name="BSData_plant_search_latein")
     * @Template()
     */
    public function searchLateinAction($page,$search)
    {


        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSDataBundle:Plant p')
            ->add('where',
                $qb->expr()->like('p.latein', '?1')
            )->setParameter('1', $search.'%' );





        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $page,//$this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSDataBundle:Plant:index.html.twig', array(
            'pagination'=>$pagination  ));
    }







}
