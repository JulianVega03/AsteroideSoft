<?php
class RepresentanteLegal{

	private $documento;
	private $fechaExpedicion;


 	public function getDocumento(){

 		return $this->documento;
 	}

 	public function setDocumento($documento)
    {
        $this->documento= $documento;
    }


 	public function getFechaExpedicion(){

 		return $this->fechaExpedicion;
 	}

 	public function setFechaExpedicion($fechaExpedicion)
    {
        $this->fechaExpedicion= $fechaExpedicion;
    }
}