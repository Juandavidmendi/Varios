<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO MEDICOS (MEDIDENTIFICACION, MEDNOMBRE, MEDAPELLIDO) VALUES(:MedIdentificacion, :MedNombre, :Medapellido)');
            $query->execute(['MedIdentificacion' => $datos['MedIdentificacion'], 'MedNombre' => $datos['MedNombre'], 'MedApellido' => $datos['MedApellido']]);
            return true;
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo "Ya existe esa matrícula";
            return false;
        }
        
    }
}

?>