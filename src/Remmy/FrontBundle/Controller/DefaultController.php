<?php

namespace Remmy\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@RemmyFront/Default/index.html.twig');
    }
}