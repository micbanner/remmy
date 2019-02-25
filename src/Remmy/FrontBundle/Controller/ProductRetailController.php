<?php

namespace Remmy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductRetailController extends Controller
{

    public function RetailAction()
    {
        return $this->render('@RemmyFront/Retail.html.twig');
    }
}
