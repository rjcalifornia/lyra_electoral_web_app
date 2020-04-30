<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security; 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\Transmitter;

class DevicesController extends Controller
{
    /**
     * @Route("/administracion/transmisores/agregar/", name="administracion_agregar_transmisor")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_DEVICES')")
     */
    public function AgregarTransmisoresAction(Request $request)
    { 
        $transmitter = new Transmitter();
        
        $statusRepository = $this->getDoctrine()->getRepository('AppBundle:Status');
        
        $status = $statusRepository->createQueryBuilder("r")
        //->select('IDENTITY(r.paisid)')
        ->getQuery()
        ->getResult();
        
        $form = $this->createFormBuilder($transmitter);
        
        $form  ->add('status', 
              EntityType::class, 

                        array(
                            'class' => \AppBundle\Entity\Status::class,
                            'choice_label' => 'name',
                            'choice_value' => 'id',
                            'placeholder'=> 'Estado',
                            "attr" => array
                            ('class' => 'select4 form-control')
                            ))
                
                ;
        
        $form =  $form->getForm();
        
        //$form = $this->createForm(AgregarPaisType::class, $pais);
        $form->handleRequest($request);
        
        
         return $this->render('AppBundle:Administracion:agregar-transmisor.html.twig', array('form'=> $form->createView()));
    }
    
}
