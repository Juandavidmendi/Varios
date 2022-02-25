<?php
require "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONECTAR UNA BD MYSQL CON PHP DE FORMA SENCILLA</title>
    <style>
    table{
        width:400px;
    }    
    h1{
        width:400px;
        text-align:center
    }
    .centrar{
        margin: 0 auto;
        background:orange;
    }
    </style>
</head>
<body>
<h1 class="centrar">LISTA DE USUARIOS</h1>
    <?php 
    $query = "SELECT * FROM nombre";
	$result = mysqli_query($db,$query);
	if($result){
        echo "<table border=1 class='centrar'>";
        echo "<tr> <td> ID </td> <td> NOMBRE </td> </tr>";
		while($row = mysqli_fetch_array($result)){

            $id     = $row["id"];
            $name   = $row["nombre"];
            
			echo "<tr> <td> ".$id."</td> <td> ".$name."</td> </tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>