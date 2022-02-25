<?php

require 'models/Category.php';

class CategoryController
{

  private $model;

  public function __construct()
  {
    $this->model = new Category;
  }

  public function index()
  {

    require 'layout.php';
    $categories = $this->model->getAll();
    require 'views/category/list.php';
  }

  public function add()
  {
    require 'layout.php';
    require 'views/category/new.php';
  }

  public function save()
  {
    $this->model->newCategory($_REQUEST);
    header('Location: ?controller=category&method=index');
  }

  public function edit()
  {

    if (isset($_REQUEST['idCategoria'])) {
      $idCategoria = $_REQUEST['idCategoria'];
      $data = $this->model->getById($idCategoria);
      require 'layout.php';
      require 'views/category/edit.php';
    } else {
      echo "Error";
    }
  }

  public function update()
  {
    if (isset($_POST)) {
      $this->model->editCategory($_POST);
      header('Location: ?controller=category');
    } else {
      echo "Error";
    }
  }

  public function delete()
  {
    $this->model->deleteCategory($_REQUEST);
    header('Location: ?controller=category');
  }
}
