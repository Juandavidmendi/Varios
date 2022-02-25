<?php
class Consulta extends Controller{

    function __construct(){
        parent::__construct(); //Llamar al padre de las clases en este caso al papa controller
        $this->view->render('consulta/index');
        //echo "<p>Nuevo controlador Main</p>";

    }
}


?>