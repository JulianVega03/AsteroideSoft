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
        $contratos = [];
        try{
         $query = $this->db->connect()->query("SELECT * FROM contrato");
        
         while($row = $query->fetch()){
             $contrato = new Contrato();
             $contrato->setCodigo($row['codigo']);
             $contrato->setTipo($row['tipo']);
             $contrato->setPersona($row['persona']);
             $contrato->setFechaFirma($row['fecha_firma']);
             $contrato->setValor($row['valor']);
             $contrato->setEstado($row['estado']);
             array_push($contratos, $contrato);
         }
         return $contratos;
     }catch(PDOException $e){
         return [];
        }
    }

}