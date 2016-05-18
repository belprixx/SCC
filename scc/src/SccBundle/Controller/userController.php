<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class userController extends Controller
{
    /**
     * @Route("/user")
     */
    public function profilAction()
    {
        return $this->render('SccBundle:user:profil.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/user/profil")
     */
    public function indexAction()
    {
        return $this->render('SccBundle:user:profil.html.twig', array(
            // ...
        ));
    }

}
