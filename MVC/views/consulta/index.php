<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div id="main">
        <h1 class="center">Seccion de consulta</h1>
        <div id="respuesta" class="center"></div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody id="tbody-alumnos">
                <?php 
                    include_once 'models/alumno.php';
                    foreach($this->alumnos as $row){
                        $alumno = new Alumno();
                        $alumno = $row;    
                ?>
                <tr id="fila-<?php echo $alumno->matricula; ?>">
                    <td><?php echo $alumno->matricula;?></td>
                    <td><?php echo $alumno->nombre;?></td>
                    <td><?php echo $alumno->apellido;?></td>
                    <td><button class="btn btn-outline-primary" href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->matricula;?>">Editar</button></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->matricula;?>">Eliminar</a></td>-->
                    <td><button class="btn btn-outline-danger" class="bEliminar" data-matricula="<?php echo $alumno->matricula; ?>" >Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    <?php require 'views/footer.php';?>                  
    <script src="<?php echo constant('URL');?>public/js/main.js"></script>
</body>
</html>