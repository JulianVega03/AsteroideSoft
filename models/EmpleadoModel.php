<?php
require_once 'entities/Empleado.php';

class EmpleadoModel extends Model
{

    private $db;
    private $empleado;

    function __construct()
    {
        $this->empleado = new Empleado();
        $this->db = new Database();
    }


    public function insertar($empleado)
    {
        $query = $this->db->connect()->prepare('INSERT INTO empleado (documento, codigo) VALUES(:documento, :codigo)');
        try {
            $query->execute([
                'documento' => $empleado->getDocumento(),
                'codigo' => $empleado->getCodigo()
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

    public function obtenerById($documento)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM empleado WHERE documento = :documento");
        try {
            $query->execute(['documento' => $documento]);

            while ($row = $query->fetch()) {
                $this->empleado->setCodigo($row['codigo']);
                $this->empleado->setDocumento($row['documento']);
            }
            return $this->empleado;
        } catch (PDOException $e) {
            return null;
        }
    }

}
