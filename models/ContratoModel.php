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
        $query = $this->db->connect()->prepare('INSERT INTO contrato (codigo, tipo, persona, fecha_firma, valor, estado) VALUES(:codigo, :tipo, :persona, :fecha_firma, :valor, :estado)');
        try {
            $query->execute([
                'codigo' => $contrato->getCodigo(),
                'tipo' => $contrato->getTipo(),
                'persona' => $contrato->getPersona(),
                'fecha_firma' => $contrato->getFechaFirma(),
                'valor' => $contrato->getValor(),
                'estado' => $contrato->getEstado()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtenerById($codigo){
        $query = $this->db->connect()->prepare("SELECT * FROM contrato WHERE codigo = :codigo");
        try {
            $query->execute(['codigo' => $codigo]);

            while ($row = $query->fetch()) {
                $this->contrato->setCodigo($row['codigo']);
                $this->contrato->setTipo($row['tipo']);
                $this->contrato->setPersona($row['persona']);
                $this->contrato->setFechaFirma($row['fecha_firma']);
                $this->contrato->setValor($row['valor']);
                $this->contrato->setEstado($row['estado']);
            }
            if ($query->rowCount() > 0) {
                return $this->contrato;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            return null;
        }
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

    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM contrato WHERE codigo = :id");
        try {
            $query->execute(['id' => $id]);
            if ($query->rowCount()>0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar($contrato)
    {
        $query = $this->db->connect()->prepare("UPDATE contrato SET tipo = :tipo, persona = :persona, fecha_firma = :fecha_firma, valor = :valor, estado = :estado WHERE codigo = :codigo");
        try {
            $query->execute([
                'codigo' => $contrato->getCodigo(),
                'tipo' => $contrato->getTipo(),
                'persona' => $contrato->getPersona(),
                'fecha_firma' => $contrato->getFechaFirma(),
                'valor' => $contrato->getValor(),
                'estado' => $contrato->getEstado()
            ]);
            if ($query->rowCount()>0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

}