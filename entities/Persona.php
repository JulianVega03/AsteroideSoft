<?php

class Persona
{

    private $documento;
    private $tipo_documento;
    private $nombre;
    private $apellido;
    private $correo;
    private $contrasena;
    private $direccion;
    private $telefono;


    public function __construct(
        $documento = null,
        $tipo_documento = null,
        $nombre = null,
        $apellido = null,
        $correo = null,
        $direccion = null,
        $telefono = null
    ) {
        $this->documento = $documento;
        $this->tipo_documento = $tipo_documento;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function getDocumento()
    {
        return $this->documento;
    }

    public function setDocumento($documento)
    {
        $this->documento = $documento;
    }

    public function getTipo_documento()
    {
        return $this->tipo_documento;
    }

    public function setTipo_documento($tipo_documento)
    {
        $this->tipo_documento = $tipo_documento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
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
