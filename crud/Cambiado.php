<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style_prin.css">
	<title>Document</title>
</head>
<body>
	<?php
	//incluimos los datos de conexion y las funciones
	include("Conexion.php");
	include("Funciones.php");
	//Verificamos la presencia del codigo esperado
	if ( isset($_POST["nomp"] , $_POST["can"])){
		if ($con = conectarBase($host, $usuario, $clave, $base)) {
			@mysqli_query($con,"SET NAMES 'UTF-8'");
			// tarspasamos las variables locales
			$codigo =$_POST["usecode"];
			$nombre = $_POST["nomp"];
			$cantidad = $_POST["can"];
			$consulta = "UPDATE proveedor SET nombre_proveedor = '$nombre', producto_provee = '$cantidad' WHERE id_proveedor = '$codigo'";
			if (mysqli_query($con,$consulta)) {
			?>	
			<p class="satis">
		
				<img src="../img/Check.png" alt="Acceso Concedido" width="50%">
				<legend id="leg1">Se actualizo correctamente <br> <span><?php echo $nombre. " " . $cantidad . "";?></span></legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			
			<?php
				
				
			}
			else {
			?>	
			<p class="err">
		
				<img src="../img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se pudo modificar <?php echo mysqli_error($con);?></legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else {
			?>	
			<p class="err">
		
				<img src="img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">Servicio interrumpido</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
		}
			else {
			?>	
			<p class="err">
		
				<img src="img/alert.png" alt="Acceso Concedido" width="50%">
				<legend id="leg2">No se ha indicado el registro a modificar</legend>
				<br>
				<a href="listar_productos.php"><input class="botb" type="button" value="Listado"></a>

			</p>
			<?php
			}
	?>
</body>
</html>