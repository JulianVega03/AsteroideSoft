<?php

/**
 * 
 */
class Contrato
{
	private $codigo;
	private $tipo;
	private $persona;
	private $fechaFirma;
	private $valor;
	private $estado;


	public function getCodigo(){

		return $this->codigo;
	}

	public function setCodigo($codigo){
		$this->codigo=$codigo;
	}
	

	public function getTipo(){

		return $this->tipo;
	}

	public function setTipo($tipo){

		$this->tipo=$tipo;
	}

	public function getPersona(){

		return $this->persona;
	}

	public function setPersona($persona){

		$this->persona=$persona;
	}

	public function getFechaFirma(){

		return $this->fechaFirma;
	}

	public function setFechaFirma($fechaFirma){

		$this->fechaFirma=$fechaFirma;
	}

	public function getValor(){

		return $this->valor;
	}

	public function setValor($valor){

		$this->valor=$valor;
	}

	public function getEstado(){

		return $this->estado;
	}

	public function setEstado($estado){

		$this->estado=$estado;
	}
}