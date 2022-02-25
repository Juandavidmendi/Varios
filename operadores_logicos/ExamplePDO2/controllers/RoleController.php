<?php

require 'models/Role.php';

class RoleController
{

    private $model;

    public function __construct()
    {
        $this->model = new Role;
    }

    public function index()
    {

        require 'layout.php';
        $roles = $this->model->getAll();
        require 'views/role/list.php';
    }

    public function add()
    {
        require('layout.php');
        require('views/role/new.php');
    }

    public function save()
    {
        $this->model->newRole($_REQUEST);
        header('Location: ?controller=role&method=index');
    }

    public function edit()
    {

        if (isset($_REQUEST['idCategoria'])) {
            $idCategoria = $_REQUEST['idCategoria'];
            $data = $this->model->getById($idCategoria);
            require('layout.php');
            require('views/role/edit.php');
        }else{
            echo "Error";
        }
    }

    public function update()
    {
        if(isset($_POST)){
            $this->model->editRole($_POST);
            header('Location: ?controller=role');
        }else{
            Echo "Error";
        }
    }

    public function delete()
    {
        $this->model->deleteRole($_REQUEST);
        header('Location: ?controller=role');
    }
}
