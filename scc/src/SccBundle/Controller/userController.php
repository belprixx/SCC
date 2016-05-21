<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class userController extends Controller
{
    /**
     * @Route("/", name="indexUser")
     */
    public function indexAction()
    {
        if (($this->container->get('security.context')->isGranted('ROLE_SUPER_ADMIN')))
        {
            return $this->redirect('admin');
        }
            return $this->render('SccBundle:user:indexUser.html.twig', array(// ...
            ));
    }
    
}