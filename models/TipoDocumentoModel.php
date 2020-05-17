<?php
require_once 'entities/TipoDocumento.php';

class TipoDocumentoModel extends Model
{

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM tipo_documento");

            while ($row = $query->fetch()) {
                $item = new TipoDocumento();
                $item->setId($row['id']);
                $item->setNombre($row['nombre']);
                $item->setDescripcion($row['descripcion']);
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    }
}
