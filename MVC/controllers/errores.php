<?php
    class Errores extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje = "Error 404: La pagina no existe";
            $this->view->render('errores/index');
            //echo "<p>Error al cargar recurso</p>";
        }
    }
?>