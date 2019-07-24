<?php

namespace BSApp\Controller;

use BSApp\Service\plentymarketsAPI\BSPlentyService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use BSApp\Entity\Plant;
use Symfony\Component\HttpFoundation\Response;

/**
 * Plant controller.
 *
 */
class PlantController extends AbstractController
{
    /**
     * Lists all Plant entities.
     *
     */
    public function indexAction($page = 1)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM BSApp:Plant a";
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
     */
    public function searchNameAction($search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp:Plant p')
            ->add('where',
                $qb->expr()->like('p.name', '?1')
            )->setParameter('1', '%' . $search . '%');
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSApp:Plant:index.html.twig', array(
            'pagination' => $pagination));
    }

    /**
     * Finds and displays a Plant by Article_No.
     *
     */
    public function searchCodeAction($search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp:Plant p')
            ->add('where',
                $qb->expr()->like('p.code', '?1')
            )->setParameter('1', $search . '%');


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSApp:Plant:index.html.twig', array(
            'pagination' => $pagination));
    }

    /**
     * Finds and displays a Plant by Article_No.
     *
     */
    public function searchAutotextAction($type, $search)
    {
        $type = str_replace('[', '', $type);
        $type = str_replace(']', '', $type);

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p.' . $type . ' term')
            ->add('from', 'BSApp:Plant p')
            ->add('where',
                $qb->expr()->like('p.' . $type, "'%" . $search . "%'")
            )
            ->addGroupBy('p.' . $type);


        $SQL = $qb->getQuery()->getSQL();
        $results = $qb->getQuery()->getArrayResult();

        $response = new Response(json_encode($results));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }


    /**
     * Finds and displays a Plant by Article_No.
     *
     */
    public function searchLateinAction($search)
    {


        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp:Plant p')
            ->add('where',
                $qb->expr()->like('p.latein', '?1')
            )->setParameter('1', $search . '%');


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $this->get('request')->query->get('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('BSApp:Plant:index.html.twig', array(
            'pagination' => $pagination));
    }


    /**
     * Finds and displays a Plant entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Plant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),);
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }

    /**
     * Displays a form to create a new Plant entity.
     *
     */
    public function newAction()
    {
        $entity = new Plant();
        $form = $this->createForm(new PlantType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Plant entity.
     *
     */
    public function createAction()
    {
        $entity = new Plant();
        $request = $this->getRequest();
        $form = $this->createForm(new PlantType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_plant_edit', array('id' => $entity->getId())));

        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Plant entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Plant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $editForm = $this->createForm(new PlantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Plant entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Plant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $editForm = $this->createForm(new PlantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_plant_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Plant entity.
     *
     */
    public function deleteAction($id, Request $request)
    {

        // $form->bind($request);

        // if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository(Plant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $em->remove($entity);
        $em->flush();
        // }

        return $this->redirect($this->generateUrl('BSData_plant'));
    }

    /**
     *
     */
    public function crateProductAction($id, BSPlentyService $plentyMarketsAPI)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Plant::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Plant entity.');
        }

        $return = $plentyMarketsAPI->doAddItemsBase($entity->getCode(), 0, $entity->getName(), $entity->getLatein(), $entity->getLabeltext());

        return $this->redirect($this->generateUrl('BSData_plant'));

    }


}
