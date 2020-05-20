<?php
require_once 'entities/Persona.php';

class PersonaModel extends Model{

        private $db;
        private $person;

    function __construct()
    {
        $this->persona = new Persona();
        $this->db = new Database();
    }

    public function insertar($persona){
        
        $query = $this->db->connect()->prepare('INSERT INTO persona (documento, tipo_documento, nombre, apellido, correo, contrasena, direccion, telefono) 
                        VALUES(:docu, :tp_docu, :nombre, :apellido, :correo, :contra, :direc, :telf)');
        try{
            $query->execute([
                'docu' => $persona->getDocumento(),
                'tp_docu' => $persona->getTipo_documento(),
                'nombre' => $persona->getNombre(),
                'apellido' => $persona->getApellido(),
                'correo' => $persona->getCorreo(),
                'contra' => $persona->getContrasena(),
                'direc' => $persona->getDireccion(),
                'telf' => $persona->getTelefono()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function userExists($user, $pass){

        $query = $this->db->connect()->prepare('SELECT * FROM persona WHERE correo = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
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

    public function getNombre(){
        return $this->persona->getNombre();
    }


}