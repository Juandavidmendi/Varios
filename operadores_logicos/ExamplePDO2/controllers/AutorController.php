<?php

require 'models/Autor.php';

class AutorController
{

  private $model;

  public function __construct()
  {
    $this->model = new autor;
  }

  public function index()
  {

    require 'layout.php';
    $AUTOR = $this->model->getAll();
    require 'views/Autor/list.php';
  }

  public function add()
  {
    require 'layout.php';
    require 'views/Autor/new.php';
  }

  public function save()
  {
    $this->model->newAutor($_REQUEST);
    header('Location: ?controller=Autor&method=index');
  }

  public function edit()
  {

    if (isset($_REQUEST['idAutor'])) {
      $idAutor = $_REQUEST['idAutor'];
      $data = $this->model->getById($idAutor);
      require 'layout.php';
      require 'views/Autor/edit.php';
    } else {
      echo "Error";
    }
  }

  public function update()
  {
    if (isset($_POST)) {
      $this->model->editAutor($_POST);
      header('Location: ?controller=Autor');
    } else {
      echo "Error";
    }
  }

  public function delete()
  {
    $this->model->deleteAutor($_REQUEST);
    header('Location: ?controller=Autor');
  }
}



