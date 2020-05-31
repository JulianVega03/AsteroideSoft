<?php

class PersonaController extends Controller
{

    private $datos;
    private $personaModel;

    public function __construct()
    {
        $this->personaModel = $this->model("Persona");
        $this->datos = [
            "titulo" => "Registro de Personal",
            "personas" => $this->obtenerTodas(),
            "tiposDocumentos" => $this->obtenerTiposDocumentos(),
            "cargos" => $this->obtenerCargos()
        ];
    }

    public function actionIndex()
    {
        $this->view('persona/registrar', $this->datos);
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['tipo_documento'], $_POST['documento'], $_POST['nombre'],
            $_POST['apellido'], $_POST['email'], $_POST['direccion'], $_POST['telefono'])) {

                $documento =  $_POST['documento'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $tipo_documento = $_POST['tipo_documento'];

                $persona = new Persona($documento, $tipo_documento, $nombre, $apellido, $email, $direccion, $telefono);
               
                
                if ($this->personaModel->insertar($persona)) {
                    if ($_POST['empleado'] == "si") {
                        if (isset($_POST['codigoEmpleado'], $_POST['cargo'])) {
                            $this->registrarEmpleado($documento, $_POST['codigoEmpleado']);
                            $this->asignarCargo($documento, $_POST['cargo']);
                        }
                    }
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    $this->view('persona/registrar', $this->datos);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('persona/registrar', $this->datos);
                }
            }
        } else {
            $datos = ["titulo" => "Formulario de Registro"];
            $this->view('persona/', $datos);
        }
    }

    private function registrarEmpleado($documento, $codigo)
    {
        require_once 'models/EmpleadoModel.php';
        $eModel = new EmpleadoModel();
        $empleado = new Empleado($documento, $codigo);
        return $eModel->insertar($empleado);
    }

    private function asignarCargo($documento, $cargo)
    {
        require_once 'models/CargoEmpleadoModel.php';
        $cargoModel = new CargoEmpleadoModel();
        $cargoE = new CargoEmpleado($documento, $cargo);
        $cargoModel->insertar($cargoE);
    }

    public function obtenerTodas()
    {
        $lista = [];
        $lista = $this->personaModel->obtenerTodos();
        return $lista;
    }

    private function obtenerTiposDocumentos()
    {
        require_once 'models/TipoDocumentoModel.php';
        $tipos = new TipoDocumentoModel();

        return $tipos->getAll();
    }

    private function obtenerCargos()
    {
        require_once 'models/CargoModel.php';
        $cargoModel = new CargoModel();
        return $cargoModel->obtenerTodos();
    }
}
