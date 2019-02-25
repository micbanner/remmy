<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\StockProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Stockproduct controller.
 *
 * @Route("admin/stockproduct")
 */
class StockProductController extends Controller
{
    /**
     * Lists all stockProduct entities.
     *
     * @Route("/", name="stockproduct_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $stockProducts = $em->getRepository('RemmyBackOfficeBundle:StockProduct')->findAll();

        return $this->render('stockproduct/index.html.twig', array(
            'stockProducts' => $stockProducts,
        ));
    }

    /**
     * Creates a new stockProduct entity.
     *
     * @Route("/new", name="stockproduct_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $stockProduct = new Stockproduct();
        $form = $this->createForm('Remmy\BackOfficeBundle\Form\StockProductType', $stockProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stockProduct);
            $em->flush();

            return $this->redirectToRoute('stockproduct_show', array('idstock' => $stockProduct->getIdstock()));
        }

        return $this->render('stockproduct/new.html.twig', array(
            'stockProduct' => $stockProduct,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a stockProduct entity.
     *
     * @Route("/{idstock}", name="stockproduct_show")
     * @Method("GET")
     */
    public function showAction(StockProduct $stockProduct)
    {
        $deleteForm = $this->createDeleteForm($stockProduct);

        return $this->render('stockproduct/show.html.twig', array(
            'stockProduct' => $stockProduct,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing stockProduct entity.
     *
     * @Route("/{idstock}/edit", name="stockproduct_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StockProduct $stockProduct)
    {
        $deleteForm = $this->createDeleteForm($stockProduct);
        $editForm = $this->createForm('Remmy\BackOfficeBundle\Form\StockProductType', $stockProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('stockproduct_edit', array('idstock' => $stockProduct->getIdstock()));
        }

        return $this->render('stockproduct/edit.html.twig', array(
            'stockProduct' => $stockProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a stockProduct entity.
     *
     * @Route("/{idstock}", name="stockproduct_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StockProduct $stockProduct)
    {
        $form = $this->createDeleteForm($stockProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($stockProduct);
            $em->flush();
        }

        return $this->redirectToRoute('stockproduct_index');
    }

    /**
     * Creates a form to delete a stockProduct entity.
     *
     * @param StockProduct $stockProduct The stockProduct entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StockProduct $stockProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stockproduct_delete', array('idstock' => $stockProduct->getIdstock())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
