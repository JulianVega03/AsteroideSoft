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
        try {
            $query = $this->db->connect()->query("SELECT * FROM tipo_contrato");

            while ($row = $query->fetch()) {
                $tipoContrato = new TipoContrato();
                $tipoContrato->setId($row['id']);
                $tipoContrato->setNombre($row['nombre']);
                $tipoContrato->setDescripcion($row['descripcion']);
                array_push($lista, $tipoContrato);
            }
            return $lista;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerPorId($id)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM tipo_contrato WHERE id = :id");
        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                $this->tipoContrato->setId($row['id']);
                $this->tipoContrato->setNombre($row['nombre']);
                $this->tipoContrato->setDescripcion($row['descripcion']);
            }
            return $this->tipoContrato;
        } catch (PDOException $e) {
            return null;
        }
    }
}
