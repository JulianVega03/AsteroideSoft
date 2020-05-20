<?php
require_once 'entities/CargoEmpleado.php';

class CargoEmpleadoModel extends Model{

        private $db;
        private $cargoEmpleado;

    function __construct()
    {
        $this->cargoEmpleado = new CargoEmpleado();
        $this->db = new Database();
    }


    public function insertar($cargoEmpleado){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}