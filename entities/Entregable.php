<?php

/**
 * 
 */
class Entregable
{
	private $nombre;
	private $descripcion;
	private $id;
	private $duraccion;
	private $costo;
	private $proyecto;

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

    public function getDuraccion()
    {
        return $this->duraccion;
    }

  public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
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