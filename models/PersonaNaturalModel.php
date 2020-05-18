<?php
require_once 'entities/PersonaNatural.php';

class PersonaNaturalModel extends Model{

        private $db;
        private $pNatural;

    function __construct()
    {
        $this->pNatural = new PersonaNatural();
        $this->db = new Database();
    }


    public function insertar($pNatural){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}