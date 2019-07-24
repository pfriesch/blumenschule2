<?php

namespace BSApp\Controller;

use BSApp\Form\StockType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use BSApp\Entity\Stock;
use Symfony\Component\HttpFoundation\Request;

/**
 * Stock controller.
 *
 */
class StockController extends AbstractController
{
    /**
     * Lists all Stock entities.
     *
     */
    public function indexAction()
    {
//        TODO: This action seems to be broken route:/data/stock, also according to the routing this is supposted to handle paging
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository(Stock::class)->findAll();

        return $this->render('stock/index.html.twig', array('entities' => $entities));
    }

    /**
     * Finds and displays a Stock entity.
     *
     */
    public function showAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Stock::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $deleteForm = $this->createDeleteForm($id);


        $dql = "SELECT a FROM BSApp:Product a WHERE a.stock =" . $entity->getID();
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->get('page', 1)/*page number*/,
            25/*limit per page*/
        );


        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
            'pagination' => $pagination);
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }

    private function buildStockForm()
    {
        return $this->createFormBuilder(new Stock())
            ->add('number')
            ->add('name')
            ->add('PlentyStockID')->getForm();
    }

//    /**
//     * Displays a form to create a new Stock entity.
//     *
//     */
//    public function newAction()
//    {
//        $entity = new Stock();
//        $form = $this->createForm(new StockType(), $entity);
//
//        return array(
//            'entity' => $entity,
//            'form' => $form->createView()
//        );
//    }

    /**
     * Creates a new Stock entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Stock();
        $form = $this->createForm(new StockType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_stock_show', array('id' => $entity->getId())));

        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Stock entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Stock::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $editForm = $this->createForm(new StockType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Stock entity.
     *
     */
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Stock::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stock entity.');
        }

        $editForm = $this->createForm(new StockType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_stock_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Stock entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository(Stock::class)->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stock entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('BSData_stock'));
    }

//    private function createDeleteForm($id)
//    {
//        return $this->createFormBuilder(array('id' => $id))
//            ->add('id', 'hidden')
//            ->getForm();
//    }
}
