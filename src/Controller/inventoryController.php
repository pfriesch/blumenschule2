<?php

namespace BSApp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use BSApp\Entity\inventory;

/**
 * inventory controller.
 *
 */
class inventoryController extends AbstractController
{
    /**
     * Lists all inventory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BSApp:inventory')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new inventory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new inventory();
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
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new inventory entity.
     *
     */
    public function newAction()
    {
        $entity = new inventory();
        $form = $this->createForm(new inventoryType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a inventory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSApp:inventory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find inventory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing inventory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSApp:inventory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find inventory entity.');
        }

        $editForm = $this->createForm(new inventoryType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing inventory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSApp:inventory')->find($id);

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
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a inventory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BSApp:inventory')->find($id);

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
            ->getForm();
    }
}
