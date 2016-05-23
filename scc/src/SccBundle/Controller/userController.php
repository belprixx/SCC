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
            $user = $this->showAction();
            $email = $user->getEmail();
            $nom = $user->getNom();
            $prenom = $user->getPrenom();
            $username = $user->getUsername();
            return $this->render('SccBundle:user:indexUser.html.twig', array("email"=>$email, "nom"=>$nom, "prenom"=>$prenom, "username"=>$username
            ));
    }

    public function showAction()
    {
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getId();
        $id = $this->getDoctrine()
            ->getRepository('SccBundle:user')
            ->find($id_user);

        return($id);
    }

        /*     FONCTION update profil à terminer

    public function updateAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('SccBundle:user')->find($id_user);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$productId
            );
        }

        $user->setNom("nom");
        $user->setPrenom("prenom");
        $user->setEmail("email");
        $em->flush();

        return $this->redirectToRoute('homepage');
    }*/
    
}
