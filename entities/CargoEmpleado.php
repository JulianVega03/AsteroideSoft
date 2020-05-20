<?php

/**
 * 
 */
class CargoEmpleado
{
    private $documento;
    private $cargo;
    private $periodoInicio;
    private $periodoFin;

    public function getDocumento()
    {

        return $this->documento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function getCargo()
    {

        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
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
