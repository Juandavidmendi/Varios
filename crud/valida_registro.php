<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style_prin.css">
	<title>Document</title>
</head>
<body>
	<?php
	$conn = new mysqli("localhost", "root", "", "concesionario");
	if($conn->connect_error){
    
    	die ("No se puede conectar al servidor: " . $conn->connect_error);
    
	}

	$query = "INSERT INTO empleados(nombres, apellidos, user, password,fechanacimiento, correo) VALUES('$_REQUEST[nom]','$_REQUEST[ape]','$_REQUEST[user]','$_REQUEST[pass]','$_REQUEST[fena]','$_REQUEST[email]')";

	$result = $conn -> query($query);

	if(!$result) die("Error al acceder a la base de datos");
		?>	
			<p class="satis">
		
			<img src="../img/Check.png" alt="Acceso Concedido" width="50%">
			<legend id="leg1">Usuario Agregado Correctamente <br> <span><?php echo $user. " " .$nombre . " " .$apellido. " " .$fena. " " .$correo;?></span></legend>
			<br>
			<a href="http://localhost/mio/Proyecto/Principal.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			
		<?php
	
	$conn -> close();

	?>
</body>
</html>
