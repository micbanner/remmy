<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\OrderLine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Orderline controller.
 *
 * @Route("orderline")
 */
class OrderLineController extends Controller
{
    /**
     * Lists all orderLine entities.
     *
     * @Route("/", name="orderline_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $orderLines = $em->getRepository('RemmyBackOfficeBundle:OrderLine')->findAll();

        return $this->render('orderline/index.html.twig', array(
            'orderLines' => $orderLines,
        ));
    }

    /**
     * Finds and displays a orderLine entity.
     *
     * @Route("/{idorderline}", name="orderline_show")
     * @Method("GET")
     */
    public function showAction(OrderLine $orderLine)
    {

        return $this->render('orderline/show.html.twig', array(
            'orderLine' => $orderLine,
        ));
    }

}
