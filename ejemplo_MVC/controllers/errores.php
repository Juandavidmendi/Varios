<?php
class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "Hubo un error en la solicitud o no existe la pagina";//se puede pasar informacion a traves del controlador para que la vista lo tome
        $this->view->render('errores/index');
        //echo "<p>Error al cargar recurso</p>";Esto antes me traia este mensaje de validacion
    }
}

?>