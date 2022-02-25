<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas.com</title>
</head>
<body>
    <?php
        include_once 'peliculas.php';

        $peliculas = new Peliculas(3);
    ?>
    <div id="container">
    <div id="peliculas">
        <?php
            $peliculas->mostrarPeliculas();
        ?>
        </div>
        <div id="paginas">
        </div>
        <div id="peliculas">

        </div>
    </div>
</body>
</html>