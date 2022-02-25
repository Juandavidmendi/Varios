<?php
class Nuevo extends Controller{

    function __construct(){
        parent::__construct(); //Llamar al padre de las clases en este caso al papa controller
        $this->view->render('nuevo/index');
        //echo "<p>Nuevo controlador Main</p>";

    }
    //Nuevo alumno
    function registraAlumno(){//se pueden hacer validaciones en el controlador no  en el modelo
        $matricula = $_POST['matricula'];
        $nombre    = $_POST['nombre'];
        $apellido  = $_POST['apellido'];

        $this->model->insert(['matricula' => $matricula, 'nombre' => $nombre, 'apellido' => $apellido ]); //pasar informacion a traves de un arreglo es la mejor manera
        echo "Alumno creado";
    }

}


?>