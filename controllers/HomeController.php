<?php
require_once 'UserSession.php';
require_once 'entities/Persona.php';
require_once 'models/PersonaModel.php';
require_once 'models/TipoDocumentoModel.php';

class HomeController extends Controller
{

    public function __construct()
    {
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Home"];
        $this->view('home', $datos);
    }

    public function actionContrato($param = null)
    {
        $datos = ["titulo" => "Contrato",
                    "dato" => $param];

        $this->view('contrato', $datos);
    }

    public function actionProyecto()
    {
        $datos = ["titulo" => "Proyectos"];
        $this->view('proyecto', $datos);
    }

    public function actionRegistrar()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['tipodepersona'], $_POST['nombre'], $_POST['apellido'], $_POST['tipo_identificacion'],
            $_POST['documento'], $_POST['email'], $_POST['telf'], $_POST['direccion'])) {

                $documento =  $_POST['documento'];
                $tipoDocumento = $_POST['tipo_identificacion'];
                $nombre = strtolower($_POST['nombre']);
                $apellido = strtolower($_POST['apellido']);
                $correo = strtolower($_POST['email']);
                $contrasena = "******";
                $direccion = strtolower($_POST['direccion']);
                $telefono = $_POST['telf'];

                $person = new Persona();
                $person->setDocumento($documento);
                $person->setTipo_documento($tipoDocumento);
                $person->setNombre($nombre);
                $person->setApellido($apellido);
                $person->setCorreo($correo);
                $person->setContrasena($contrasena);
                $person->setDireccion($direccion);
                $person->setTelefono($telefono);

                $pModel = new PersonaModel();
                if ($pModel->insertar($person)) {
                    echo "registrado";
                } else {
                    echo "Hubo un error";
                }
            }
        } else {
            $datos = [
                "titulo" => "Formulario de Registro",
                "listTipoDocumentos" => $this->obtenerTiposDocumentos(),
                "listTiposPersonas" => $this->obtenerTiposPersonas()
            ];
            $this->view('registrarPersona', $datos);
        }
    }

    public function obtenerTiposDocumentos()
    {
        $lista = [];
        $TipoDocumentModel = new TipoDocumentoModel();
        $lista = $TipoDocumentModel->getAll();
        return $lista;
    }

    public function obtenerTiposPersonas()
    {
        $lista = ["Empleado", "Representante"];

        return $lista;
    }

    function actionLogout()
    {
        $userSession = new UserSession();
        $userSession->startSession();
        $userSession->closeSession();
        header("location:" . constant('URL'));
    }
}
