<?php

class Etapa
{

    private $nombre;
    private $descripcion;
    private $id;
    private $entregable;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getEntregable()
    {
        return $this->entregable;
    }

    public function setEntregable($entregable)
    {
        $this->entregable = $entregable;
    }
}
