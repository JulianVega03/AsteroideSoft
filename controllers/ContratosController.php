<?php

require_once 'models/TipoContratoModel.php';
class ContratosController extends Controller{

private $contratoModel;

public function __construct(){
     $this->contratoModel = $this->model('Contrato');
}

public function actionIndex(){
    $datos = [
        "listContratos" => $this->listar(),
        "listTipoContrato" => $this->obtenerTipoContrato()
    ];
    $this->view('contratos/listar',$datos);
}

public function listar(){
    return $this->contratoModel->obtenerTodos();
}

public function obtenerTipoContrato(){
        $lista = [];
        $tipoContratoModel = new TipoContratoModel();
        $lista = $tipoContratoModel->obtenerTodos();
        return $lista;
}



}