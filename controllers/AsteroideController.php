
<?php

class AsteroideController extends Controller{


     public function __construct(){

     }


     public function actionIndex(){
         $datos = [
             "titulo" => "Información del Desarrollador"
         ];
         $this->view('asteroide/index',$datos);
     }


}





?>