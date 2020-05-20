<?php
require_once 'entities/Proyecto.php';

class ProyectoModel extends Model{

        private $db;

    function __construct()
    {
        $this->proyecto = new Proyecto();
        $this->db = new Database();
    }

    public function insertar($proyecto){
        $query = $this->db->connect()->prepare('INSERT INTO proyecto (codigo, nombre, contrato, fecha_inicio, duracion, presupuesto) VALUES(:codigo, :nombre, :contrato, :periodoInicio, :duracion, :presupuesto)');
        try{
            $query->execute([
                'codigo' => $proyecto->getCodigo(),
                'nombre' => $proyecto->getNombre(),
                'contrato' => $proyecto->getContrato(),
                'periodoInicio' => $proyecto->getPeriodoInicio(),
                'duracion' => $proyecto->getDuracion(),
                'presupuesto' => $proyecto->getPresupuesto()
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function obtenerTodos(){
        $proyectos = [];
        try{
         $query = $this->db->connect()->query("SELECT * FROM proyecto");
        
         while($row = $query->fetch()){
             $proyecto = new Proyecto();
             $proyecto->setCodigo($row['codigo']);
             $proyecto->setNombre($row['nombre']);
             $proyecto->setContrato($row['contrato']);
             $proyecto->setPeriodoInicio($row['periodoInicio']);
             $proyecto->setDuracion($row['duracion']);
             $proyecto->setPresupuesto($row['presupuesto']);
             array_push($proyectos, $proyecto);
         }
         return $proyectos;
     }catch(PDOException $e){
         return [];
        }
    }

}