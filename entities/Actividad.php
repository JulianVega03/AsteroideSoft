<?php
class  Actividad{


 private $id;
 private $nombre;
 private $duracion;
 private $etapa;


 public function getId()
    {
        return $this->id;
    }

  public function setId($id)
    {
        $this->id = $id;
    }

   public function getNombre()
    {
        return $this->nombre;
    }

  public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

  public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function getEtapa()
    {
        return $this->etapa;
    }

  public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
    }
}