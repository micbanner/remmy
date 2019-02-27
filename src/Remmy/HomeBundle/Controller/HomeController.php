<?php

namespace Remmy\HomeBundle\Controller;

use Laviva\BackOfficeBundle\Entity\product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\File\File;


class HomeController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('RemmyBackOfficeBundle:Product')->findAll();

        return $this->render('@RemmyHome/Homepage/home.html.twig',
         array('products' => $products,));
    }

    public function aboutAction()
    {
        return $this->render('@RemmyHome/Homepage/about.html.twig');
    }

    public function cgvAction()
    {
        return $this->render('@RemmyHome/Homepage/CGV.html.twig');
    }

    public function contactAction()
    {
        return $this->render('@RemmyHome/Homepage/contact.html.twig');
    }
    
    public function sitemapAction()
    {
        return $this->render('@RemmyHome/Homepage/sitemap.html.twig');
    }
}
