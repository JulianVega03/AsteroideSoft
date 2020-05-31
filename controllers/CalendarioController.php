
<?php

class CalendarioController extends Controller{


     public function __construct(){

     }


     public function actionIndex(){
         $datos = [
             "titulo" => "Calendario del Proyecto"
         ];
         $this->view('calendario/mostrar',$datos);
     }


}





?>