<?php
    $servidor = "localhost";
    $nombre = "root";
    $password = "";
    $bdname   = "eventos";
    
    $conexion = new mysqli($servidor, $nombre, $password, $bdname);

    if($conexion-> connect_error){
        die("conexion fallida: " . $conexion-> connect_error); 
    }

    echo "Conexion exitosa..";
    

?>