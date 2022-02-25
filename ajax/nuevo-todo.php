<?php

    include_once 'todos.php';
    
    $todos = new Todos();
    //validar si hay un post
    if(isset($_POST['todo'])){
        $todos->nuevoTodo($_POST['todo']);
    }
?>