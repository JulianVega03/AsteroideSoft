<?php
require_once 'models/ProyectoModel.php';
class EntregablesController extends Controller
{

    private $entregableModel;
    private $proyectoId;
    private $datos;

    public function __construct()
    {
        $this->entregableModel = $this->model("Entregable");
        $this->datos = [
            "titulo" => "Entregables"
        ];
    }

    public function actionIndex($idProyecto)
    {
        if ($idProyecto != null) {
            $proyectoModel = new ProyectoModel();
            if ($proyectoModel->obtenerPorId($idProyecto[0])) {
                $this->proyectoId = $idProyecto[0];
                $this->datos += [
                    "entregables" => $this->obtenerEntregables($idProyecto[0]),
                    "integrantes" => $this->obtenerIntegrantesProyecto($idProyecto[0])
                ];
                $this->view('entregables/listar', $this->datos);
            } else {
                header('location: ' . URL . 'proyectos');
            }
        } else {
            header('location: ' . URL . 'proyectos');
        }
    }

    public function obtenerEntregables($idProyecto)
    {
        return $this->entregableModel->obtenerEntregablesProyecto($idProyecto);
    }

    public function actionEditar()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['costo'], $_POST['proyecto'], $_POST['id'])) {

                $nombre = strtolower($_POST['nombre']);
                $descripcion = strtolower($_POST['descripcion']);
                $costo = strtolower($_POST['costo']);
                $proyecto = $_POST['proyecto'];
                $id = $_POST['id'];

                $entregable = new Entregable($id, $nombre, $descripcion, $costo, $proyecto);

                if ($this->entregableModel->actualizar($entregable)) {
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    header('location: ' . URL . 'entregables/' . $proyecto);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    header('location: ' . URL . 'entregables/' . $proyecto);
                }
            }
        } else {
            header('location: ' . URL . 'entregables/' . $this->proyectoId);
        }
    }


    public function actionEliminar($param = null)
    {
        if ($param != null) {
            for ($i = 0; $i < count($param); $i++) {
                $entregable = $this->entregableModel->obtenerById($param[$i]);
                if ($this->entregableModel->eliminar($param[$i])) {
                    if ($i == count($param) - 1) {
                        header('location: ' . URL . 'entregables/' . $entregable->getProyecto());
                    }
                } else {
                    $this->__construct();
                    header('location: ' . URL . 'entregables/' .  $entregable->getProyecto());
                }
            }
        } else {
            header('location: ' . URL . 'entregables/' . $this->proyectoId);
        }
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['costo'], $_POST['proyecto'])) {

                $nombre = strtolower($_POST['nombre']);
                $descripcion = strtolower($_POST['descripcion']);
                $costo = strtolower($_POST['costo']);
                $proyecto = $_POST['proyecto'];
                $id = null;

                $entregable = new Entregable($id, $nombre, $descripcion, $costo, $proyecto);

                if ($this->entregableModel->insertar($entregable)) {
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    header('location: ' . URL . 'entregables/' . $proyecto);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('entregables', $this->datos);
                }
            }
        } else {
            header('location: ' . URL . 'entregables/');
        }
    }

    private function obtenerIntegrantesProyecto($idProyecto)
    {
        require_once 'models/ProyectoModel.php';
        $pModel = new ProyectoModel();
        return $pModel->obtenerEmpleadosAsignados($idProyecto);
    }

    private function obtenerEmpleadosDisponibles($idProyecto)
    {
        require_once 'models/ProyectoModel.php';
        $pModel = new ProyectoModel();
        return $pModel->obtenerEmpleadosNoAsignados($idProyecto);
    }
}
