<?php

namespace Remmy\FrontBundle\Controller;

use Remmy\BackOfficeBundle\Entity\product;
use Remmy\BackOfficeBundle\EventListener\SessionHandler;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

use Symfony\Component\HttpFoundation\File\File;



class HomeController extends Controller
{

    public function indexAction(request $request)
    {
        // $session = $request->getSession();

        // set and get session attributes
        // $session->set('name', 'Drak');
        // $session->set('numero', '2');
        // $session->set('adresse', '1 rue de pierre');
        // $session->get('name');
        
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('RemmyBackOfficeBundle:Product')->findAll();
        $productsHasColors = $em->getRepository('RemmyBackOfficeBundle:ProductHasColor');
        $colorsRepo = $em->getRepository('RemmyBackOfficeBundle:Color');
        $productCategoryRepo = $em->getRepository('RemmyBackOfficeBundle:Category');

        // $session->set('product', $products);
        // $session->set('colorsRepo', $colorsRepo);

        return $this->render('@RemmyFront/Homepage/home.html.twig',
         array(
                'products' => $products,
                'productsHasColors' => $productsHasColors,
                'colorsRepo' => $colorsRepo,
                'productCategoryRepo' => $productCategoryRepo,
                ));
    }

    public function aboutAction()
    {
        return $this->render('@RemmyFront/Homepage/about.html.twig');
    }

    public function cgvAction()
    {
        return $this->render('@RemmyFront/Homepage/CGV.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@RemmyFront/Homepage/contact.html.twig');
    }
    
    public function sitemapAction()
    {
        return $this->render('@RemmyFront/Homepage/sitemap.html.twig');
    }
}
