<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: #b5cde6; font-family: Arial; font-size:4em; padding: 50px;}

    </style>
</head>
<body>
    <?php
        $frutas = array("platano", "manzana", "uvas", "fresa");
        print_r($frutas);

        echo $frutas[3];

        echo "<br>";

        echo count($frutas) . "elementos";

        echo "<br>"

        for ($i= 0; $i < count($frutas); $i++){
            echo $frutas[$i] . "<br />";
        }

        $edades = array("Juan" => "21", "Julian" => "12", "Ingrid" => "24");

        print_r($edades);

        echo $edades['Ingrid'];

        echo "<br>";
        // ciclo por asosiaciones 
        foreach($edades as $key => $value){
            echo $key . "tiene el valor de" . $value. "<br />";
        }

    ?>

</body>
</html>