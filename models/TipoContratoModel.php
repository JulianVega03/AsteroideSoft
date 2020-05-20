<?php
require_once 'entities/TipoContrato.php';

class TipoContratoModel extends Model
{

    private $db;

    function __construct()
    {
        $this->db = new Database();
    }

    public function ObtenerTodos()
    {
        
    }
}
