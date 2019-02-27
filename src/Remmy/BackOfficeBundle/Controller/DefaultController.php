<?php

namespace Remmy\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@RemmyBackOffice/AdminOffice/admin.html.twig');
    }
}
