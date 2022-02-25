<?php

include_once 'database.php';

class Model extends DB{
    
    function getAll(){
        $alumnos = array();
        $alumnos['items'] = array();

        $query = $this->connect()->query('SELECT * FROM alumnos');

        while($row = $query->fetch()){
            array_push($alumnos['items'], array(
                'id' => $row['Id_Estudiante'],
                'nombre' => $row['Nombre'],
                'apellido' => $row['Apellido'],
                'curso' => $row['Curso'],
                'edad' => $row['edad'],
                'fecha' => $row['fecha_Nacimiento'],  
                'genero' => $row['Genero']
            ));
        }
        return $alumnos;
    }
}


?>