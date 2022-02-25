<?php
//ESTE ES EL CONTROLADOR BASE
//son las clases base para cuando creemos nuevas clases estas las hereden y no tener que crear cada una de las funcionalidades
    class Controller{
        function __construct(){
            //echo "<p>Papa Controller</p>";
            $this->view = new View(); //cada vez que mande a crear un nuevo controlador va a crear una vista asociada
        }  
        //no todas las vistas requiren cargue de datos, es por eso que creamos esta funcion
        function loadModel($model){
            $url = 'models/'.$model.'model.php';

            if(file_exists($url)){
                require $url;
                $modelName = $model.'Model';
                $this->model = new $modelName();
            }
        } 
    }


?>