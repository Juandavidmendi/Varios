<?php
class Main extends Controller{

    function __construct(){
        parent::__construct(); //Llamar al padre de las clases en este caso al papa controller
        $this->view->render('main/index');
        //echo "<p>Nuevo controlador Main</p>";

    }
    //metodo que se puede ejecutar en la url
    function saludo(){
        echo "<p>Ejecutaste el metodo saludo</p>";
    }

}


?>