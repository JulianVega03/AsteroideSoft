<?php

/**
 * 
 */
class PersonaJuridica
{
	private $nit;
	private $razonSocial;
	private $direccion;
	private $telefono;
	

	public function getNit()
    {
        return $this->nit;
    }

    public function setNit($nit)
    {
        $this->nit= $nit;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}