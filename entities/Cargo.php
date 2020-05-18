
<?php

class Cargo
{
	
 private $id;
 private $nombre;
 private $descripcion;



 public function getNombre()
    {
        return $this->nombre;
    }

  public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getId()
    {
        return $this->id;
    }

  public function setId($id)
    {
        $this->id = $id;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

  public function setDescriocion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
}


