<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
    <style>
        body{
            background-color: #5276af;
            height: 100px;
        }
        #container{
            background: white;
            margin: 100px auto;
            padding: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php
            $mes = array("enero", "febrero", "marzo", "abril", "Mayo", "Junio", "julio", "agosto", "septiembre", "nobiembre", "diciembre");
            echo " Fecha " .date("l") . " ". date("d") . " de " . $mes[date("m")-1]. " de ". date("Y") . "<br>";
            echo " Son las " . date("h:i:sa");
        ?>
    </div>
</body>
</html>