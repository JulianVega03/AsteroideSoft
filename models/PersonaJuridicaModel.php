<?php
require_once 'entities/PersonaJuridica.php';

class PersonaJuridicaModel extends Model{

        private $db;
        private $pjuridica;

    function __construct()
    {
        $this->pJuridica = new PersonaJuridica();
        $this->db = new Database();
    }


    public function insertar($pJuridica){
       
    }

    public function obtenerById(){
       
    }

    public function obtenerTodos(){
       
    }

}