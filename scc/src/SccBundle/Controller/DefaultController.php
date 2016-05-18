<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="indexDefault")
     */
    public function indexAction()
    {
        return $this->render('SccBundle:Default:index.html.twig');
    }

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
}
