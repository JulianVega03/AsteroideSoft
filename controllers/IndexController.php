<?php
require_once 'UserSession.php';

class IndexController extends Controller
{

    public $personaModel;

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

        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $userForm = $_POST['email'];
            $passForm = $_POST['pass'];

            if ($this->personaModel->userExists($userForm, $passForm)) {
                $userSession->setCurrentUser($userForm);
                $this->personaModel->setUser($userForm);

                header("Location:" . constant('URL') . "home");
                // echo "ingreso";
            } else {
                echo "fail";
                // $errorLogin = "Nombre de usuario y/o password es incorrecto";
            }
        }
    }

    
}
