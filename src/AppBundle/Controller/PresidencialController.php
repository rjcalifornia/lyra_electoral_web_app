<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Acta_presidencial;
use AppBundle\Form\Acta_presidencialType;

class PresidencialController extends Controller
{
    /**
     * @Route("/agregar-acta-presidencial/", name="agregar_acta_presidencial")
     */
    public function AgregarActaConcejoAction(Request $request)
    {   
        $acta = new Acta_presidencial();
        $form = $this->createForm(Acta_presidencialType::class, $acta);
        $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
         
        $acta = $form->getData();
        $em = $this->getDoctrine()->getManager();
        
        $jrvid = $acta->getJrv()->getId();

         
        $jrvRepository = $em->getRepository("AppBundle:Acta_presidencial");
        $validation = $jrvRepository->findOneBy(array('jrv' => "$jrvid"));
         
        if($validation == null)
        {
            $em->persist($acta);
            $em->flush();


            $this->addFlash(
                'notice',
                'Acta Presidencial enviada correctamente al sistema'
            );

            return $this->redirectToRoute('homepage');
        }
        
        if($validation != null)
        {
            return $this->redirectToRoute('acta_duplicada_error');
        }
    }
         return $this->render('AppBundle:Presidencial:agregar-acta-presidencial.html.twig', array('concejo'=> $form->createView()));
         
    }
    
    
    
     /**
     * Returns a JSON string with the JRV of the selected sector with the providen id.
     *
     * @Route("/obtener-jrv-sector-electoral/", name="jrv_sector_electoral")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function obtenerJuntaSectorAction(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $jrvRepository = $em->getRepository("AppBundle:Jrv");
        
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $jrv = $jrvRepository->createQueryBuilder("q")
            ->where("q.centrovotacionid = :sector")
            ->setParameter("sector", $request->query->get("sectorid"))
            ->getQuery()
            ->getResult();
        
        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach($jrv as $obj){
            $responseArray[] = array(
                "id" => $obj->getId(),
                "name" => $obj->getJrvnum()
            );
        }
        
        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        
    } 
}
