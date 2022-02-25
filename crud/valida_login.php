<html>
	<link rel="stylesheet" href="../css/style.css">
	<?php
	$nombre = $_POST['usuario'];
	
	$password = $_POST['clave'];

	$conn = new mysqli("localhost","root","","concesionario");

	if($conn->connect_error){
		die ("No se pudo conectar al servidor: " . $conn->connect_error);
	}

	$registros = mysqli_query($conn,"SELECT * FROM empleados WHERE user = '$nombre' AND password = '$password'");

	if($reg = mysqli_fetch_array($registros)){
	
	?>	
	<p class="positivo">
		
		<img src="../img/Check.png" alt="Acceso Concedido" width="50%">
		<legend id="leg1">Acceso Concedido</legend>
		<br>
		<a href="http://localhost/mio/Proyecto/Principal.php"><input class="but" type="button" value="ingresar al sitio"></a>

	</p>
	<?php
	}

	else{
		echo "<script> alert('Usuario o Contraseña Incorrecta')</script>";

	?>
	<p class="negativo">
		
		<img src="../img/alert.png" alt="Acceso Denegado" width="40%">
		<legend id="leg2">Acceso Denegado</legend>
		<br>
		<a href="http://localhost/mio/Proyecto/login.html"><input class="but" type="button" value="Volver a intentarlo"></a>
	</p>
	<?php
	}
	?>
</html>