<?php
require_once 'models/ContratoModel.php';
class ProyectosController extends Controller
{

    private $proyectoModel;

    public function __construct()
    {
        $this->proyectoModel = $this->model('Proyecto');
    }

    public function actionIndex()
    {
        $datos = [
            "titulo" => "Mis Proyectos",
            "listProyectos" => $this->listar(),
            "listaContratos" => $this->obtenerTodosContratos()
        ];
        $this->view('proyectos/listar', $datos);
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
                    header('location:' . URL . 'proyectos?e=success');
                }
            }
        } else {
            header('location:' . URL . 'proyectos');
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

                $project = new Proyecto($codigo, $nombre, $contrato, $periodoInicio, $duracion, $presupuesto);


                if ($this->proyectoModel->insertar($project)) {
                    header('location:' . URL . 'proyectos?e=success');
                } else {
                    header('location:' . URL . 'proyectos?e=error');
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

                $project = new Proyecto($codigo, $nombre, $contrato, $periodoInicio, $duracion, $presupuesto);

                if ($this->proyectoModel->actualizar($project)) {
                    header('location:' . URL . 'proyectos?e=success');
                } else {
                    header('location:' . URL . 'proyectos?e=error');
                }
            }
        }
    }
}
