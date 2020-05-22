<?php
require_once 'entities/TipoContrato.php';

class TipoContratoModel extends Model
{

    private $db;
    private $tipoContrato;

    function __construct()
    {
        $this->db = new Database();
        $this->tipoContrato = new TipoContrato();
    }

    public function ObtenerTodos()
    {
        $lista = [];
        try{
         $query = $this->db->connect()->query("SELECT * FROM tipo_contrato");
        
         while($row = $query->fetch()){
             $tipoContrato = new TipoContrato();
             $tipoContrato->setId($row['id']);
             $tipoContrato->setNombre($row['nombre']);
             $tipoContrato->setDescripcion($row['descripcion']);
             array_push($lista, $tipoContrato);
         }
         return $lista;
     }catch(PDOException $e){
         return [];
        }
        
    }
}
