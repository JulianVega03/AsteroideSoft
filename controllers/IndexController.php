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
        $this->view('index');
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

                header("Location:" . constant('URL') . "home");
            } else {
                $loginResponse = "Nombre de usuario y/o password es incorrecto";
                include_once 'views/index.php';
            }
        }
    }
}
