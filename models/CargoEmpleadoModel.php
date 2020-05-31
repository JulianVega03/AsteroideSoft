<?php
require_once 'entities/CargoEmpleado.php';

class CargoEmpleadoModel extends Model
{

    private $db;
    private $cargoEmpleado;

    function __construct()
    {
        $this->cargoEmpleado = new CargoEmpleado();
        $this->db = new Database();
    }


    public function insertar($cargoEmpleado)
    {
        $query = $this->db->connect()->prepare('INSERT INTO cargo_empleado (documento, cargo, periodo_inicio, periodo_fin) 
        VALUES(:docu, :cargo, :p_inicio, :p_fin)');
        try {
            $query->execute([
                'docu' =>  $cargoEmpleado->getDocumento(),
                'cargo' =>  $cargoEmpleado->getCargo(),
                'p_inicio' =>  $cargoEmpleado->getPeriodoInicio(),
                'p_fin' => $cargoEmpleado->getPeriodoFin()
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

    public function obtenerCargoPorId($id)
    {
        $query = $this->db->connect()->prepare("SELECT cargo FROM cargo_empleado WHERE documento = :documento");
        try {
            $query->execute(['documento' => $id]);

            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }

    public function obtenerTodos()
    {
    }
}
