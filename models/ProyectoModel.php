<?php
require_once 'entities/Proyecto.php';

class ProyectoModel extends Model
{

    private $db;
    private $proyecto;

    function __construct()
    {
        $this->proyecto = new Proyecto();
        $this->db = new Database();
    }

    public function insertar($proyecto)
    {
        $query = $this->db->connect()->prepare('INSERT INTO proyecto (codigo, nombre, contrato, fecha_inicio, duracion, presupuesto) VALUES(:codigo, :nombre, :contrato, :periodoInicio, :duracion, :presupuesto)');
        try {
            $query->execute([
                'codigo' => $proyecto->getCodigo(),
                'nombre' => $proyecto->getNombre(),
                'contrato' => $proyecto->getContrato(),
                'periodoInicio' => $proyecto->getPeriodoInicio(),
                'duracion' => $proyecto->getDuracion(),
                'presupuesto' => $proyecto->getPresupuesto()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function actualizar($proyecto)
    {
        $query = $this->db->connect()->prepare("UPDATE proyecto SET contrato = :contrato, nombre = :nombre, presupuesto = :presupuesto, fecha_inicio = :fecha_inicio, duracion = :duracion WHERE codigo = :codigo");
        try {
            $query->execute([
                'codigo' => $proyecto->getCodigo(),
                'contrato' => $proyecto->getContrato(),
                'nombre' => $proyecto->getNombre(),
                'presupuesto' => $proyecto->getPresupuesto(),
                'fecha_inicio' => $proyecto->getPeriodoInicio(),
                'duracion' => $proyecto->getDuracion()
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

    public function eliminar($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM proyecto WHERE codigo = :id");
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

    public function obtenerTodos()
    {
        $proyectos = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM proyecto");

            while ($row = $query->fetch()) {
                $proyecto = new Proyecto();
                $proyecto->setCodigo($row['codigo']);
                $proyecto->setNombre($row['nombre']);
                $proyecto->setContrato($row['contrato']);
                $proyecto->setPeriodoInicio($row['fecha_inicio']);
                $proyecto->setDuracion($row['duracion']);
                $proyecto->setEstado($row['estado']);
                $proyecto->setPresupuesto($row['presupuesto']);
                array_push($proyectos, $proyecto);
            }
            return $proyectos;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerPorId($id)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM proyecto WHERE codigo = :codigo");
        try {
            $query->execute(['codigo' => $id]);

            while ($row = $query->fetch()) {
                $this->proyecto->setCodigo($row['codigo']);
                $this->proyecto->setNombre($row['nombre']);
                $this->proyecto->setContrato($row['contrato']);
                $this->proyecto->setPeriodoInicio($row['fecha_inicio']);
                $this->proyecto->setDuracion($row['duracion']);
                $this->proyecto->setEstado($row['estado']);
                $this->proyecto->setPresupuesto($row['presupuesto']);
            }
            if ($query->rowCount() > 0) {
                return $this->proyecto;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            return null;
        }
    }

    public function obtenerEmpleadosAsignados($idProyecto)
    {
        $empleados = [];
        require_once 'PersonaModel.php';

        try {
            $query = $this->db->connect()->query("SELECT * FROM asignacion WHERE proyecto = $idProyecto");

            while ($row = $query->fetch()) {
                $pModel = new PersonaModel();
                $persona = $pModel->obtenerPorId($row['empleado']);


                array_push($empleados, $persona);
            }

            return $empleados;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function obtenerEmpleadosDisponibles()
    {
        $disponibles = [];
        require_once 'PersonaModel.php';
        try {
            $query = $this->db->connect()->query("SELECT * FROM empleado");

            while ($row = $query->fetch()) {
                if (!$this->estaAsignado($row['documento'])) {
                    $pModel = new PersonaModel();
                    $persona = $pModel->obtenerPorId($row['documento']);
                    array_push($disponibles, $persona);
                }
            }
            return $disponibles;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function asignarEmpleado($id_proyecto, $documento_empleado, $esJefe)
    {
        $query = $this->db->connect()->prepare('INSERT INTO asignacion (empleado, proyecto, jefe) VALUES(:empleado, :proyecto, :jefe)');
        try {
            $query->execute([
                'empleado' => $documento_empleado,
                'proyecto' => $id_proyecto,
                'jefe' => $esJefe
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

    public function estaAsignado($documento)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM asignacion WHERE empleado = :documento");
        try {
            $query->execute(['documento' => $documento]);

            if ($query->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public function quitarIntegrante($documento)
    {
        $query = $this->db->connect()->prepare("DELETE FROM asignacion WHERE empleado = :documento");
        try {
            $query->execute(['documento' => $documento]);
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
