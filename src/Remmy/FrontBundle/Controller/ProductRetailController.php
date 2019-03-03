<?php

namespace Remmy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

use Remmy\BackOfficeBundle\Entity\Product;

class ProductRetailController extends Controller
{

    public function RetailAction(Request $request)
    {
      
     // $session = $container->get('session.handler');

      //$session->set('test', 'test2');
      // $session->set('id',$site->getId());
      // $session->set('url',$site->getUrl());
      // $session->set('name',$site->getName());
      
          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('RemmyBackOfficeBundle:Product')->findOneByidproduct($_REQUEST['idproduct']);
          $productHasColorsRepo = $em->getRepository('RemmyBackOfficeBundle:ProductHasColor');
          $colorsRepo = $em->getRepository('RemmyBackOfficeBundle:Color');
          $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        return $this->render('@RemmyFront/ProductRetail/Retail.html.twig',
           array('product' => $product,
                 'productHasColorsRepo' => $productHasColorsRepo,
                 'colorsRepo' => $colorsRepo,
                 'productCategoryRepo' => $productCategoryRepo,
                 'Request' =>$request,
                ));
    }
}
