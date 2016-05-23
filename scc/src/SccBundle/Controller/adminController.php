<?php

namespace SccBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SccBundle\Entity\Jobs;
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
    public function adminAction()
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
            ->add('Duration',NumberType::class)
            ->add('StartDate',DateType::class)
            ->add('EndDate',DateType::class,array('label'=>'Date de Fin'))
            ->add('save', SubmitType::class, array('label' => 'Valider'))
            ->getForm();
        /*bug */

        $candidature = $this -> getDoctrine()
            ->getRepository('SccBundle:Register')
            ->findBy(
                array('status' => 'unchecked')
            );
        return $this->render('SccBundle:admin:admin.html.twig',array('Candidatures' => $candidature,'form' => $form->createView()));
    }

}
