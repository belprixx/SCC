<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/faq", name="indexFaq")
     */
    public function indexFaq()
    {
        return $this->render('SccBundle:Default:indexFaq.html.twig');
    }
    /**
     * @Route("/agenda", name="indexAgenda")
     */
    public function indexAgenda()
    {
        return $this->render('SccBundle:Default:indexAgenda.html.twig');
    }
    /**
     * @Route("/candidature", name="indexCandidature")
     */
    public function indexCandidature()
    {
        $jobs = $this -> getDoctrine()
            ->getRepository('SccBundle:Jobs')
            ->findAll();
        return $this->render('SccBundle:Default:indexCandidature.html.twig',array('Jobs' => $jobs));
    }
}
