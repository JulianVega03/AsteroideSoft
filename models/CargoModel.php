<?php
require_once 'entities/Cargo.php';

class CargoModel extends Model{

        private $db;
        private $cargo;

    function __construct()
    {
        $this->cargo = new Cargo();
        $this->db = new Database();
    }


    public function insertar($cargo){
       
    }

    public function obtenerById($id_cargo){
        $query = $this->db->connect()->prepare("SELECT nombre FROM cargo WHERE id = :id");
        try {
            $query->execute(['id' => $id_cargo]);

            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }
    public function obtenerByNombre($nombre_cargo){
        $query = $this->db->connect()->prepare("SELECT id FROM cargo WHERE nombre = :nombre_cargo");
        try {
            $query->execute(['nombre_cargo' => $nombre_cargo]);

            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }

    public function obtenerTodos()
    {
        $lista = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM cargo");

            while ($row = $query->fetch()) {
                $cargo = new Cargo();
                $cargo->setId($row['id']);
                $cargo->setNombre($row['nombre']);
                $cargo->setDescripcion($row['descripcion']);
                array_push($lista, $cargo);
            }
            return $lista;
        } catch (PDOException $e) {
            return [];
        }
    }

}