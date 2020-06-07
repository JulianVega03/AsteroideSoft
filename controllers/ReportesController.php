<?php

class ReportesController extends Controller
{

    

    public function __construct()
    {
        
    }

    public function actionIndex()
    {
        require_once 'models/ProyectoModel.php';
        $pModel = new ProyectoModel();

        $datos = [
            "titulo" => "Reportes",
            "listProyectos" => $pModel->obtenerTodos()
        ];
        $this->view('reportes/index',$datos);
    }

    public function actionPdf(){
        $this->view('reportes/reporte-pdf');
    }

   
}
