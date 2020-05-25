<?php
require_once 'UserSession.php';

class IndexController extends Controller
{

    private $personaModel;

    public function __construct()
    {
        $this->personaModel = $this->model('Persona');
    }

    public function actionIndex()
    {
        $datos = ["titulo" => "Bienvenidos",];
        $this->view('index', $datos);
    }

    public function actionLogin()
    {
        $userSession = new UserSession();
        $userSession->startSession();

        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $userForm = $_POST['email'];
            $passForm = $_POST['pass'];

            if ($this->personaModel->userExists($userForm, $passForm)) {
                $userSession->setCurrentUser($userForm);
                $this->personaModel->setUser($userForm);

                header("Location:" . constant('URL') . "proyectos");
            } else {
                $loginResponse = "Nombre de usuario y/o password es incorrecto";
                include_once 'views/index.php';
            }
        }
    }

    function actionLogout()
    {
        $userSession = new UserSession();
        $userSession->startSession();
        $userSession->closeSession();
        header("location:" . constant('URL'));
    }
}
