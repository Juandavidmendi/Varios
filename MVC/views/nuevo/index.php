<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
  
        <h1 class="center">Seccion de nuevo</h1>
        <!--este div permite mostrar el mensaje arriba del formulario -->
        <div class="center"><?php echo $this->mensaje;?></div> 
        <br>
          
        <form action="<?php echo constant('URL'); ?>nuevo/registrarAlumno/" method="post">
        <div id="main">
        <div class="mb-3">
        <p>
            <label for="matricula" class="form-label">Matricula</label><br>
            <input type="text" name="matricula" id="" required> 
        </p>
        </div>
        <div class="mb-3">
        <p>
            <label for="matricula" class="form-label">Nombre  </label><br>
            <input type="text" name="nombre" id="" required> 
        </p>
        </div>
        <div class="mb-3">
        <p>
            <label for="matricula" class="form-label">Apellido</label><br>
            <input type="text" name="apellido" id="" required> 
        </p>
        </div>
        <p>
            <input type="submit" value="Registrar nuevo alumno" class="btn btn-primary">
        </p>
        </form>
        </div>
    


    <?php require 'views/footer.php';?>
</body>
</html>