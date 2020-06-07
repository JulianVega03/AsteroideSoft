<?php

class EstadisticasController extends Controller
{

    

    public function __construct()
    {
        
    }

    public function actionIndex()
    {
        require_once 'models/ProyectoModel.php';
        $pModel = new ProyectoModel();

        $datos = [
            "titulo" => "Estadisticas",
            "listProyectos" => $pModel->obtenerTodos()
        ];
        $this->view('estadisticas/estadisticas',$datos);
    }

   
}
