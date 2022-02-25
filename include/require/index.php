<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and require</title>
    <style>
        #container{width: 500px; margin: 150px; color: 091201;}
        #footer{background-color: #222; padding: 10px; color: white;}
        #menu{background-color: #eee; padding: 10px;}
        h3{font-family: sans-serif; color: #091201;}
    </style>
</head>
<body>
    <div id="container">
    <?php
        include 'menu.php';
    ?>    
<h3>Contenido principal</h3>
    <?php 
    include 'footer.php'
    ?>
    </div>
</body>
</html>