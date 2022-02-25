<?php

require 'models/Status.php';

class StatusController
{

    private $model;

    public function __construct()
    {
        $this->model = new Status;
    }

    public function index()
    {

        require 'layout.php';
        $status = $this->model->getAll();
        require 'views/status/list.php';
    }

    public function add()
    {
        require('views/layout.php');
        require('views/status/new.php');
    }

    public function save()
    {
        $this->model->newStatus($_REQUEST);
        header('Location: ?controller=status&method=index');
    }

    public function edit()
    {

        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $data = $this->model->getById($id);
            require('views/layout.php');
            require('views/status/edit.php');
        }else{
            echo "Error";
        }
    }

    public function update()
    {
        if(isset($_POST)){
            $this->model->editStatus($_POST);
            header('Location: ?controller=status');
        }else{
            Echo "Error";
        }
    }

    public function delete()
    {
        $this->model->deleteStatus($_REQUEST);
        header('Location: ?controller=status');
    }
}
