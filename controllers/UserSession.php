<?php

class UserSession extends Controller{

    public function __construct(){
        
    }

    public function startSession(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function setRolUser($rol){
        $_SESSION['rol'] = $rol;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

}

?>