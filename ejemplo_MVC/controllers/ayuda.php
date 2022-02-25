<?php
class Ayuda extends Controller{
    function __construct(){
        parent::__construct(); //se llama al papa Controller
        $this->view->render('ayuda/index');
    }
}




?>