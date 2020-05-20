<?php
class ProyectosController extends Controller
{

    private $proyectoModel;

    public function __construct()
    {
        $this->proyectoModel = $this->model('Proyecto');
    }

    public function actionIndex()
    {
        $datos = ["listProyectos" => $this->proyectoModel->obtenerTodos()];
        $this->view('proyectos/listar',$datos);
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
                    echo "registrado";
                } else {
                    echo "Hubo un error";
                }
            }
            
        } else {
            $datos = ["titulo" => "Formulario de Registro"];
            $this->view('proyectos/nuevo', $datos);
        }
    }

    public function actionEditar()
    {
    }

    public function actionEliminar()
    {
    }

    public function actionActualizar()
    {
    }
}