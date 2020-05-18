<?php
require_once 'entities/Cargo.php';

class CargoModel extends Model{

        private $db;
        private $cargo;

    function __construct()
    {
        $this->cargo = new Cargo();
        $this->db = new Database();
    }


    public function insertar($cargo){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}