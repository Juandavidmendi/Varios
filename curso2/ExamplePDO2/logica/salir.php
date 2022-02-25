
<?php
session_start();


$correoUsuario = $_POST['correoUsuario'];
$claveUsuario = $_POST['claveUsuario'];

session_destroy();
 header("location:../?controller=home&method=index.php");
 exit();

?>