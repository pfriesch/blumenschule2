<?php

namespace BSApp\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BSApp\Entity\quickbutton;
use Acme\BSCheckoutBundle\Form\quickbuttonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * quickbutton controller.
 *
 */
class quickbuttonController extends AbstractController
{
    /**
     * Lists all quickbutton entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BSCheckoutBundle:quickbutton')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a quickbutton entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BSCheckoutBundle:quickbutton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find quickbutton entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new quickbutton entity.
     *
     */
    public function newAction()
    {
        $entity = new quickbutton();
        $form = $this->createForm(new quickbuttonType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new quickbutton entity.
     *
     */
    public function createAction()
    {
        $entity = new quickbutton();
        $request = $this->getRequest();
        $form = $this->createForm(new quickbuttonType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // return $this->redirect($this->generateUrl('cashbox_quickbutton_show', array('id' => $entity->getId())));

        }

        return $this->redirect($request->server->get('HTTP_REFERER'));

    }

    /**
     * Displays a form to edit an existing quickbutton entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BSCheckoutBundle:quickbutton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find quickbutton entity.');
        }

        $editForm = $this->createForm(new quickbuttonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing quickbutton entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BSCheckoutBundle:quickbutton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find quickbutton entity.');
        }

        $editForm = $this->createForm(new quickbuttonType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('cashbox_quickbutton_edit', array('id' => $id)));
        }
        return $this->redirect($request->server->get('HTTP_REFERER'));
        /*

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
        */
    }

    /**
     * Deletes a quickbutton entity.
     *
     */
    public function deleteAction($id)
    {
        //$form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        //$form->bindRequest($request);

        // if ($form->isValid()) {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('BSCheckoutBundle:quickbutton')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find quickbutton entity.');
        }

        $em->remove($entity);
        $em->flush();
        //}

        return $this->redirect($request->server->get('HTTP_REFERER'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
