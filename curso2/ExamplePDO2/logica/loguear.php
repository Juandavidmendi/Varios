<?php

require 'conexion.php';
session_start();


$correoUsuario = $_POST['correoUsuario'];
$claveUsuario = $_POST['claveUsuario'];

$q= "SELECT COUNT(*) as contar from  usuario  where correoUsuario = '$correoUsuario' and claveUsuario ='$claveUsuario' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar']>0){
$_SESSION['username']= $correoUsuario;
    header('location:  ..?controller=Home&method=layout');

}else{ 
    echo '<script> alert("Nombre o contraseña incorrecta"); window.location = "../inicios.php" </script>';
}

?>