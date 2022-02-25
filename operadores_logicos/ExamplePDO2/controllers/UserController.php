<?php

require 'models/User.php';
require 'models/Role.php';
require 'models/Status.php';

class UserController
{

    private $model;
    private $role;
    private $status;

    public function __construct()
    {
        $this->model = new User;
        $this->role = new Role;
        $this->status = new Status;
    }

    public function index()
    {
        require 'layout.php';
        $users = $this->model->getAll();
        require 'views/users/list.php';
    }

    public function add()
    {
        
    
        require('views/users/new.php');
    }

    public function save()
    {        
        $this->model->newUser($_REQUEST);
        header('Location: ?controller=user&method=index');
    }

    public function edit()
    {
        if (isset($_REQUEST['IdUsuario'])) {
            $idUsuario = $_REQUEST['IdUsuario'];
            $data = $this->model->getById($id);

            $roles = $this->role->getAll();
            $statuses = $this->status->getAll();
            
            require('layout.php');
            require('views/users/edit.php');
        }else{
            echo "Error";
        }
    }

    public function update()
    {
        if(isset($_POST)){
            $this->model->editUser($_POST);
            header('Location: ?controller=user');
        }else{
            Echo "Error";
        }
    }

    public function delete()
    {
        $this->model->deleteUser($_REQUEST);
        header('Location: ?controller=user');
    }
}
