<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security; 


class ResultadosController extends Controller
{
    /**
     * @Route("/resultados", name="resultados_home")
     */
    public function InicioAction(Request $request)
    {
         return $this->render('AppBundle:Resultados:inicio.html.twig');
        
    }
    
    
    /**
     * @Route("/resultados/presidenciales/grafico/", name="ver_resultados_presidenciales")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_REPORTE')")
     */
    public function GraficoPresidencialAction(Request $request)
    { 
         $MunicipioID = 1;
        $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Acta_presidencial');
        $AlcaldeResultado = $AlcaldeRepository->findBy(array('municipioid'=>"$MunicipioID"));
        
        $fmln = 0;
        $arena = 0;
        $vamos = 0;
        $gana = 0;
        $ds = 0;
        $pcn = 0;
        $pdc = 0;
        $coalicion = 0;
        
        foreach ($AlcaldeResultado as $m)
        {
            $fmln = $fmln + $m->getFmln();
            $arena = $arena + $m->getArena();
            $vamos = $vamos + $m->getVamos();
            $gana = $gana + $m->getGana();
            $ds = $ds + $m->getDs();
            $pcn =  $pcn + $m->getPcn();
            $pdc =  $pdc + $m->getPdc();
            $coalicion = $coalicion + $m->getCoalicion();

            
        }
        
        $data['fmln'] = $fmln;
        $data['arena'] = $arena;
        $data['vamos'] = $vamos; 
        $data['gana'] = $gana;
        $data['ds'] = $ds;
        $data['pcn'] = $pcn;
        $data['pdc'] = $pdc;
        $data['coalicion'] = $coalicion;

        
         return $this->render('AppBundle:Resultados:graficos.html.twig', array('data'=> $data));
        
   
    }
    
    
    
    
     /**
     * @Route("/resultados-presidenciales/tabla/", name="ver_resultados_presidenciales_tabla")
     * @Security("has_role('ROLE_ADMIN') or has_role('ROLE_REPORTE')")
     */
    public function TablaResultadosAction(Request $request)
    { 
         $MunicipioID = 1;
        $AlcaldeRepository = $this->getDoctrine()
                                 ->getRepository('AppBundle:Acta_presidencial');
        $AlcaldeResultado = $AlcaldeRepository->findBy(array('municipioid'=>"$MunicipioID"));
        
        $fmln = 0;
        $arena = 0;
         
        $gana = 0;
       $ds = 0;
        $pcn = 0;
        $pdc = 0;
        $coalicion = 0;
         $vamos = 0;
         
         
        foreach ($AlcaldeResultado as $m)
        {
            $fmln = $fmln + $m->getFmln();
            $arena = $arena + $m->getArena();
            
            $gana = $gana + $m->getGana();
            $ds = $ds + $m->getDs();
            $pcn =  $pcn + $m->getPcn();
            $pdc =  $pdc + $m->getPdc();
            
            $coalicion = $coalicion + $m->getCoalicion();
            $vamos = $vamos + $m->getVamos();
            
        }
        
        $data['fmln'] = $fmln;
        $data['arena'] = $arena;
        
        $data['gana'] = $gana;
       
        $data['pcn'] = $pcn;
        $data['pdc'] = $pdc;
        $data['ds'] = $ds;
        $data['coalicion'] = $coalicion;
        $data['vamos'] = $vamos; 

        
         return $this->render('AppBundle:Resultados:tabla.html.twig', array('data'=> $data));
        
    }
    
    
}
