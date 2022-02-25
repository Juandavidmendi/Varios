<?php

#Llamamos a la clase Conexion
require 'providers/Database.php';

$controller = 'HomeController';

// llamados a controlador por defecto
if (!isset($_REQUEST['controller'])) {
    require "controllers/" . $controller . ".php";

    $controller = ucwords($controller);
    $controller = new  $controller;
    $controller->index();
} else {

    # se obtiene el nombre del controlador a cargar
    $controller = ucwords($_REQUEST['controller'] . 'Controller');
    $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';

    require 'controllers/' . $controller . '.php';
    $controller = new $controller;

    call_user_func(array($controller, $method));
}
