<?php
require_once 'controllers/errores.php';
class App{
    function __construct(){
        //echo '<p>Nueva App</p>';


        $url = isset($_GET['url']) ? $_GET['url']: null; //Si no encuentra nada en la url //obtener url establecida en .htaccess
        $url = rtrim($url, '/');
        $url = explode('/', $url);//busca un separador dentro de url
        if(empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadModel('main');
            return false;
        }

        //Var_dump($url);comoprobar el arreglo url //Desde aqui se controlan cada uno de los controladores
        $archivoController = 'controllers/' . $url[0] . '.php';//va a la carpeta controladores y busca el archivo de la url +.php

        if(file_exists($archivoController)){

            require_once $archivoController;
            $controller = new $url[0];
            $controller->loadModel($url[0]);

            if(isset($url[1])){
                $controller->{$url[1]}(); //el texto que traiga url lo convertimos en metodo
            }
        }else{
            $controller = new Errores();
        }

    }
}


?>