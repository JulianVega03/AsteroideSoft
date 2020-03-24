<?php

class Autoloader
{

    public function __construct()
    {
        spl_autoload_register(function ($nombreClase) {
            require_once 'libs/' . $nombreClase . '.php';
        });
    }
}

new Autoloader();
