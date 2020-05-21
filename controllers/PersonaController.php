<?php

class PersonaController extends Controller
{

  

    public function __construct()
    {
       
    }

    public function actionIndex()
    {
        
        $this->view('persona/registrar');
    }


    
}
