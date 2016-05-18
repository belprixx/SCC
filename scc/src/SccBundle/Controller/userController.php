<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class userController extends Controller
{
    /**
     * @Route("/user", name="indexUser")
     */
    public function indexAction()
    {
        return $this->render('SccBundle:user:indexUser.html.twig', array(// ...
        ));
    }
    
}