<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Acta_presidencial;

class LyraApiController extends Controller
{
    
    /**
     * Returns a JSON string with the voting centers
     *
     * @Route("/api/resources/voting-centers/", name="api_voting_centers")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function getVotingCentersAction(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $centersRepository = $em->getRepository("AppBundle:Centrovotacion");
        
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $centers = $centersRepository->createQueryBuilder("q")
            ->getQuery()
            ->getResult();
        
        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach($centers as $obj){
            $responseArray[] = array(
                "id" => $obj->getId(),
                "name" => $obj->getNombrecentro()
            );
        }
        
        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);

        
    }
    
    
    
    
    /**
    * Returns a JSON string with the JRV of the selected sector with the providen id.
    *
    * @Route("/api/resources/jrv/", name="api_polling_stations")  
    * 
    * @param Request $request
    * @return JsonResponse
    */
   public function getPollingStationsAction(Request $request)
   {
       // Get Entity manager and repository
       $em = $this->getDoctrine()->getManager();
       $jrvRepository = $em->getRepository("AppBundle:Jrv");

       // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
       $jrv = $jrvRepository->createQueryBuilder("q")
           ->getQuery()
           ->getResult();

       // Serialize into an array the data that we need, in this case only name and id
       // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
       $responseArray = array();
       foreach($jrv as $obj){
           $responseArray[] = array(
               "id" => $obj->getId(),
               "poll_station" => $obj->getJrvnum(),
               "voting_center_id" => $obj->getCentrovotacionid(),
           );
       }

       // Return array with structure of the neighborhoods of the providen city id
       return new JsonResponse($responseArray);


   } 
   
   
       
    /**
     * Stores results information
     *
     * @Route("/api/resources/save-results/", name="save_contact_api")  
     * @param Request $request
     * @return JsonResponse
     */
    public function saveAppResultsApiAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        $em = $this->getDoctrine()->getManager();
        
        $data = json_decode($request->getContent(), true);
        
        //Acta header
        $getCentroVotacionId = $data['centro_votacion'];
        $getJrvId = $data['jrv'];
        $sobrantes = $data['sobrantes'];
        $inutilizadas = $data['inutilizadas'];
        
        //Acta votes
        $votosFmln = $data['votos_fmln'];
        $votosGana = $data['votos_gana'];
        $votosVamos = $data['votos_vamos'];
        $votosArena = $data['votos_arena'];
        $votosPcn = $data['votos_pcn'];
        $votosPdc = $data['votos_pdc'];
        $votosDs = $data['votos_ds'];
        $votosCoalicion = $data['votos_coalicion'];
        
        //Acta details
        $impugnados = $data['impugnados'];
        $nulos = $data['nulos'];
        $abstenciones = $data['abstenciones'];
        $escrutados = $data['escrutados'];
        $faltantes = $data['faltantes'];
        $entregados = $data['entregados'];
                
        
        
        $deviceId = $data['device_id'];
        
        if($deviceId != null)
        {
        
        $jrvRepository = $em->getRepository('AppBundle:Jrv');
        $jrv = $jrvRepository->findOneBy(array('id'=>"$getJrvId"));
        
        $centroVotacionRepository = $em->getRepository('AppBundle:Centrovotacion');
        $centroVotacion = $centroVotacionRepository->findOneBy(array('id'=>"$getCentroVotacionId"));
        
        $acta = new Acta_presidencial();
        $acta->setCentrovotacion($centroVotacion);
        $acta->setJrv($jrv);
        $acta->setSobrantes($sobrantes);
        $acta->setInutilizadas($inutilizadas);
        
        //votos
        $acta->setFmln($votosFmln);
        $acta->setGana($votosGana);
        $acta->setVamos($votosVamos);
        $acta->setArena($votosArena);
        $acta->setPcn($votosPcn);
        $acta->setPdc($votosPdc);
        $acta->setDs($votosDs);
        $acta->setCoalicion($votosCoalicion);
        
        //details
        $acta->setImpugnados($impugnados);
        $acta->setNulo($nulos);
        $acta->setAbstenciones($abstenciones);
        $acta->setEscrutados($escrutados);
        $acta->setFaltantes($faltantes);
        $acta->setEntregados($entregados);
        $acta->setDeviceid($deviceId);
        
        $em->persist($acta);
        $em->flush();
        
        // $responseArray = $acta->getId();
         $responseArray[] = array(
                                "type" => "success",
                                "message" => "Datos guardados correctamente",
                            );
         
         return new JsonResponse($responseArray);
        }
        else{
            
            $responseArray[] = array(
                                "type" => "error",
                                "message" => "Not allowed",
                            );
         
         return new JsonResponse($responseArray);
            
        }
        
    }
    
    
     /**
     * Returns a JSON with the contacts stored in the database
     *
     * @Route("/api/resources/reports/my-submissions/", name="show_resultss_api")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function ShowAllContactsAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        $em = $this->getDoctrine()->getManager();
        
        $data = json_decode($request->getContent(), true);
        
        $deviceId = $data['device_id'];
        
        if($deviceId != null)
            {
            
                $actasRepository = $em->getRepository("AppBundle:Acta_presidencial");
        
                $actas = $actasRepository->createQueryBuilder("q")
                    ->where("q.deviceid = :device")
                    ->setParameter("device", $deviceId)
                    ->getQuery()
                    ->getResult();
                
                $responseArray = array();
                        foreach($actas as $obj){
                            $responseArray[] = array(
                                "centro_votacion" => $obj->getCentrovotacion()->getNombrecentro(),
                                "jrv" => $obj->getJrv()->getJrvnum(),
                                "sobrantes" => $obj->getSobrantes(),
                                "inutilizadas" => $obj->getInutilizadas(),
                                "votos_fmln" => $obj->getFmln(),
                                "votos_gana" => $obj->getGana(),
                                "votos_vamos" => $obj->getVamos(),
                                "votos_arena" => $obj->getArena(),
                                "votos_pcn" => $obj->getPcn(),
                                "votos_pdc" => $obj->getPdc(),
                                "votos_ds" => $obj->getDs(),
                                "votos_coalicion" => $obj->getCoalicion(),
                                "impugnados" => $obj->getImpugnados(),
                                "nulos" => $obj->getNulo(),
                                "abstenciones" => $obj->getAbstenciones(),
                                "escrutados" => $obj->getEscrutados(),
                                "faltantes" => $obj->getFaltantes(),
                                "entregados" => $obj->getEntregados(),
                            );
        }
        
        
        // Return array with structure of the neighborhoods of the providen city id
        return new JsonResponse($responseArray);
            
            }
            else
            {
                 $responseArray[] = array(
                                "type" => "error",
                                "message" => "Not allowed",
                            );
                return new JsonResponse($responseArray);
            }
    }
}