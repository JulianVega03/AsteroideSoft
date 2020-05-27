<?php
require_once 'models/ProyectoModel.php';
class ActividadesController extends Controller
{

    private $entregableModel;
    private $proyectoId;
    private $datos;

    public function __construct()
    {
        $this->datos = ["titulo" => "Actividades"];
    }

    public function actionVer($param){
        $this->view('actividades/verEntregable',$this->datos);
    }

    

}
