<?php

class Asignacion{

	private $empleado;
	private $proyecto;
	private $jefe;
	private $periodoInicio;
	private $periodoFin;

	public function getEmpleado()
    {
        return $this->empleado;
    }

  public function setEmpleado($empleado)
    {
        $this->empleado = $empleado;
    }

    public function getProyecto()
    {
        return $this->proyecto;
    }

  public function setProyecto($proyecto)
    {
        $this->proyecto = $proyecto;
    }

 public function getJefe()
    {
        return $this->jefe;
    }

  public function setJefe($jefe)
    {
        $this->jefe= $jefe;
    }

     public function getPeriodoInicio()
    {
        return $this->periodoInicio;
    }

  public function setPeriodoInicio($periodoInicio)
    {
        $this->periodoInicio = $periodoInicio;
    }

    public function getPeriodoFin()
    {
        return $this->periodoFin;
    }

  public function setPeriodoFin($periodoFin)
    {
        $this->periodoFin = $periodoFin;
    }

}