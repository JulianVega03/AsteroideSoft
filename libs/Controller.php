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
        
       
            if (file_exists('views/' . $view . '.php')) {

                foreach ($data as $key => $value) {
                    $$key = $value;
                }
                
                require_once 'views/' . $view . '.php';
            } else {
                die('La vista no existe en general');
            }

        
    }
}
