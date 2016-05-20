<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class adminController extends Controller
{
    /**
     * @Route("/admin", name="indexAdmin")
     */
    public function adminAction()
    {
        return $this->render('SccBundle:user:indexUser.html.twig');
    }

}
