<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="notes.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
    <style>
      body {
        font-family: 'Tangerine', serif;
        font-size: 25px;
      }
    </style>  
</head>
<h1>Sistema de anotaciones</h1>
        <h2>Ingrese un recordatorio</h2>
<div id="principal">
<ul>
<form action="notas.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Añadir pendiente">
    </form>
    <div id="mostrar-todo-container">
        <form id="formMostrarTodo" action="notas.php" method="POST">
            <input type="checkbox"  name="mostrar-todo" onchange="mostrarTodo(this)" <?php if(isset($_POST['mostrar-todo'])){
              if($_POST['mostrar-todo'] == "on"){
                echo "checked";
              }
            }?>>Mostrar todo </button>
        </form>
    </div>

<?php

//Conexión a la BD
$servidor = "localhost";
$nombreusuario = "root";
$password = "1102356Tyt";
$db = "todolistDB";

$conexion = new mysqli($servidor, $nombreusuario, $password, $db);

if($conexion->connect_error){
    die("Conexión fallida: " . $conexion->connect_error);
}

//Validación de datos para ingresar
if(isset($_POST['texto'])){
    $texto = $_POST['texto'];
    if($texto != ""){
      $sql = "INSERT INTO todoTable(texto, completado)
                        VALUES('$texto', false)";
    
    if($conexion->query($sql) === true){
    }else{
        die("Error al insertar datos: " . $conexion->error);
    } 
    }
    
}else if(isset($_POST['completar'])){
    $id = $_POST['completar'];

    $sql = "UPDATE todoTable SET completado = 1 WHERE id = $id";

    if($conexion->query($sql) === true){
    }else{
        die("Error al actualizar datos: " . $conexion->error);
    } 
}else if(isset($_POST['eliminar'])){
    $id = $_POST['eliminar'];

    $sql = "DELETE FROM todoTable WHERE id = $id";

    if($conexion->query($sql) === true){
       
    }else{
        die("Error al actualizar datos: " . $conexion->error);
    } 
}
$sql = "";
if(isset($_POST['mostrar-todo'])){
    $ordenar = $_POST['mostrar-todo'];
    if($ordenar == "on"){
        $sql = "SELECT * FROM todoTable ORDER BY completado";
    }
}else{
    $sql = "SELECT * FROM todoTable WHERE completado = 0";
}
//Obtención de datos de tabla
$resultado = $conexion->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
?>
<li>
  <a href="">
<form method="POST"  id="form<?php echo $row['id']; ?>" action="">
    <h2><?php echo $row['texto']; ?><i class="fas fa-check-square"></i></h2>
    <button id ="b1" name="completar" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" 
    type="checkbox" onchange="completarPendiente(this)" 
    <?php if($row['completado'] ==1) echo " checked disabled";?>><i class="ri-checkbox-fill"></i></button>

    <form method="POST"  id="form_eliminar<?php echo $row['id']; ?>" action="notas.php">
    <input type="hidden" name="eliminar" value="<?php echo $row['id']; ?>">
    <button  id="b2" type="submit" value=""><i class="ri-delete-bin-fill"></i></button>
    </form>
    </form>
    </a>

</li>
  <?php

}
}
$conexion->close();


?>
</div>

<script>
    
function completarPendiente(e){
    var id = "form" + e.id;
    var formulario = document.getElementById(id);
    formulario.submit();
}

function mostrarTodo(e){
    var formulario = document.getElementById("formMostrarTodo");
    formulario.submit();
}

</script>
</ul>
</div>
</body>
</html>
