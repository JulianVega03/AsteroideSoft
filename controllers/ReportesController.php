<?php

class ReportesController extends Controller
{

    

    public function __construct()
    {
        
    }

    public function actionIndex()
    {
        $datos = [
            "titulo" => "Reportes"
        ];
        $this->view('reportes/index',$datos);
    }

   
}
