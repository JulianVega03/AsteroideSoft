<?php
require_once 'entities/Persona.php';

class PersonaModel extends Model
{

    private $db;
    private $persona;

    function __construct()
    {
        $this->persona = new Persona();
        $this->db = new Database();
    }

    public function insertar($persona)
    {

        $query = $this->db->connect()->prepare('INSERT INTO persona (documento, tipo_documento, nombre, apellido, correo) 
                        VALUES(:docu, :tp_docu, :nombre, :apellido, :correo)');
        try {
            $query->execute([
                'docu' =>  $persona->getDocumento(),
                'tp_docu' =>  $persona->getTipo_Documento(),
                'nombre' =>  $persona->getNombre(),
                'apellido' => $persona->getApellido(),
                'correo' => $persona->getCorreo()
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function ObtenerPorId($id)
    {
        $query = $this->db->connect()->prepare("SELECT * FROM persona WHERE documento = :documento");
        try {
            $query->execute(['documento' => $id]);

            while ($row = $query->fetch()) {
                $this->persona->setDocumento($row['documento']);
                $this->persona->setTipo_Documento($row['tipo_documento']);
                $this->persona->setNombre($row['nombre']);
                $this->persona->setApellido($row['apellido']);
                $this->persona->setCorreo($row['correo']);
                $this->persona->setContrasena($row['contrasena']);
                $this->persona->setDireccion($row['direccion']);
                $this->persona->setTelefono($row['telefono']);
            }
            return $this->persona;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function obtenerTodos()
    {
        $personas = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM persona");

            while ($row = $query->fetch()) {
                $persona = new Persona();
                $persona->setDocumento($row['documento']);
                $persona->setTipo_Documento($row['tipo_documento']);
                $persona->setNombre($row['nombre']);
                $persona->setApellido($row['apellido']);
                $persona->setCorreo($row['correo']);
                $persona->setContrasena($row['contrasena']);
                $persona->setDireccion($row['direccion']);
                $persona->setTelefono($row['telefono']);
                array_push($personas, $persona);
            }
            return $personas;
        } catch (PDOException $e) {
            return [];
        }
    }

    public function userExists($user, $pass)
    {

        $query = $this->db->connect()->prepare('SELECT * FROM persona WHERE correo = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if ($query->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function setUser($user)
    {
        $query = $this->db->connect()->prepare('SELECT * FROM persona WHERE correo = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->persona->setDocumento($currentUser['documento']);
            $this->persona->setTipo_Documento($currentUser['tipo_documento']);
            $this->persona->setNombre($currentUser['nombre']);
            $this->persona->setApellido($currentUser['apellido']);
            $this->persona->setCorreo($currentUser['correo']);
            $this->persona->setContrasena($currentUser['contrasena']);
            $this->persona->setDireccion($currentUser['direccion']);
            $this->persona->setTelefono($currentUser['telefono']);
        }
    }

    public function getNombre()
    {
        return $this->persona->getNombre();
    }
}
