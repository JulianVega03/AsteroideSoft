<?php
require_once 'models/PersonaModel.php';
require_once 'models/TipoContratoModel.php';

class ContratosController extends Controller
{

    private $contratoModel;
    private $datos;

    public function __construct()
    {
        $this->contratoModel = $this->model('Contrato');
        
        $this->datos = [
            "titulo" => "Mis Contratos",
            "listContratos" => $this->listar(),
            "listPersonas" => $this->obtenerPersonas(),
            "listTipoContrato" => $this->obtenerTipoContrato()
        ];
    }

    public function actionIndex()
    {
        $this->view('contratos/listar', $this->datos);
    }

    public function listar()
    {
        return $this->contratoModel->obtenerTodos();
    }

    public function obtenerTipoContrato()
    {
        $lista = [];
        $tipoContratoModel = new TipoContratoModel();
        $lista = $tipoContratoModel->obtenerTodos();
        return $lista;
    }

    public function obtenerPersonas()
    {
        $personaModel = new PersonaModel();
        return $personaModel->obtenerTodos();
    }

    public function actionNuevo()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (isset($_POST['codigo'], $_POST['tipo_contrato'], $_POST['valor'], $_POST['fecha_firma'],
            $_POST['persona'])) {

                $codigo =  $_POST['codigo'];
                $tipo = $_POST['tipo_contrato'];
                $persona = $_POST['persona'];
                $fechaFirma = $_POST['fecha_firma'];
                $valor = $_POST['valor'];
                $estado = "vigente";

                $contrato = new Contrato($codigo, $tipo, $persona, $fechaFirma, $valor, $estado);

                if ($this->contratoModel->insertar($contrato)) {
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    $this->view('contratos/listar', $this->datos);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('contratos/listar', $this->datos);
                }
            }
        } else {
            $datos = ["titulo" => "Formulario de Registro"];
            $this->view('contratos/', $datos);
        }
    }

    public function actionEliminar($param = null)
    {
        if ($param != null) {
            for ($i = 0; $i < count($param); $i++) {
                if ($this->contratoModel->eliminar($param[$i])) {
                    if ($i == count($param) - 1) {
                        $this->__construct();
                        $this->datos += ["estado" => "success"];
                        $this->view('contratos/listar', $this->datos);
                    }
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('contratos/listar', $this->datos);
                }
            }
        } else {
            $this->view('contratos/listar', $this->datos);
        }
    }

    public function actionEditar()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['codigo'], $_POST['tipo_contrato'], $_POST['valor'], $_POST['fecha_firma'],
            $_POST['persona'])) {

                $codigo =  $_POST['codigo'];
                $tipo = $_POST['tipo_contrato'];
                $persona = $_POST['persona'];
                $fechaFirma = $_POST['fecha_firma'];
                $valor = $_POST['valor'];
                $estado = "vigente";

                $contrato = new Contrato($codigo, $tipo, $persona, $fechaFirma, $valor, $estado);

                if ($this->contratoModel->actualizar($contrato)) {
                    $this->__construct();
                    $this->datos += ["estado" => "success"];
                    $this->view('contratos/listar', $this->datos);
                } else {
                    $this->__construct();
                    $this->datos += ["estado" => "error"];
                    $this->view('contratos/listar', $this->datos);
                }
            }
        } else {
            $this->__construct();
            $this->view('contratos/listar', $this->datos);
        }
    }

    public function actionPdf($param = null)
    {
       
        if ($param[0] != null) {

            require_once 'models/ContratoModel.php';
            $contratoModel = new ContratoModel();
            $contrato = $contratoModel->obtenerById($param[0]);

            require_once 'models/TipoContratoModel.php';
            $tipoContModel = new TipoContratoModel();
            $tipoContrato = $tipoContModel->obtenerPorId($contrato->getTipo());

            require_once 'models/PersonaModel.php';
            $pModel = new PersonaModel();
            $persona = $pModel->ObtenerPorId($contrato->getPersona());

            $datos = [
                "codigo_contrato" =>  $param[0],
                "tipo_contrato" => strtoupper($tipoContrato->getNombre()),
                "nombre_persona" => strtoupper($persona->getNombre()). " ". strtoupper($persona->getApellido()),
                "documento_persona" => $contrato->getPersona(),
                "fecha_firma" => $contrato->getFechaFirma(),
                "valor_contrato" => $contrato->getValor()
            ];
            $this->view('contratos/contrato-pdf',$datos);

        } 
    }

}
