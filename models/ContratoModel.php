<?php
require_once 'entities/Contrato.php';

class ContratoModel extends Model{

        private $db;
        private $contrato;

    function __construct()
    {
        $this->contrato = new Contrato();
        $this->db = new Database();
    }


    public function insertar($contrato){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}