<?php
class EntregableController extends Controller
{

    private $entregableModel;

    public function __construct()
    {
        $this->entregableModel = $this->model('Entregable');
    }

    public function actionIndex()
    {
        $this->view('entregables/listar');
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['nombre'], $_POST['descripcion'], $_POST['costo'])) {

                $nombre = strtolower($_POST['nombre']);
                $descripcion = strtolower($_POST['descripcion']);
                $costo = strtolower($_POST['costo']);

                // $entregable = new Entregable($nombre, $descripcion, $costo ,$royecto);

                if ($this->entregableModel->insertar(/*$entregable*/)){
                    header('location:' . URL . 'entregables');
                } else {
                    echo "Hubo un error";
                }
            }
        } else {
            $datos = ["titulo" => "Formulario de Registro"];
            $this->view('proyectos/nuevo', $datos);
        }
    }
}