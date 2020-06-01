<?php
require_once 'models/ContratoModel.php';
class ProyectosController extends Controller
{

    private $proyectoModel;

    private $datos;

    public function __construct()
    {
        $this->proyectoModel = $this->model('Proyecto');
        $this->datos = [
            "titulo" => "Mis Proyectos",
            "listProyectos" => $this->listar(),
            "listaContratos" => $this->obtenerTodosContratos(),
            "jefes_proyectos" => $this->obtenerJefesDeProyectos()
        ];
    }

    public function actionIndex()
    {
        $this->view('proyectos/listar', $this->datos);
    }

    public function listar()
    {
        return $this->proyectoModel->obtenerTodos();
    }

    public function obtenerTodosContratos()
    {
        $lista = [];
        $contratoModel = new ContratoModel();
        $lista = $contratoModel->obtenerTodos();
        return $lista;
    }

    public function actionEliminar($param = null)
    {
        if ($param != null) {
            for ($i = 0; $i < count($param); $i++) {
                if ($this->proyectoModel->eliminar($param[$i])) {
                    if ($i == count($param) - 1) {
                        $this->__construct();
                        $this->datos += ["estado" => "success"];
                        $this->view('proyectos/listar', $this->datos);
                    }
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('proyectos/listar', $this->datos);
                }
            }
        } else {
            $this->view('proyectos/listar', $this->datos);
        }
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['codigo'], $_POST['nombre'], $_POST['contrato'], $_POST['periodoInicio'],
            $_POST['duracion'], $_POST['presupuesto'])) {

                $codigo =  $_POST['codigo'];
                $nombre = $_POST['nombre'];
                $contrato = $_POST['contrato'];
                $periodoInicio = $_POST['periodoInicio'];
                $duracion = $_POST['duracion'];
                $presupuesto = $_POST['presupuesto'];

                $project = new Proyecto($codigo, $nombre, $contrato, $periodoInicio, $duracion, "en progreso", $presupuesto);


                if ($this->proyectoModel->insertar($project)) {
                    $this->asignarJefe($codigo, $_POST['lider']);
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    $this->view('proyectos/listar', $this->datos);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('proyectos/listar', $this->datos);
                }
            }
        } else {
            $datos = ["titulo" => "Formulario de Registro"];
            $this->view('proyectos/', $datos);
        }
    }

    public function actionEditar()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['codigo'], $_POST['nombre'], $_POST['contrato'], $_POST['periodoInicio'],
            $_POST['duracion'], $_POST['presupuesto'])) {

                $codigo =  $_POST['codigo'];
                $nombre = strtolower($_POST['nombre']);
                $contrato = $_POST['contrato'];
                $periodoInicio = $_POST['periodoInicio'];
                $duracion = $_POST['duracion'];
                $presupuesto = $_POST['presupuesto'];

                $project = new Proyecto($codigo, $nombre, $contrato, $periodoInicio, $duracion, "en progreso", $presupuesto);

                if ($this->proyectoModel->actualizar($project)) {
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    $this->view('proyectos/listar', $this->datos);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('proyectos/listar', $this->datos);
                }
            }
        } else {
            $this->__construct();
            $this->view('proyectos/listar', $this->datos);
        }
    }
    public function actionDesvincularIntegrante($param)
    {
        $this->proyectoModel->quitarIntegrante($param[0]);
        header('location: ' . URL . 'entregables/' . $param[1]);
    }

    public function asignarJefe($proyecto, $documento)
    {
        return $this->proyectoModel->asignarEmpleado($proyecto, $documento, true);
    }

    public function actionAsignarEmpleados($param = null)
    {
        if($param != null){
            $proyecto = $param[0];
            echo $proyecto . " / ";
            for ($i = 1; $i < count($param); $i++) {
                if($this->proyectoModel->asignarEmpleado($proyecto, $param[$i], false)){
                    header('location: ' . URL . 'entregables/' . $param[0]);
                }
            }
        }
        
    }

    public function obtenerJefesDeProyectos()
    {
        require_once 'models/CargoModel.php';
        $cModel = new CargoModel();
        $idCargoJefe =  $cModel->obtenerByNombre("Jefe de Proyectos");
        require_once 'models/CargoEmpleadoModel.php';
        $cEmpModel = new CargoEmpleadoModel();
        return $cEmpModel->obtenerPorRol($idCargoJefe['id']);
    }
}
