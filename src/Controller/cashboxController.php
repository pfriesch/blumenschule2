<?php

namespace BSApp\Controller;

use BSApp\Entity\checkout\cashbox;
use BSApp\Entity\checkout\checkout;
use BSApp\Entity\checkout\quickbutton;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * cashbox controller.
 *
 */
class cashboxController extends AbstractController
{
    /**
     * Lists all cashbox entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository(cashbox::class)->findAll();

        return array('entities' => $entities);
    }

    /**
     * Lists all cashbox entities.
     *
     */
    public function closeAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $cashbox = $em->getRepository(cashbox::class)->find($id);

        if (!$cashbox) {
            throw $this->createNotFoundException('Kann die Kasse nicht finden');
        }

        $checkouts = $em->getRepository(checkout::class)->getHistory($cashbox->getID(), 'now');


        return array('checkouts' => $checkouts);


    }

    /**
     * Finds and displays a cashbox entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }

        /*$config_form = $this->createFormBuilder()
            ->add('title','text',array('label'=>'Titel'))
            ->add('code','text',array('label'=>'Code'))
            ->add('price','text',array('label'=>'Preis','required'=>false))
            ->add('key','text',array('label'=>'Tastencode','required'=>false));
        */
        $quickbutton = new quickbutton();
        $quickbutton->setCashbox($entity);
        $quickbutton_form = $this->createForm(new quickbuttonType(), $quickbutton);
        $quickbuttons = $em->getRepository(quickbutton::class)->getQuickbuttons($entity->getID());

        $bon_after_text = $this->createFormBuilder()
            ->add('bontext', 'textarea', array('label' => 'Bon Text', 'data' => $entity->getBonafter(), 'attr' => array('class' => 'ckeditor')))->getForm();

        return array(
            'entity' => $entity,
            'quickbuttons' => $quickbuttons,
            'quickbutton_form' => $quickbutton_form->createView(),
            'bontext' => $bon_after_text->createView(),
        );
    }

    /**
     * Finds and displays a cashbox entity.
     *
     */
    public function bontext_saveAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }
        $request = $this->getRequest();
        $form = $request->request->get('form');


        $entity->setBonafter($form['bontext']);

        $em->persist($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('checkout_cashbox_show', array('id' => $id)));
    }


    /**
     * Finds and displays a cashbox entity.
     *
     */
    public function button_addAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }
        $request = $this->getRequest();
        $form = $request->request->get('form');


        $buttons = $entity->getQuickbuttons();

        $buttons[] = array(
            'title' => $form['title'],
            'code' => $form['code'],
            'price' => $form['price'],
            'key' => $form['key'],
        );
        $entity->setQuickbuttons($buttons);
        $em->persist($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('checkout_cashbox_show', array('id' => $id)));
    }

    /**
     * Finds and displays a cashbox entity.
     *
     */
    public function button_deleteAction($id, $itemid)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }


        $buttons = $entity->getQuickbuttons();
        unset($buttons[$itemid]);

        $entity->setQuickbuttons($buttons);
        $em->persist($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('checkout_cashbox_show', array('id' => $id)));
    }


    /**
     * Displays a form to create a new cashbox entity.
     *
     * @Route("/new", name="checkout_cashbox_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new cashbox();
        $form = $this->createForm(new cashboxType(), $entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Creates a new cashbox entity.
     *
     */
    public function createAction()
    {
        $entity = new cashbox();
        $request = $this->getRequest();
        $form = $this->createForm(new cashboxType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('checkout_cashbox_show', array('id' => $entity->getId())));

        }

        return array(
            'entity' => $entity,
            'form' => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing cashbox entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }

        $editForm = $this->createForm(new cashboxType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing cashbox entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository(cashbox::class)->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cashbox entity.');
        }

        $editForm = $this->createForm(new cashboxType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('checkout_cashbox_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a cashbox entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository(cashbox::class)->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cashbox entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('checkout_cashbox'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }

    public function printAction($id, $date)
    {

        $pdfname = 'cashbox_' . $id . '_' . date('U');

        $em = $this->getDoctrine()->getManager();
        $Baskets = $em->getRepository(checkout::class)->getHistory($id, $date);

        $summary = array();
        $summary2 = array();

        $article = array();

        foreach ($Baskets as $basket) {
            // $basket = new checkout();
            $payment = $basket->getPayment();

            foreach ($basket->getCheckoutItems() as $item) {
                //$item = new checkoutItem();

                if ($item->getArticleId() === 4852 OR $item->getArticleId() === 4851) {
                    if (isset($summary2[$item->getVAT()])) {
                        $summary2[$item->getVAT()] += $item->getPrice() * $item->getQuantity();

                    } else {
                        $summary2[$item->getVAT()] = $item->getPrice() * $item->getQuantity();
                    }
                } else {
                    if (isset($summary[$item->getVAT()])) {
                        $summary[$item->getVAT()] += $item->getPrice() * $item->getQuantity();

                    } else {
                        $summary[$item->getVAT()] = $item->getPrice() * $item->getQuantity();
                    }


                }
                if (isset($article[$item->getArticleCode()])) {

                    $article[$item->getArticleCode()] += $item->getQuantity();
                } else {
                    $article[$item->getArticleCode()] = $item->getQuantity();
                }


            }

        }


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
        $pdf->AddPage('');
        //Cell($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=0, $link='', $stretch=0, $ignore_min_height=false, $calign='T', $valign='M')

        $pdf->SetFont('helvetica', 'B', 14);
        $d = strtotime($date);

        $pdf->Cell(60, 20, 'Kassenabschluss ' . date("d.m.Y", mktime(0, 0, 0, date('m', $d), date('d', $d), date('Y', $d))), 0, 1);


        $pdf->SetFont('helvetica', 'B', 12);

        //$pdf->Cell(40,15 , "Umsatz nach Zahlungsart",0,1);
        //$pdf->Cell(40,15 , "Umsatz",0,1);


        $paymentMethods = array(
            0 => 'Bar',
            1 => 'EC',
            11 => 'Bar',
            99 => 'Gesamt'
        );
        ksort($summary);
        $pdf->SetLineWidth(0.3);


        $pdf->SetFont('helvetica', '', 10);
        $pdf->cell(20, 3, 'Mwst', '', 0, 'L');
        $pdf->cell(30, 3, 'Netto', '', 0, 'L');
        $pdf->cell(30, 3, 'Steuer', '', 0, 'L');
        $pdf->cell(30, 3, 'Brutto', '', 0, 'L');
        $pdf->Ln();
        $gesamt = 0;
        $pdf->SetFont('helvetica', '', 10);
        foreach ($summary as $VAT => $sum) {
            $pdf->cell(20, 4, $VAT . "%", '', 0);
            $pdf->cell(30, 4, number_format($sum * (100 - $VAT) / 100, 2, ',', ' ') . " €", '', 0);
            $pdf->cell(30, 4, number_format($sum * ($VAT / 100), 2, ',', ' ') . " €", '', 0);
            $pdf->cell(30, 4, number_format($sum, 2, ',', ' ') . " €", '', 0);
            $gesamt += $sum;
            $pdf->Ln();
        }
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->cell(50, 4, " ", '', 0);
        $pdf->cell(30, 4, "Gesamt ", '', 0);
        $pdf->cell(30, 4, number_format($gesamt, 2, ',', ' ') . " €", '', 0);


        $pdf->ln(5);


        $pdf->Cell(60, 20, 'Kassenabschluss Räucherwerk ' . date("d.m.Y", mktime(0, 0, 0, date('m', $d), date('d', $d), date('Y', $d))), 0, 1);


        $pdf->SetFont('helvetica', 'B', 12);

        //$pdf->Cell(40,15 , "Umsatz nach Zahlungsart",0,1);
        //$pdf->Cell(40,15 , "Umsatz",0,1);


        $paymentMethods = array(
            0 => 'Bar',
            1 => 'EC',
            11 => 'Bar',
            99 => 'Gesamt'
        );
        ksort($summary2);
        $pdf->SetLineWidth(0.3);


        $pdf->SetFont('helvetica', '', 10);
        $pdf->cell(20, 3, 'Mwst', '', 0, 'L');
        $pdf->cell(30, 3, 'Netto', '', 0, 'L');
        $pdf->cell(30, 3, 'Steuer', '', 0, 'L');
        $pdf->cell(30, 3, 'Brutto', '', 0, 'L');
        $pdf->Ln();
        $gesamt = 0;
        $pdf->SetFont('helvetica', '', 10);
        foreach ($summary2 as $VAT => $sum) {
            $pdf->cell(20, 4, $VAT . "%", '', 0);
            $pdf->cell(30, 4, number_format($sum * (100 - $VAT) / 100, 2, ',', ' ') . " €", '', 0);
            $pdf->cell(30, 4, number_format($sum * ($VAT / 100), 2, ',', ' ') . " €", '', 0);
            $pdf->cell(30, 4, number_format($sum, 2, ',', ' ') . " €", '', 0);
            $gesamt += $sum;
            $pdf->Ln();
        }
        $pdf->SetFont('helvetica', 'B', 10);
        $pdf->cell(50, 4, " ", '', 0);
        $pdf->cell(30, 4, "Gesamt ", '', 0);
        $pdf->cell(30, 4, number_format($gesamt, 2, ',', ' ') . " €", '', 0);


        $pdf->ln(5);


        //$pdf->Text(0, 0, $entity->getName(),false,false,true,0,1);
        //$pdf->SetFont('helvetica', 'B', 8);
        //$pdf->Cell(2, 6, $entity->getName2(),1,1);
        //$pdf->Write(1,$entity->getName(),'',false,'L',1);
        //$pdf->Text(32, 5, $entity->getName2(),false,false,true,0,1);


        $pdf->Output(__DIR__ . "/../../../../web/print/" . $pdfname . ".pdf", 'F');

        return $this->render('cashbox/print.html.twig', array(
            'urlPDF' => "/print/" . $pdfname . ".pdf",
            'cashbox_id' => $id,
        ));


    }


}
