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
        $test = "theo";
        return $this->render('SccBundle:user:profil.html.twig', array(
            // ...
        ));
    }

}
