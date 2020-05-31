<?php

class EstadisticasController extends Controller
{

    

    public function __construct()
    {
        
    }

    public function actionIndex()
    {
        $datos = [
            "titulo" => "Estadisticas"
        ];
        $this->view('estadisticas/estadisticas',$datos);
    }

   
}
