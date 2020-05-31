<?php

class Empleado{

	private $documento;
	private $codigo;

	public function __construct($documento = null, $codigo = null)
	{
		$this->documento = $documento;
		$this->codigo = $codigo;
	}

	public function getDocumento(){

		return $this->documento;
	}

	public function setDocumento($documento){

		$this->documento=$documento;
	}

	public function getCodigo(){

		return $this->codigo;
	}

	public function setCodigo($codigo){

		$this->codigo=$codigo;
	}

}