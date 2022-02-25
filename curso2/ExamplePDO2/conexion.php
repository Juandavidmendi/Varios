<?php

function Conectar(){

    $conn = null;   
    $host = '127.0.0.1';
    $user="root";
    $pwd="";
    $bd="biblioteca";
    try {
        $conn = new PDO ('mysql:host' .$host. ';dbname=' .$bd, $user , $pwd);

    }catch(PDOException $e){
        Echo "error al conectar".$e;
        exit;

    }


    return $conn;

}
?>  
