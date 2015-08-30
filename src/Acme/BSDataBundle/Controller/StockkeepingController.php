<?php

namespace Acme\BSDataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\BSDataBundle\Entity\Stockkeeping;
use Acme\BSDataBundle\Form\StockkeepingType;

/**
 * Stockkeeping controller.
 *
 * @Route("/data/stockkeepting")
 */
class StockkeepingController extends Controller
{
    /**
     * Lists all Stockkeeping entities.
     *
     * @Route("/", name="data_stockkeepting")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $this->getDoctrine()
            ->getRepository('BSDataBundle:Stockkeeping');
        $query = $repository->createQueryBuilder('s')
            ->where('s.exported is null')
            ->getQuery();

        $entities = $query->getResult();



        return array(
            'entities' => $entities,
        );
    }

    /**
     * Lists all Stockkeeping entities.
     *
     * @Route("/summary", name="data_stockkeepting_summary")
     * @Method("GET")
     * @Template()
     */
    public function summaryAction()
    {
        $sql = "
        SELECT sum(s.Quantity) quantity,s.articleId,s.articleName FROM Stockkeeping s
        group by s.articleId
        ";

        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $stmt->execute();
        $entities =  $stmt->fetchAll();



        return array(
            'entities' => $entities,
        );
    }


    /**
     * Lists all Stockkeeping entities.
     *
     * @Route("/export", name="data_stockkeepting_export")
     * @Method("GET")
     * @Template("export.txt.twig")
     */
    public function exportAction()
    {
        $sql = "SELECT sum(s.Quantity) Quantity,s.articleId,s.articleName FROM blumenschule2.Stockkeeping s
                where s.exported is null
                group by s.articleId
        ";

        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $stmt->execute();
        $entities =  $stmt->fetchAll();



        $repository = $this->getDoctrine()
            ->getRepository('BSDataBundle:Stockkeeping');
        $query = $repository->createQueryBuilder('s')
            ->where('s.exported is null')
            ->getQuery();
        $date = new \DateTime('now');
        $em = $this->getDoctrine()->getManager();
        foreach($query->getResult() as $unit){
            $unit->setExported($date);
            $em->persist($unit);
        }
        $em->flush();


        $response = $this->render('BSDataBundle:Stockkeeping:export.txt.twig',array('entities' => $entities));
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="export.csv"');
        return $response;
    }





    /**
     * Creates a new Stockkeeping entity.
     *
     * @Route("/", name="data_stockkeepting_create")
     * @Method("POST")
     * @Template("BSDataBundle:Stockkeeping:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Stockkeeping();
        $form = $this->createForm(new StockkeepingType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('data_stockkeepting_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Stockkeeping entity.
     *
     * @Route("/new", name="data_stockkeepting_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Stockkeeping();
        $form   = $this->createForm(new StockkeepingType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Stockkeeping entity.
     *
     * @Route("/{id}", name="data_stockkeepting_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Stockkeeping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stockkeeping entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Stockkeeping entity.
     *
     * @Route("/{id}/edit", name="data_stockkeepting_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Stockkeeping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stockkeeping entity.');
        }

        $editForm = $this->createForm(new StockkeepingType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Stockkeeping entity.
     *
     * @Route("/{id}", name="data_stockkeepting_update")
     * @Method("PUT")
     * @Template("BSDataBundle:Stockkeeping:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BSDataBundle:Stockkeeping')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stockkeeping entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StockkeepingType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('data_stockkeepting_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Stockkeeping entity.
     *
     * @Route("/{id}", name="data_stockkeepting_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BSDataBundle:Stockkeeping')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stockkeeping entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('data_stockkeepting'));
    }

    /**
     * Creates a form to delete a Stockkeeping entity by id.
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
