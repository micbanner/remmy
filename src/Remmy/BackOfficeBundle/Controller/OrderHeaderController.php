<?php

namespace Remmy\BackOfficeBundle\Controller;

use Remmy\BackOfficeBundle\Entity\OrderHeader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Remmy\BackOfficeBundle\Entity\OrderLine;

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

        return $this->render('orderheader/index.html.twig', array(
            'orderHeaders' => $orderHeaders,
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
        $em = $this->getDoctrine()->getManager();

        $orderLines = $em->getRepository('RemmyBackOfficeBundle:OrderLine')->findAll();

        return $this->render('orderheader/show.html.twig', array(
            'orderHeader' => $orderHeader,
            'orderLines' => $orderLines,
        ));
    }
}
