<?php
require_once 'entities/Actividad.php';

class ActividadModel extends Model{

        private $db;
        private $actividad;

    function __construct()
    {
        $this->actividad = new Actividad();
        $this->db = new Database();
    }


    public function insertar($actividad){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}