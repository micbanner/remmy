<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\Size;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Size controller.
 *
 * @Route("admin/size")
 */
class SizeController extends Controller
{
    /**
     * Lists all size entities.
     *
     * @Route("/", name="size_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sizes = $em->getRepository('RemmyBackOfficeBundle:Size')->findAll();

        return $this->render('size/index.html.twig', array(
            'sizes' => $sizes,
        ));
    }

    /**
     * Creates a new size entity.
     *
     * @Route("/new", name="size_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $size = new Size();
        $form = $this->createForm('Remmy\BackOfficeBundle\Form\SizeType', $size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($size);
            $em->flush();

            return $this->redirectToRoute('size_show', array('idsize' => $size->getIdsize()));
        }

        return $this->render('size/new.html.twig', array(
            'size' => $size,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a size entity.
     *
     * @Route("/{idsize}", name="size_show")
     * @Method("GET")
     */
    public function showAction(Size $size)
    {
        $deleteForm = $this->createDeleteForm($size);

        return $this->render('size/show.html.twig', array(
            'size' => $size,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing size entity.
     *
     * @Route("/{idsize}/edit", name="size_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Size $size)
    {
        $deleteForm = $this->createDeleteForm($size);
        $editForm = $this->createForm('Remmy\BackOfficeBundle\Form\SizeType', $size);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('size_edit', array('idsize' => $size->getIdsize()));
        }

        return $this->render('size/edit.html.twig', array(
            'size' => $size,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a size entity.
     *
     * @Route("/{idsize}", name="size_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Size $size)
    {
        $form = $this->createDeleteForm($size);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($size);
            $em->flush();
        }

        return $this->redirectToRoute('size_index');
    }

    /**
     * Creates a form to delete a size entity.
     *
     * @param Size $size The size entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Size $size)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('size_delete', array('idsize' => $size->getIdsize())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
