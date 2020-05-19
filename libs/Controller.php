<?php

class Controller
{

    public function model($model)
    {
        require_once 'models/' .  ucfirst($model) . 'Model.php';
        $model = ucfirst($model) . 'Model';
        return new $model();
    }

    public function view($view, $data = [])
    {
        session_start();

        if (isset($_SESSION['user'])) {

            if (file_exists('views/gerente/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/gerente/' . $view . '.php';
            } else {
                require_once 'views/gerente/home.php';
            }
        } else {
            if (file_exists('views/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }

                require_once 'views/' . $view . '.php';
            } else {
                require_once 'views/error.php';
            }
        }
    }
}
