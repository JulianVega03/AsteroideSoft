<?php

class Proyecto{

	private $codigo;
	private $nombre;
	private $contrato;
	private $periodoInicio;
	private $duraccion;
  private $presupuesto;
 

	public function getCodigo(){

		return $this->codigo;
	}

	public function setCodigo($codigo){

		$this->codigo=$codigo;
	}

	 public function getNombre()
    {
        return $this->nombre;
    }

  public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

     public function getContrato()
    {
        return $this->contrato;
    }

  public function setContrato($contrato)
    {
        $this->contrato = $contrato;
    }

      public function getPeriodoInicio()
    {
        return $this->periodoInicio;
    }

  public function setPeriodoInicio($periodoInicio)
    {
        $this->periodoInicio = $periodoInicio;
    }

     public function getDuraccion()
    {
        return $this->duraccion;
    }

  public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

     public function getPresupuesto()
    {
        return $this->presupuesto;
    }

  public function setPresupuesto($presupuesto)
    {
        $this->presupuesto= $presupuesto;
    }
}