<?php

namespace Laviva\BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\request;

class SecurityController extends Controller
{

    public function AdminPageAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
        return $this->render('@RemmyBackOffice/AdminOffice/admin.html.twig');
        }
    }
}
