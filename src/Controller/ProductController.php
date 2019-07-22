<?php

namespace BSApp\Controller;

use BSApp\Entity\Stockkeeping;
use Datetime;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Query\ResultSetMapping;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Knp\Component\Pager\PaginatorInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BSApp\Entity\Product;

/**
 * Product controller.
 *
 */
class ProductController extends AbstractController
{

    private $limit = 50;

    /**
     * Lists all Product entities.
     * @Template()
     */
    public function indexAction($page, PaginatorInterface $paginator)
    {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('PlentyMarketsOrderBundle:Product')->findAll();

        //return array('entities' => $entities);
        $dql = "SELECT a FROM BSApp\Entity\Product a";
        $query = $em->createQuery($dql);

//        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $page, //$this->get('request')->query->get('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );

        // parameters to template
        return compact('pagination');
    }

    /**
     * Lists all Product entities.
     *
     */
    public function stockAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository(Product::class)->find($id);

        $form = $this->createFormBuilder($entity)
            ->add('Stock', EntityType::class,
                array('class' => 'BSApp\Entity\Stock',
                    'data' => $entity->getStock()
                ))
            //->add('id','hidden',array('label'=>'ID','read_only'=>true,'data'=>$id))
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $em->persist($data);
            $em->flush();

        }
        return $this->render('product\stock.html.twig', array(
            'form' => $form->createView(),
            'entity' => $entity
        ));


    }


    /**
     * Search and displays a Product entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Product::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
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
     * Finds and displays a list of Products by matching Article_No.
     *
     */
    public function searchCodeAction($page, $search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp\Entity\Product p')
            ->add('where',
                $qb->expr()->like('p.article_no', '?1')
            )->setParameter('1', $search . '%');


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $page, //$this->get('request')->query->get('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );
        return $this->render('BSApp\Entity\Product:index.html.twig', array(
            'pagination' => $pagination));
    }

    /**
     * Finds and displays a Products by Article_Name.
     *
     */
    public function searchNameAction($page, $search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp\Entity\Product p')
            ->add('where',
                $qb->expr()->like('p.name', '?1')
            )->setParameter('1', '%' . $search . '%');

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $page, //$this->get('request')->query->get('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );

        return $this->render('BSApp\Entity\Product:index.html.twig', array(
            'pagination' => $pagination));
        //return compact('pagination');

    }

    /**
     * Finds and displays a Products by Article_Name2.
     *
     * @param $page
     * @param $search
     * @return Response
     *
     */
    public function searchLateinAction($page, $search)
    {

        $em = $this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $qb->add('select', 'p')
            ->add('from', 'BSApp\Entity\Product p')
            ->add('where',
                $qb->expr()->like('p.name2', '?1')
            )->setParameter('1', '%' . $search . '%');


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $qb->getQuery(),
            $page, //$this->get('request')->query->get('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );


        return $this->render('BSApp\Entity\Product:index.html.twig', array(
            'pagination' => $pagination));
        //return compact('pagination');

    }

    /**
     * Displays a form to create a new Product entity.
     *
     */
    public function newAction()
    {
        $entity = new Product();
        $form = $this->createForm(new ProductType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new Product entity.
     *
     */
    public function createAction()
    {
        $entity = new Product();
        $request = $this->getRequest();
        $form = $this->createForm(new ProductType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSApp_product_show', array('id' => $entity->getId())));

        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Product entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Product::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createForm(new ProductType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Product entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Product::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Product entity.');
        }

        $editForm = $this->createForm(new ProductType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('BSData_product_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Product entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository(Product::class)->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Product entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('product'));
    }

    public function createDummyAction()
    {
        $form = $this->buildDummyForm();

        return array(
            'form' => $form->createView(),

        );

    }


    public function lableAction()
    {

        return $this->render('BSApp\Entity\Product:lable.html.twig', array(
            'urlPDF' => "/print.pdf",
        ));


    }

    public function printLableAction()
    {
        $request = $this->getRequest();

        $form = $request->request->get('labelform');

        $anzahl = $form['amount'];
        $entity = new Product();
        $entity->setArticleId($form['articleid']);
        $entity->setArticleNo($form['articlecode']);
        $entity->setName($form['name']);
        $entity->setName2($form['name2']);
        $entity->setLabelText($form['description']);
        $entity->setDescriptionShort($form['descriptionShort']);
        $pdf = $this->get('white_october.tcpdf')->create();
        /*$pdf->init(array(
            'Creator' => 'Blumenschule Schongau',
            'Author' => 'Florian Engler',
            'Title' => $entity->getArticleNo(),
            'Subject' => $entity->getName(),
        ));*/
        $pdf->SetAutoPageBreak(false, 0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->setCellPaddings(1, 1, 1, 1);
        $pdf->setCellMargins(1, 1, 1, 1);

        for ($i = 0; $i < $anzahl; $i++) {
            $pdf = $this->buildLable($pdf, $entity);
        }


        $unit = new Stockkeeping();

        $unit->setArticleId($entity->getArticleId());
        $unit->setArticleCode($entity->getArticleNo());
        $unit->setArticleName($entity->getName());
        $unit->setQuantity(intval($anzahl));
        $unit->setPrinted(new Datetime('now'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($unit);
        $em->flush();


        //$pdfUrl = "print/".$entity->getArticleNo().".pdf";
        $pdfUrl = "print/lable.pdf";
        unlink(__DIR__ . "/../../../../web/" . $pdfUrl);
        $pdf->Output(__DIR__ . "/../../../../web/" . $pdfUrl, 'F');
        $result = array('pdfurl' => '/' . $pdfUrl);

        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    private function buildLable($pdf, Product $entity, $width = 98, $height = 25)
    {

        $pdf->AddPage('L', array($width, $height));
        //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

        $pdf->SetFont('helvetica', 'B', 11);
        //$pdf->Write(1,$entity->getName(),'',false,'L',1);
        //$pdf->Cell(2, 6, $entity->getName(),1,1);
        $pdf->Text(0, 0, $entity->getName(), false, false, true, 0, 1);
        $pdf->SetFont('helvetica', 'B', 8);
        $pdf->Text(32, 4, $entity->getName2(), false, false, true, 0, 1);
        //$pdf->Cell(2, 6, $entity->getName2(),1,1);
        //$pdf->Write(1,$entity->getName(),'',false,'L',1);

        $style = array(
            'position' => '',
            'align' => 'L',
            'stretch' => false,
            'fitwidth' => false,
            'cellfitalign' => '',
            'border' => false,
            'hpadding' => '0',
            'vpadding' => '0',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255),
            'text' => false,
            'font' => 'helvetica',
            'fontsize' => 8,
            'stretchtext' => 0
        );
        //( 	code,	 	type,		x = '', 	y = '',	w = '',	h = '',xres = '',style = '',align = '')

        $pdf->write1DBarcode($entity->getArticleId(), 'EAN8', 1, 8, 30, 10, 0.5, $style, 'T');
        $pdf->Text(2, 17, $entity->getArticleNo() . ' - ' . $entity->getArticleId(), false, false, true, 0, 1);
        $pdf->SetFont('helvetica', '', 7);
        $strings = $this->split_words($entity->getDescriptionShort());
        $line = 0;
        foreach ($strings as $s) {
            $pdf->Text(30, 7 + $line, $s, false, false, true, 0, 1);
            $line += 3;
        }


        //$pdf->Cell(15, 2,  $strings[0],0,1);
        // MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
        //$pdf->MultiCell(58, 30, ,0,'L',0,1,'','');

        return $pdf;

    }

    function split_words($string, $max = 58)
    {
        //$words = str_word_count($string, 1);
        $words = explode(' ', trim($string));


        $lines = array();
        $line = '';

        foreach ($words as $k => $word) {
            $length = strlen($line . ' ' . $word);
            if ($length <= $max) {
                $line .= ' ' . trim($word);
            } else if ($length > $max) {
                if (!empty($line)) $lines[] = $line;
                $line = trim($word);
            } else {
                $lines[] = trim($line) . ' ' . $word;
                $line = '';
            }
        }
        $lines[] = ($line = trim($line)) ? $line : $word;

        return $lines;
    }

    /**
     * Lists all Product entities.
     *
     */
    public function productAllAction($search, Request $request, PaginatorInterface $paginator)//, )
    {

//        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('PlentyMarketsOrderBundle:Product')->findAll();


//        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $this->plantAndProductSearch($search),
            $request->query->get('page', 1)/*page number*/,
            $this->limit/*limit per page*/
        );

        // parameters to template
        return $this->render('product/productAll.html.twig', [
            'pagination' => $pagination,
        ]);
//        return compact('pagination');
    }

    private function plantAndProductSearch($search)
    {
        $em = $this->getDoctrine()->getManager();

        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('BSApp\Entity\Product', 'p');
        $rsm->addFieldResult('p', 'id', 'id');
        $rsm->addFieldResult('p', 'article_id', 'article_id');
        $rsm->addFieldResult('p', 'article_no', 'article_no');
        $rsm->addFieldResult('p', 'EAN', 'EAN');
        $rsm->addFieldResult('p', 'name', 'name');
        $rsm->addFieldResult('p', 'name2', 'name2');
        $rsm->addFieldResult('p', 'd', 'label_text');
        $rsm->addFieldResult('p', 'd2', 'description_short');
        $rsm->addFieldResult('p', 'picurl', 'picurl');
        $query = $em->createNativeQuery('
            SELECT
             a.id id,
             null article_id,
              a.code article_no,
              null EAN,
              a.name name,
              a.latein name2,
              a.instructions d,
              a.labeltext d2,
              null picurl
            FROM Plant a
            where
                a.name like "%' . $search . '%" or
                a.code like "' . $search . '%" or
                a.latein like "' . $search . '%"
            Union
            SELECT
              null id,
              b.article_id article_id,
              b.article_no article_no,
              b.EAN ,
              b.name name,
              b.name2 name2,
              b.description d,
              b.description_short d2,
              b.picurl picurl
            FROM  Product b
            where
                b.name like "%' . $search . '%" or
                b.article_no like "' . $search . '%" or
                b.name2 like "' . $search . '%"
            order by name
                ', $rsm);

        $results = $query->getArrayResult();
//        TODO why is the quary returning null elements? TODO fix it
        return array_filter($results);
    }

    public function searchAction($search)
    {
        $em = $this->getDoctrine()->getManager();


        $rsm = new ResultSetMapping();
        $rsm->addEntityResult('BSApp\Entity\Product', 'p');
        $rsm->addFieldResult('p', 'article_id', 'article_id');
        $rsm->addFieldResult('p', 'article_no', 'article_no');
        $rsm->addFieldResult('p', 'EAN', 'EAN');
        $rsm->addFieldResult('p', 'name', 'name');
        $rsm->addFieldResult('p', 'name2', 'name2');
        $rsm->addFieldResult('p', 'd', 'label_text');
        $rsm->addFieldResult('p', 'd2', 'description_short');
        $rsm->addFieldResult('p', 'picurl', 'picurl');
        $query = $em->createNativeQuery('
            SELECT
             null article_id,
              a.code article_no,
              null EAN,
              a.name name,
              a.latein name2,
              a.instructions d,
              a.labeltext d2,
              null picurl
            FROM Plant a
            where
                a.name like "%' . $search . '%" or
                a.code like "' . $search . '%" or
                a.latein like "' . $search . '%"
            Union
            SELECT
              b.article_id article_id,
              b.article_no article_no,
              b.EAN ,
              b.name name,
              b.name2 name2,
              b.description d,
              b.picurl picurl,
              b.description_short d2
            FROM  Product b
            where
                b.name like "%' . $search . '%" or
                b.article_no like "' . $search . '%" or
                b.name2 like "' . $search . '%"
            order by name
                ', $rsm);

        $result = $query->getArrayResult();

        $response = new Response(json_encode($result));
        $response->headers->set('Content-Type', 'application/json');

        return $response;


    }

    public function syncAction($code)
    {

        /** @var PlentyMarketsAPI $plentyMarketsAPI */
        $plentyMarketsAPI = $this->container->get('app.plenty_markets_api');
        $plentyMarketsAPI->doGetItemsBaseByOptions(array('ItemNo' => $code));

        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository(Product::class)->findOneBy(array('article_no' => $code));

        $item = array();
        $item['article_id'] = $product->getArticleId();
        $item['article_no'] = $product->getArticleNo();
        $item['name'] = $product->getName();
        $item['name2'] = $product->getName2();
        $item['label_text'] = $product->getLabelText();
        $item['description_short'] = $product->getDescriptionShort();
        $item['price'] = $product->getPrice();
        $item['picurl'] = $product->getPicurl();
        $response = new Response(json_encode($item));
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

    public function printAction()
    {
        $id = $this->getRequest()->get('id');
        $quantity = $this->getRequest()->get('quantity');
        $width = $this->getRequest()->get('width');
        $height = $this->getRequest()->get('height');

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(Product::class)->find($id);
        $pdf = $this->get('white_october.tcpdf')->create();
        /*$pdf->init(array(
            'Creator' => 'Blumenschule Schongau',
            'Author' => 'Florian Engler',
            'Title' => $entity->getArticleNo(),
            'Subject' => $entity->getName(),
        ));*/
        $pdf->SetAutoPageBreak(false, 0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->setCellPaddings(1, 1, 1, 1);
        $pdf->setCellMargins(1, 1, 1, 1);
        for ($i = 0; $i < $quantity; $i++) {
            $pdf = $this->buildLable($pdf, $entity, $width, $height);
        }


        //$pdf->Output("print/".$entity->getArticleNo().".pdf", 'F');
        $pdf->Output("print/lable.pdf", 'F');

        return $this->render('BSApp\Entity\Product:print.html.twig', array(
            'urlPDF' => "/print/lable.pdf",
        ));


    }

    public function printA6Action()
    {


        $em = $this->getDoctrine()->getManager();

        $data = $this->get('request')->request->get('A6Lable');

        return $this->render('BSApp\Entity\Product:printA6.html.twig', array(

            'data' => $data
        ));
    }

    private function createLabelJSON($products)
    {


    }


}
