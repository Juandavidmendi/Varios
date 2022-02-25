<?php
    $servidor       = "localhost";
    $nombreusuario  = "root";
    $password       = "1102356Tyt";
    $db             = "todolistDB";
    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexion fallida" . $conexion->connect_error);
    }
    /*Crear DATABASE desde PHP
    $sql = "CREATE DATABASE todolistDB";
    if($conexion->query($sql) === true){
        echo "Base de datos creada correctamente..";
    }else{
        die("Error al crear base de datos: " . $conexion->error);
    }*/

    /*CREAR UNA TABLA DESDE PHP
    $sql = "CREATE TABLE todoTable(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        texto VARCHAR(100) NOT NULL,
        completado BOOLEAN NOT NULL,
        timestamp TIMESTAMP
    )";

    if($conexion->query($sql) === true){
        echo "la tabla se creo correctamente..";
    }else{
        die("Error al crear la tabla: " . $conexion->error);
    }*/
?>