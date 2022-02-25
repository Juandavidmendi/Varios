<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar datos</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="row" id="principal">
    <div class="form-floating mb-3">
    <form action="#" method="POST">
        <h1>Sistema de anotaciones</h1>
        <h2>Ingrese un recordatorio</h2>
        <input type="text" name="texto" id="floatingInput" placeholder="Aqui va tu anotacion">
        
        <input type="submit" value="Add homework">
    </form>
    </div>
    <div class="form-floating">
    <div class ="row" id="todolist">
        <?php
            $servidor       = "localhost";
            $nombreusuario  = "root";
            $password       = "1102356Tyt";
            $db             = "todolistDB";
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexion fallida" . $conexion->connect_error);
            }
            if(isset($_POST['texto'])){
                $texto = $_POST['texto'];

                if($texto != ""){
                
                $sql = "INSERT INTO todoTable(texto, completado)
                                    VALUES('$texto', false)";
                
                if($conexion->query($sql) === true){
                    echo '
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">'.$texto.'</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary">Completado</a>
                    </div>
                    </div>
                    </div>
                    <br>' ;
                }else{
                    die("Error al insertar datos: " . $conexion->error);
                }
            }else{echo "<script>swal('El campo de ingreso no puede estar vacio')</script>"; }
            }
            
            $sql = "SELECT * FROM todoTable"; 
            $resultado = $conexion->query($sql);

            if($resultado->num_rows > 0){
                while($row = $resultado->fetch_assoc()){
                    ?> <?php
                    //echo '<div><form action =""><input type="checkbox">'.$row['texto'].'</form></div>';
                    echo '
                    <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['texto'].'</h5>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary" class="center">Completado</a>
                    </div>
                    </div>
                    </div>
                    <br>';
                }    
            }
            
            $conexion->close();
        ?>
    </div>
    </div>
</body>
</html>

