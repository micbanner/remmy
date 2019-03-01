<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\Productstock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Productstock controller.
 *
 * @Route("productstock")
 */
class ProductstockController extends Controller
{
    /**
     * Lists all productstock entities.
     *
     * @Route("/", name="productstock_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productstocks = $em->getRepository('RemmyBackOfficeBundle:Productstock')->findAll();

        return $this->render('productstock/index.html.twig', array(
            'productstocks' => $productstocks,
        ));
    }

    /**
     * Creates a new productstock entity.
     *
     * @Route("/new", name="productstock_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $productstock = new Productstock();
        $form = $this->createForm('Remmy\BackOfficeBundle\Form\ProductstockType', $productstock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productstock);
            $em->flush();

            return $this->redirectToRoute('productstock_show', array('idstock' => $productstock->getIdstock()));
        }

        return $this->render('productstock/new.html.twig', array(
            'productstock' => $productstock,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a productstock entity.
     *
     * @Route("/{idstock}", name="productstock_show")
     * @Method("GET")
     */
    public function showAction(Productstock $productstock)
    {
        $deleteForm = $this->createDeleteForm($productstock);

        return $this->render('productstock/show.html.twig', array(
            'productstock' => $productstock,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing productstock entity.
     *
     * @Route("/{idstock}/edit", name="productstock_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Productstock $productstock)
    {
        $deleteForm = $this->createDeleteForm($productstock);
        $editForm = $this->createForm('Remmy\BackOfficeBundle\Form\ProductstockType', $productstock);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('productstock_edit', array('idstock' => $productstock->getIdstock()));
        }

        return $this->render('productstock/edit.html.twig', array(
            'productstock' => $productstock,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a productstock entity.
     *
     * @Route("/{idstock}", name="productstock_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Productstock $productstock)
    {
        $form = $this->createDeleteForm($productstock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productstock);
            $em->flush();
        }

        return $this->redirectToRoute('productstock_index');
    }

    /**
     * Creates a form to delete a productstock entity.
     *
     * @param Productstock $productstock The productstock entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Productstock $productstock)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productstock_delete', array('idstock' => $productstock->getIdstock())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
