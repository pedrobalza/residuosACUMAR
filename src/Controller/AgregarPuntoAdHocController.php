<?php

namespace App\Controller;


use App\Entity\TaGenTramosPuntos;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController ;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Utils\Encoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class ApiController
 *
 * @Route("/api")
 */
class AgregarPuntoAdHocController extends AbstractController
{
    /**
     * @Rest\Get("/set/puntoAdHoc/{array}/{tramoId}.{_format}", name="set_puntoAdHoc", defaults={"_format":"json"})
     *
     */
    public function setPuntoAdHoc(Request $request, $array, $tramoId) {

        $array = json_decode($array, true);

        $entityManager = $this->getDoctrine()->getManager();
//
//        print_r($array['nombre']);
//        die();
//
//        extract($array);

        $product = new TaGenTramosPuntos();
        $product->settramoId($tramoId);
        $product->setnombre($array['nombre']);
        $product->setpuntoLatitud($array['puntoLatitud']);
        $product->setpuntoLongitud($array['puntoLongitud']);
        $product->setadHoc($array['adHoc']);
        $product->setfechaAlta($array['fechaAlta']);
        $product->setauditorAlta($array['auditorAlta']);
        $product->setfechaActualizacion($array['fechaActualizacion']);
        $product->setauditorActualizacion($array['auditorActualizacion']);
        $product->setfechaBaja($array['fechaBaja']);
        $product->setauditorBaja($array['auditorBaja']);



        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();


        if($product){
            $response = [
                'code' => 200,
                'error' => false,
                'data' => $product->getId()
            ];
        }else{
            $response = [
                'code' => 400,
                'error' => true,
                'data' => 'Puntos no encontrado'
            ];
        }



        $response = Encoder::convert($response,['service']);
        return new Response($response);

    }

}
