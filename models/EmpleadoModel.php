<?php
require_once 'entities/Empleado.php';

class EmpleadoModel extends Model{

        private $db;
        private $empleado;

    function __construct()
    {
        $this->empleado = new Empleado();
        $this->db = new Database();
    }


    public function insertar($empleado){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}