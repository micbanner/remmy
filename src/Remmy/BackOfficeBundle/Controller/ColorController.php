<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\Color;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Color controller.
 *
 * @Route("admin/color")
 */
class ColorController extends Controller
{
    /**
     * Lists all color entities.
     *
     * @Route("/", name="color_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colors = $em->getRepository('RemmyBackOfficeBundle:Color')->findAll();
        $productsRepo = $em->getRepository('RemmyBackOfficeBundle:Product');
        $productStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductStock');
        $productHasStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasStock');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return $this->render('color/index.html.twig', array(
            'colors' => $colors,
            'productsRepo' => $productsRepo,
            'productStocksRepo' => $productStocksRepo,
            'productHasStocksRepo' => $productHasStocksRepo,
            'productCategoryRepo' => $productCategoryRepo,
        ));
    }

    /**
     * Creates a new color entity.
     *
     * @Route("/new", name="color_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $color = new Color();
        $form = $this->createForm('Remmy\BackOfficeBundle\Form\ColorType', $color);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($color);
            $em->flush();

            return $this->redirectToRoute('color_show', array('idcolor' => $color->getIdcolor()));
        }

        return $this->render('color/new.html.twig', array(
            'color' => $color,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a color entity.
     *
     * @Route("/{idcolor}", name="color_show")
     * @Method("GET")
     */
    public function showAction(Color $color)
    {
        $deleteForm = $this->createDeleteForm($color);

        return $this->render('color/show.html.twig', array(
            'color' => $color,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing color entity.
     *
     * @Route("/{idcolor}/edit", name="color_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Color $color)
    {
        $deleteForm = $this->createDeleteForm($color);
        $editForm = $this->createForm('Remmy\BackOfficeBundle\Form\ColorType', $color);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('color_edit', array('idcolor' => $color->getIdcolor()));
        }

        return $this->render('color/edit.html.twig', array(
            'color' => $color,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a color entity.
     *
     * @Route("/{idcolor}", name="color_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Color $color)
    {
        $form = $this->createDeleteForm($color);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($color);
            $em->flush();
        }

        return $this->redirectToRoute('color_index');
    }

    /**
     * Creates a form to delete a color entity.
     *
     * @param Color $color The color entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Color $color)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('color_delete', array('idcolor' => $color->getIdcolor())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
