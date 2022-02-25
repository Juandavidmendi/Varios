<?php
//son las clases base para cuando creemos nuevas clases estas las hereden y no tener que crear cada una de las funcionalidades
    class View{
        function __construct(){
            //echo "<p>Papa View</p>";
        }
        //ESTA FUNCION RENDERIZA UNA VISTA ESPECIFICA
        function render($nombre){
            require 'views/' . $nombre . '.php'; //carga la vista de acuerdo al parametro que yo establezca en la variable $nombre
        }
    }


?>