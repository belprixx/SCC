<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use SccBundle\Entity\Jobs;
use SccBundle\Entity\Register;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class adminController extends Controller
{
    /**
     * @Route("/admin", name="indexAdmin")
     */
    public function adminAction(Request $request)
    {
        $Jobs = new Jobs();
        // On crée le FormBuilder grâce a la fonction createForm
        $form = $this->createFormBuilder($Jobs)
            ->add('Titre', TextType::class)
            ->add('Resume',TextareaType::class,array('label'=>'Contenue'))
            ->add('NbCoach',ChoiceType::class,array('choices' =>
                array("1" => 1,
                    "2" => 2,
                    "3" => 3,
                    "4" => 4,
                    "5" => 5),'label' =>'Nombre de Coach'))
            ->add('id_user', HiddenType::class, array('data' => 'null'))
            ->add('Duration',NumberType::class,array('attr'=>array('placeholder'=>"chiffres")))
            ->add('StartDate',DateType::class)
            ->add('EndDate',DateType::class,array('label'=>'Date de Fin'))
            ->add('save', SubmitType::class, array('label' => 'Valider'))
            ->getForm();
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
            $form->handleRequest($request);
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($form->isValid()) {
                // On enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($Jobs);
                $em->flush();
                // On redirige vers la page
                return $this->redirectToRoute('indexAdmin', array());
            }
        }

        $candidature = $this -> getDoctrine()
            ->getRepository('SccBundle:Register')
            ->findBy(
                array('status' => 'unchecked')
            );
        return $this->render('SccBundle:admin:admin.html.twig',array('Candidatures' => $candidature,'form' => $form->createView()));
    }
    /**
     * @Route("/admin/addUser/{id}", name="addUser", requirements={"id" = "\d+"})
     */
    public function addUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $candidature = $em->getRepository('SccBundle:Register')->find($id);

        $candidature->setStatus('checked');
        $em->flush();
        return $this->redirect($this->generateUrl('indexAdmin'));
    }
    /**
     * @Route("/admin/removeUser/{id}", name="removeUser", requirements={"id" = "\d+"})
     */
    public function removeUserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $candidature = $em->getRepository('SccBundle:Register')->find($id);
        $em->remove($candidature);
        $em->flush();
        return $this->redirect($this->generateUrl('indexAdmin'));
    }



}
