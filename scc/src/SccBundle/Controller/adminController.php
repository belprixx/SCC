<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\UserBundle\Controller\RegistrationController as BaseController;

class adminController extends BaseController
{
    /**
     * @Route("/admin", name="indexAdmin")
     */
    public function adminAction()
    {
        return $this->render('SccBundle:user:indexUser.html.twig');
    }

}
