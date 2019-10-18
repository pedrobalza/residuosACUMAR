<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PruebaController extends AbstractController
{
    /**
     * @Route("/prueba", name="prueba")
     */
    public function index()
    {

        $array = [
            'nombre'=>'nombre',
            'puntoLatitud'=>'11',
            'puntoLongitud'=>'12',
            'adHoc'=>1,
            'fechaAlta'=>'2018-10-19 00:00:00',
            'auditorAlta'=>'2018-10-19 00:00:00',
            'fechaActualizacion'=>'',
            'auditorActualizacion'=>'',
            'fechaBaja'=>'',
            'auditorBaja'=>''
        ];

        $array = json_encode($array);


        return $this->render('prueba/index.html.twig',['datos'=>$array]);
    }


}
