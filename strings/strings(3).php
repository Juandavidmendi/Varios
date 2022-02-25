<?php
    //funciones para strings
    $mensaje = "Hoy voy a aprender mucho";

    //longitud //contar caracteres
    echo strlen($mensaje);
    echo "<br>";
    //numero de palabras //contar palabras
    echo str_word_count($mensaje);
    echo "<br>";
    //reversa //mostrar caracter alreves
    echo strrev($mensaje);
    echo "<br>";
    //encontrar texto //posicion de la palabra
    echo strpos($mensaje, "aprender");
    echo "<br>";
    //reemplazar el texto
    echo str_replace("aprender", "nadar", $mensaje);

    //convertir a minusculas
    echo strtolower($mensaje);
    echo "<br>";
    //convertir a mayusculas
    echo strtoupper($mensaje);
    echo "<br>";
    //comparar cadenas se comparan por su posicion y valor en bits
    echo strcmp("a", "a");
    //substraer cadena//
        //se substraen cadenas segun la posicion 
    echo substr($mensaje, 10);
    //Remover espacios en blanco
    echo trim("                      Hola                Soy                   Juan");
    
?>