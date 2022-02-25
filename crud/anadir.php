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
	$conn = new mysqli("localhost", "root", "", "miscelanea");
	if($conn->connect_error){
    
    	die ("No se puede conectar al servidor: " . $conn->connect_error);
    
	}


	$query = "INSERT INTO proveedores  (nombre, identificacion, telefono, direccion) VALUES('$_REQUEST[Nombre]','$_REQUEST[Identificacion],'$_REQUEST[Telefono],'$_REQUEST[Direccion]')";
	$result = $conn -> query($query);

	if(!$result) die("Error al acceder a la base de datos" . mysqli_error($conn));
		?>	
			<p class="satis">
		
			<img src="../img/Check.png" alt="Acceso Concedido" width="50%">
			<legend id="leg1">Proveedor Agregado Correctamente</span></legend>
			<br>
			<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			
		<?php
	
	$conn -> close();

	?>
</body>
</html>
