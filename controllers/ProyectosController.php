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
            "listaContratos" => $this->obtenerTodosContratos()
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
                $nombre = strtolower($_POST['nombre']);
                $contrato = strtolower($_POST['contrato']);
                $periodoInicio = strtolower($_POST['periodoInicio']);
                $duracion = strtolower($_POST['duracion']);
                $presupuesto = $_POST['presupuesto'];

                $project = new Proyecto($codigo, $nombre, $contrato, $periodoInicio, $duracion, "en progreso", $presupuesto);


                if ($this->proyectoModel->insertar($project)) {
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
}
