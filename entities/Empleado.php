<?php

class Empleado{

	private $documento;
	private $codigo;


	public function getDocumeto(){

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