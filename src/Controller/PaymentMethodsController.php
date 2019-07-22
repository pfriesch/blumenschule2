<?php

namespace BSApp\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use BSApp\Entity\PaymentMethods;

/**
 * PaymentMethods controller.
 *
 */
class PaymentMethodsController extends AbstractController
{
    /**
     * Lists all PaymentMethods entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository(PaymentMethods::class)->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a PaymentMethods entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(PaymentMethods::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethods entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    /**
     * Displays a form to create a new PaymentMethods entity.
     *
     */
    public function newAction()
    {
        /*  $entity = new PaymentMethods();
          $form   = $this->createForm(new PaymentMethodsType(), $entity);

          return array(
              'entity' => $entity,
              'form'   => $form->createView()
          );
         */
        /** @var PlentyMarketsAPI $plentyMarketsAPI */
        $plentyMarketsAPI = $this->container->get('app.plenty_markets_api');
        $plentyMarketsAPI->doGetMethodOfPayments();

        return $this->redirect($this->generateUrl('BSData_paymentmethods'));

    }

    /**
     * Creates a new PaymentMethods entity.
     *
     */
    public function createAction()
    {
        $entity = new PaymentMethods();
        $request = $this->getRequest();
        $form = $this->createForm(new PaymentMethodsType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_paymentmethods_show', array('id' => $entity->getId())));

        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing PaymentMethods entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(PaymentMethods::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethods entity.');
        }

        $editForm = $this->createForm(new PaymentMethodsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing PaymentMethods entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(PaymentMethods::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PaymentMethods entity.');
        }

        $editForm = $this->createForm(new PaymentMethodsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_paymentmethods_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a PaymentMethods entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository(PaymentMethods::class)->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PaymentMethods entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('BSData_paymentmethods'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
