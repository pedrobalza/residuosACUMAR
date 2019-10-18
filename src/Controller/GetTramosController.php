<?php

namespace App\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController ;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Utils\Encoder;


/**
 * Class ApiController
 *
 * @Route("/api")
 */
class GetTramosController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/get/tramos.{_format}", name="get_tramo", defaults={"_format":"json"})
     *
     */
    public function getTramos(Request $request) {
        $em = $this->getDoctrine()->getManager();


        $tramos = $em->getRepository("App:TaGenTramos")->findAll();


        if($tramos){
            $response = [
                'code' => 200,
                'error' => false,
                'data' => $tramos
            ];
        }else{

            $response = [
                'code' => 400,
                'error' => true,
                'data' => 'Curt no encontrado'
            ];
        }



        $response = Encoder::convert($response,['service']);
        return new Response($response);

    }


}