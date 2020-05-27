<?php

/**
 * 
 */
class Entregable
{
    private $id;
    private $nombre;
    private $descripcion;
    private $costo;
    private $proyecto;

    public function __construct($id = null, $nombre = null, $descripcion = null, $costo = null, $proyecto = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->costo = $costo;
        $this->proyecto = $proyecto;
    }

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

    public function getCosto()
    {
        return $this->costo;
    }

    public function setCosto($costo)
    {
        $this->costo = $costo;
    }

    public function getProyecto()
    {
        return $this->proyecto;
    }

    public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;
    }
}
