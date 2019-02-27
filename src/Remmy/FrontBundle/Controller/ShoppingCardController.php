<?php

namespace Remmy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShoppingCardController extends Controller
{

    public function ShoppingAction()
    {
        return $this->render('@RemmyFront/ShoppingCard/ShoppingCard.html.twig');
    }
}
