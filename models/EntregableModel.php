<?php
require_once 'entities/Entregable.php';

class EntregableModel extends Model
{

    private $db;
    private $entregable;

    function __construct()
    {
        $this->entregable = new Entregable();
        $this->db = new Database();
    }


    public function insertar($entregable)
    {
        $query = $this->db->connect()->prepare('INSERT INTO entregable (nombre, descripcion, costo, proyecto) VALUES(:nombre, :descripcion, :costo, :proyecto)');
        try {
            $query->execute([
                'nombre' => $entregable->getNombre(),
                'descripcion' => $entregable->getDescripcion(),
                'costo' => $entregable->getCosto(),
                'proyecto' => $entregable->getProyecto()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function obtenerById($id)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM entregable WHERE id = :id");
        try {
            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {
                $this->entregable->setId($row['id']);
                $this->entregable->setNombre($row['nombre']);
                $this->entregable->setDescripcion($row['descripcion']);
                $this->entregable->setCosto($row['costo']);
                $this->entregable->setProyecto($row['proyecto']);
            }
            if ($query->rowCount() > 0) {
                return $this->entregable;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            return null;
        }
    }

    public function obtenerEntregablesProyecto($idProyecto)
    {
        $entregables = [];

        try {
            $query = $this->db->connect()->query("SELECT * FROM entregable WHERE proyecto = $idProyecto");


            while ($row = $query->fetch()) {
                $entregable = new Entregable();
                $entregable->setId($row['id']);
                $entregable->setNombre($row['nombre']);
                $entregable->setDescripcion($row['descripcion']);
                $entregable->setCosto($row['costo']);
                $entregable->setProyecto($row['proyecto']);
                array_push($entregables, $entregable);
            }
            return $entregables;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM entregable WHERE id = :id");
        try {
            $query->execute(['id' => $id]);
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar($entregable)
    {
        $query = $this->db->connect()->prepare("UPDATE entregable SET nombre = :nombre, descripcion = :descripcion, costo = :costo, proyecto = :proyecto WHERE id = :id");
        try {
            $query->execute([
                'nombre' => $entregable->getNombre(),
                'descripcion' => $entregable->getDescripcion(),
                'costo' => $entregable->getCosto(),
                'id' => $entregable->getId(),
                'proyecto' => $entregable->getProyecto()
            ]);
            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }
}
