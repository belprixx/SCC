<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

class adminController extends BaseController
{
    /**
     * @Route("/admin", name="indexAdmin")
     */
    public function adminAction(Request $request)
    {
        $response = parent::registerAction( $request );

        return $this->render('SccBundle:admin:admin.html.twig');
    }

}
