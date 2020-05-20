<?php
require_once 'entities/Entregable.php';

class EntregableModel extends Model{

        private $db;
        private $entregable;

    function __construct()
    {
        $this->entregable = new Entregable();
        $this->db = new Database();
    }


    public function insertar($entregable){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}