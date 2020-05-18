<?php
require_once 'entities/Etapa.php';

class EtapaModel extends Model{

        private $db;
        private $etapa;

    function __construct()
    {
        $this->etapa = new Etapa();
        $this->db = new Database();
    }


    public function insertar($etapa){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}