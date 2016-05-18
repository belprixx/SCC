<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class userController extends Controller
{
    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return $this->render('SccBundle:user:hello.html.twig', array(
            // ...
        ));
    }

}
