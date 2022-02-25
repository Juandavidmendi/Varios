<?php

//El modelo es el encargado de moldear los datos, los controladores no tienen que saber nada de la base de datos
class Model{
    function __construct(){
        $this->db = new Database();//se crea un objeto
    }
}


?>