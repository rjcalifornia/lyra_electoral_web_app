<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;   
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security; 


class ProcesadasController extends Controller
{
    /**
     * @Route("/jrv/seleccion", name="jrv_seleccion")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_REPORTE')")
     */
    public function SeleccionAction(Request $request)
    {
        $defaultData = array('message' => 'Seleccionar tipo de acta:');
        $form = $this->createFormBuilder($defaultData)
       ->add('centrovotacion', 
              EntityType::class, 

                                array(
                                    'class' => \AppBundle\Entity\Centrovotacion::class,
                            'choice_label' => 'nombrecentro',
                            'choice_value' => 'id',
                                    'placeholder'=> 'Seleccione Centro de Votacion',
                                    "attr" => array
                                    ('class' => 'select4 form-control')
                                    ))
        ->add('siguiente', SubmitType::class, array(
            
            "attr" => array
                        ('class' => 'btn btn-success')
        ))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
            $data = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $centroVotacionId = $data['centrovotacion'];
            $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Acta_presidencial');
                $findCentro = $AlcaldeRepository->findBy(array('centrovotacion'=>$centroVotacionId));
                
                
                 $ingresadas = $em->createQueryBuilder()->select('IDENTITY(t.jrv) as jrvid')
                        ->from('AppBundle:Acta_presidencial', 't')
                        ->where('t.centrovotacion = :sector')
                        ->setParameter('sector', $centroVotacionId)
                        ->getQuery()
                        ->getResult()
                        ;
                
                 
                 $cuantos = $em->createQueryBuilder()->select('COUNT(t.jrv)')
                        ->from('AppBundle:Acta_presidencial', 't')
                        ->where('t.centrovotacion = :sector')
                        ->setParameter('sector', $centroVotacionId)
                        ->getQuery()
                        ->getSingleScalarResult()
                        ;
                 
                if($ingresadas != null)
                {
                $faltantes = $em->createQueryBuilder()->select('m.id')
                        ->from('AppBundle:Jrv', 'm')
                        ->where('m.centrovotacionid = :sector')
                        ->andWhere('m.jrvnum NOT IN (:ingresados)')
                        ->setParameter('sector', $centroVotacionId)
                        ->setParameter('ingresados', $ingresadas)
                        ->getQuery()
                        ->getResult()
                        ;
                }
                
                if($ingresadas == null)
                {
                $faltantes = $em->createQueryBuilder()->select('m.id')
                        ->from('AppBundle:Jrv', 'm')
                        ->where('m.centrovotacionid = :sector')
                         
                        ->setParameter('sector', $centroVotacionId)
                         
                        ->getQuery()
                        ->getResult()
                        ;
                }
              
                $CentroRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Centrovotacion');
                $findidcentro = $CentroRepository->findOneBy(array('id'=>$centroVotacionId));
                $name = $findidcentro->getNombrecentro();
                $cantidadjrv = $findidcentro->getTotaljrv();
                
                $data['ingresados'] = $ingresadas;
                $data['faltantes'] = $faltantes;
                $data['cuantos'] = $cuantos;
            return $this->render('AppBundle:Procesos:procesados.html.twig', 
                    array(
                        'resultado'=> $findCentro,   
                        'nombrecentro' => $name,
                        'data' => $data,
                        'totaljrv' => $cantidadjrv));
        }
         return $this->render('AppBundle:Procesos:seleccion.html.twig', array('seleccion'=> $form->createView()));
        // replace this example code with whatever you need
        /**
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
         * 
         */
    }
}
