<?php
require_once 'entities/Proyecto.php';

class ProyectoModel extends Model{

        private $db;
        private $proyecto;

    function __construct()
    {
        $this->proyecto = new Proyecto();
        $this->db = new Database();
    }


    public function insertar($proyecto){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}