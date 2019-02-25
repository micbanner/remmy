<?php

namespace Remmy\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@RemmyMain/Default/index.html.twig');
    }
}
