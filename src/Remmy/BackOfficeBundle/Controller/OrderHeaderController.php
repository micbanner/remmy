<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\OrderHeader;
use Remmy\BackOfficeBundle\Entity\OrderLine;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Orderheader controller.
 *
 * @Route("orderheader")
 */
class OrderHeaderController extends Controller
{
    /**
     * Lists all orderHeader entities.
     *
     * @Route("/", name="orderheader_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderHeaders = $em->getRepository('RemmyBackOfficeBundle:OrderHeader')->findAll();
        $productsRepo = $em->getRepository('RemmyBackOfficeBundle:Product');
        $productStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductStock');
        $productHasStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasStock');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return $this->render('orderheader/index.html.twig', array(
            'orderHeaders' => $orderHeaders,
            'productsRepo' => $productsRepo,
            'productStocksRepo' => $productStocksRepo,
            'productHasStocksRepo' => $productHasStocksRepo,
            'productCategoryRepo' => $productCategoryRepo,
        ));
    }

    /**
     * Creates a new orderHeader entity.
     *
     * @Route("/new", name="orderheader_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $orderHeader = new Orderheader();
        $form = $this->createForm('Remmy\BackOfficeBundle\Form\OrderHeaderType', $orderHeader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orderHeader);
            $em->flush();

            return $this->redirectToRoute('orderheader_show', array('idorder' => $orderHeader->getIdorder()));
        }

        return $this->render('orderheader/new.html.twig', array(
            'orderHeader' => $orderHeader,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a orderHeader entity.
     *
     * @Route("/{idorder}", name="orderheader_show")
     * @Method("GET")
     */
    public function showAction(OrderHeader $orderHeader)
    {
        $deleteForm = $this->createDeleteForm($orderHeader);

        $em = $this->getDoctrine()->getManager();

        $orderLines = $em->getRepository('RemmyBackOfficeBundle:OrderLine')->findAll();
        $productsRepo = $em->getRepository('RemmyBackOfficeBundle:Product');
        $productStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductStock');
        $productHasStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasStock');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return $this->render('orderheader/show.html.twig', array(
            'orderHeader' => $orderHeader,
            'orderLines' => $orderLines,
            'productsRepo' => $productsRepo,
            'productStocksRepo' => $productStocksRepo,
            'productHasStocksRepo' => $productHasStocksRepo,
            'productCategoryRepo' => $productCategoryRepo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing orderHeader entity.
     *
     * @Route("/{idorder}/edit", name="orderheader_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, OrderHeader $orderHeader)
    {
        $deleteForm = $this->createDeleteForm($orderHeader);
        $editForm = $this->createForm('Remmy\BackOfficeBundle\Form\OrderHeaderType', $orderHeader);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('orderheader_edit', array('idorder' => $orderHeader->getIdorder()));
        }

        return $this->render('orderheader/edit.html.twig', array(
            'orderHeader' => $orderHeader,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a orderHeader entity.
     *
     * @Route("/{idorder}", name="orderheader_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, OrderHeader $orderHeader)
    {
        $form = $this->createDeleteForm($orderHeader);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($orderHeader);
            $em->flush();
        }

        return $this->redirectToRoute('orderheader_index');
    }

    /**
     * Creates a form to delete a orderHeader entity.
     *
     * @param OrderHeader $orderHeader The orderHeader entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(OrderHeader $orderHeader)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('orderheader_delete', array('idorder' => $orderHeader->getIdorder())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
