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
        $candidature = $this -> getDoctrine()
            ->getRepository('SccBundle:Register')
            ->findBy(
                array('status' => 'unchecked')
            );
        return $this->render('SccBundle:admin:admin.html.twig',array('Candidatures' => $candidature));
    }

}
