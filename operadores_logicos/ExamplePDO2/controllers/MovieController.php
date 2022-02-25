<?php

require 'models/Movie.php';
require 'models/User.php';
require 'models/Autor.php';

class MovieController
{

  private $modelMovie;
  private $modelUser;
  private $modelCategory;

  public function __construct()
  {
    $this->modelMovie = new Libro;
    $this->modelUser = new User;
    $this->modelCategory = new Autor;
  }

  public function index()
  {
    require 'layout.php';
    $movies = $this->modelMovie->getAll();
    require 'views/Libro/list.php';
  }

  public function add()
  {
    require 'layout.php';
    $users = $this->modelUser->getAll();
    $categories = $this->modelCategory->getAll();
    require 'views/Libro/new.php';
  }

  public function save()
  {

   
    $this->modelMovie->newMovie2($_REQUEST);
    header('Location: ?controller=movie&method=index');
  }

  public function edit()
  {

    if (isset($_REQUEST['idLibro'])) {
      $idLibro = $_REQUEST['idLibro'];
      $data = $this->modelMovie->getById($idLibro);
      $users = $this->modelUser->getAll();
      require 'layout.php';
      require 'views/Libro/edit.php';
    } else {
      echo "Error";
    }
  }

  public function update()
  {
    if (isset($_POST)) {
      $this->modelMovie->editMovie($_POST);
      header('Location: ?controller=movie');
    } else {
      echo "Error";
    }
  }

  public function delete()
  {
    $this->modelMovie->deleteMovie($_REQUEST);
    header('Location: ?controller=movie');
  }

} # fin clase MovieController
