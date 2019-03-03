<?php

namespace Remmy\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productsRepo = $em->getRepository('RemmyBackOfficeBundle:Product');
        $productStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductStock');
        $productHasStocksRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasStock');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return $this->render('admin-base.html.twig', array (
            'productCategoryRepo' => $productCategoryRepo,
        ));
    }
}
