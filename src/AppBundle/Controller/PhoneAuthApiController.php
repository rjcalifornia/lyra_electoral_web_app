<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Acta_presidencial;
use AppBundle\Entity\Devices;

class PhoneAuthApiController extends Controller
{
    
    /**
     * Returns a JSON string with the voting centers
     *
     * @Route("/api/resources/authentication/request/", name="api_auth_request")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function RequestAuthenticationAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        
        $data = json_decode($request->getContent(), true);
        
        $deviceId = $data['device_id'];
        $phoneNumber = $data['phone_number'];
        
        // Get Entity manager and repository
       // $em = $this->getDoctrine()->getManager();
//        $transmitterRepository = $em->getRepository("AppBundle:Transmitter");
        
        if($deviceId != null && $phoneNumber != null)
            {
            $validation = $this->validateDevice($deviceId, $phoneNumber);
            
            switch ($validation) {
                case true:
                    $responseArray = ([
                     "code" => "200",
                     "message" => "Dispositivo autorizado para transmitir"
                 ]);
                    break; 
                
                
                case false:
                    $responseArray = ([
                     "code" => "500",
                     "message" => "No fue posible validar el dispositivo. Revise los datos ingresados e intente de nuevo"
                 ]);
                 break;

                default:
                    break;
            }
            
                

                // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
         //       $centers = $centersRepository->createQueryBuilder("q")
           //         ->getQuery()
             //       ->getResult();

                // Serialize into an array the data that we need, in this case only name and id
                // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
     /*           $responseArray = array();
                foreach($centers as $obj){
                    $responseArray[] = array(
                        "id" => $obj->getId(),
                        "name" => $obj->getNombrecentro()
                    );
                }
*/
                // Return array with structure of the neighborhoods of the providen city id
                return new JsonResponse($responseArray);
            }
             
        
    }
    
    
    
    
    
    
    /**
     * Returns a JSON string with the voting centers
     *
     * @Route("/api/resources/authentication/check-device/", name="api_auth_check")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function CheckDeviceAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        $responseArray = array();
        $data = json_decode($request->getContent(), true);
        
        $deviceId = $data['device_id'];
        
        $findDevice = $this->findDevice($deviceId);
        
        switch ($findDevice)
        {
            case '200':
                $responseArray = ([
                "code" => '200',
                "status" => "allowed"
            ]);
                break;
            
            case '403':
                $responseArray = ([
                "code" => '403',
                "status" => "forbidden"
            ]);
                break;
            
            case '404':
                $responseArray = ([
                "code" => '404',
                "status" => "not_found"
            ]);
                break;
        }
       /* 
        if($findDevice == '200')
            {
            $responseArray = ([
                "code" => '200',
                "status" => "allowed"
            ]);
            
            return new JsonResponse($responseArray);

            }
            else
                {
                    $responseArray = ([
                        "code" => 403,
                        "status" => "allowed"
                    ]);
            
            return new JsonResponse($responseArray);
                }
        * 
        */
         return new JsonResponse($responseArray);
    }    
    
    
    
    
private function findDevice($deviceId){
    $em = $this->getDoctrine()->getManager();
    $devicesRepository = $em->getRepository("AppBundle:Devices");
    $devices = $devicesRepository->findOneBy(array('deviceid'=>$deviceId));
    
    $allowed = '200';
    $denied = '403';
    $notFound = '404';
    
    
    if($devices != null){
        $deviceStatus = $devices->getAuthid()->getStatus()->getId();
        switch($deviceStatus)
        {
            case 1:
                return $allowed;
                break;
            case 2:
                return $denied;
                break;
            
        }
        
    }
    else 
    {
            return $notFound;
    }
}
    
    
 private function validateDevice($deviceId, $phoneNumber){
         $em = $this->getDoctrine()->getManager();
         $transmitterRepository = $em->getRepository("AppBundle:Transmitter");
         $devicesRepository = $em->getRepository("AppBundle:Devices");
         
         $transmitter = $transmitterRepository->findOneBy(array('phonenumber'=>$phoneNumber));
         $devices = $devicesRepository->findOneBy(array('deviceid'=>$deviceId));
         
         
         if($transmitter != null && $devices == null)
             {
             $device = new Devices();
             $device->setPhonenumber($phoneNumber);
             $device->setDeviceid($deviceId);
             $device->setAuthid($transmitter);
             $em->persist($device);
             $em->flush();
             
             return true;
             }
         else
             {
             return false;
             }
        
    }
    
    
}