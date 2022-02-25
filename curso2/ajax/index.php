<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refrescar página con AJAX</title>
</head>
<body>
    <div id="main-container">
    <form id="nuevo-pendiente-container" action="" method="post">
        <p>
            Tareas <br>
            <input type="text" name="todo" id="todo">
        </p>
        <p>
            <input type="submit" id="bEnviar" value="añadir todo">
        </p>
    </form>
    </div>

    <div id="mostrar-todo-container">
     <?php
        include_once 'mostrar-todos.php';
    ?>
    </div>

    <script src="main.js"></script>
    <script>
        cargarTodos();
    </script>
  
</body>
</html>