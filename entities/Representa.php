<?php

class Representa{

	private $representanteLegal;
	private $nit;
	private $periodoInicio;
	private $periodoFin;

	public function getRepresentanteLegal()
    {
        return $this->representanteLegal;
    }

    public function setRepresntanteLegal($representanteLegal)
    {
        $this->representanteLegal= $representanteLegal;
    }

	public function getNit()
    {
        return $this->nit;
    }

    public function setNit($nit)
    {
        $this->nit= $nit;
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