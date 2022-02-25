<?php

class Libro
{
    private $idLibro;
    private $nombreLibro;
    private $ISBN;
    private $stanLibro;
    private $Autor_idAutor1;
    private $Categoria_idCategoria;
    private $Estado_idEstado;
    private $Editorial_idEditorial;
    private $imagen;
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new Database;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAll()
    {
        try {
            $strSql = 'SELECT * FROM libro';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function newMovie($data)
    {
        try {
            $this->pdo->insert('libro', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } // fin metodo newMovie

    public function getById($id)
    {
        try {
            $strSql = 'SELECT * FROM libro WHERE idLibro = :idLibro';
            $array = ['idLibro' => $idLibro];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editMovie($data)
    {
        try {
            $srtWhere = 'idLibro = ' . $data['idLibro'];
            $this->pdo->update('libro', $data, $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteMovie($data)
    {
        try {
            $srtWhere = 'idLibro = ' . $data['idLibro'];
            $this->pdo->delete('libro', $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getLastId()
    {
        try {
            $lastId = $this->pdo->lastId('movie');
            return $lastId;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


  
    public function newMovie2($data)
    {
        $nombreLibro = $_POST['nombreLibro'];
        $stanLibro=$_POST['stanLibro'];
        $ISBN = $_POST['ISBN'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $Autor_idAutor1=$_POST['Autor_idAutor1'];
        $Categoria_idCategoria = $_POST['Categoria_idCategoria'];
        $Estado_idEstado = $_POST['Estado_idEstado'];
        $Editorial_idEditorial = $_POST['Editorial_idEditorial'];
     
  
                  
        try {
            $base=new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');
          
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
            $base->exec("SET CHARACTER SET utf8");
          
          
            $sql="INSERT INTO libro (nombreLibro, stanLibro, ISBN, imagen, Autor_idAutor1, Categoria_idCategoria, Estado_idEstado,Editorial_idEditorial) 
          VALUES (:nombreLibro, :stanLibro, :ISBN, :imagen, :Autor_idAutor1, :Categoria_idCategoria, :Estado_idEstado, :Editorial_idEditorial)";
          
            $resultado=$base->prepare($sql);
          
          
            $resultado->execute(array(":nombreLibro"=>$nombreLibro, ":stanLibro"=>$stanLibro, ":ISBN"=>$ISBN, ":imagen"=>$imagen, ":Autor_idAutor1"=>$Autor_idAutor1, ":Categoria_idCategoria"=>$Categoria_idCategoria, ":Estado_idEstado"=>$Estado_idEstado, ":Editorial_idEditorial"=>$Editorial_idEditorial));
          
          
            echo "Registro insertado";
          
            $resultado->closeCursor();
        } catch (Exception $e) {
            echo "Línea del error: " . $e->getLine();
        } finally {
            $base=null;
        }
        // fin metodo newUser
    }
}



?>

