<?php

namespace Acme\BSDataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BSDataBundle\Entity\inventory;
use Acme\BSDataBundle\Form\inventoryType;

/**
 * inventory controller.
 *
 * @Route("/data/inventory")
 */
class inventoryController extends Controller
{
    /**
     * Lists all inventory entities.
     *
     * @Route("/", name="data_inventory")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BSDataBundle:inventory')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new inventory entity.
     *
     * @Route("/", name="data_inventory_create")
     * @Method("POST")
     * @Template("BSDataBundle:inventory:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new inventory();
        $form = $this->createForm(new inventoryType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('data_inventory_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new inventory entity.
     *
     * @Route("/new", name="data_inventory_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new inventory();
        $form   = $this->createForm(new inventoryType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a inventory entity.
     *
     * @Route("/{id}", name="data_inventory_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:inventory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find inventory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing inventory entity.
     *
     * @Route("/{id}/edit", name="data_inventory_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:inventory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find inventory entity.');
        }

        $editForm = $this->createForm(new inventoryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing inventory entity.
     *
     * @Route("/{id}", name="data_inventory_update")
     * @Method("PUT")
     * @Template("BSDataBundle:inventory:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:inventory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find inventory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new inventoryType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('data_inventory_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a inventory entity.
     *
     * @Route("/{id}", name="data_inventory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BSDataBundle:inventory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find inventory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('data_inventory'));
    }

    /**
     * Creates a form to delete a inventory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
