<?php

class User
{

    private $idUsuario;
    private $nombreUsuario;
    private $apellidoUsuario;
    private $correoUsuario;
    private $direccionUsuario;
    private $claveUsuario;
    private $rolUsuario;
    private $pdo;

    public function __construct()
    {
        try {

            $this->pdo = new Database;
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    } # fin metodo constructor


    public function getAll()
    {
        try {
            $strSql = 'SELECT * FROM usuario';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } # fin metodo getAll

    public function newUser($data)
    {
        try {
            $this->pdo->insert('usuario', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } // fin metodo newUser

    public function getById($idUsuario)
    {
        try {
        $strSql = 'SELECT * FROM usuario WHERE idUsuario = :idUsuario';
            $array = ['idUsuario' => $idUsuario];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

      public function editUser($data)
    {
        try {
            $srtWhere = 'idUsuario = ' . $data['idUsuario'];
            $this->pdo->update('usuario', $data, $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function deleteUser($data)
    {
        try {
            $srtWhere = 'idUsuario = ' .$data['idUsuario'];
            $this->pdo->delete('usuario', $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function newUser2($data)
    {
        $correoUsuario= $_POST["correoUsuario"];
        $claveUsuario= $_POST["claveUsuario"];
        $direccionUsuario= $_POST["direccionUsuario"];
        $rolUsuario= $_POST["rolUsuario"];
        $apellidoUsuario= $_POST["apellidoUsuario"];
        $nombreUsuario= $_POST["nombreUsuario"];
        $idUsuario= $_POST["idUsuario"];
        $contracifra = password_hash($claveUsuario, PASSWORD_DEFAULT, array("cost"=>12));
       
    
                    
        try{
    
            $base=new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");		
            
            
            $sql="INSERT INTO usuario(idUsuario, nombreUsuario, apellidoUsuario, direccionUsuario, correoUsuario, claveUsuario, rolUsuario) VALUES (:idUsuario, :nombreUsuario, :apellidoUsuario, :direccionUsuario, :correoUsuario, :claveUsuario, :rolUsuario)";
            
            $resultado=$base->prepare($sql);		
            
            
            $resultado->execute(array(":idUsuario"=>$idUsuario, ":nombreUsuario"=>$nombreUsuario, ":apellidoUsuario"=>$apellidoUsuario, ":direccionUsuario"=>$direccionUsuario, ":correoUsuario"=>$correoUsuario, ":claveUsuario"=>$contracifra, ":rolUsuario"=>$rolUsuario));		
            
            
            echo "Registro insertado";
            
            $resultado->closeCursor();
    
        }catch(Exception $e){			
            
            
            echo "Línea del error: " . $e->getLine();
            
        }finally{
            
            $base=null;
            
            
        }
    } // fin metodo newUser



    public function saveUser2($data)
    {
        $correoUsuario= $_POST["correoUsuario"];
        $claveUsuario= $_POST["claveUsuario"];
        $direccionUsuario= $_POST["direccionUsuario"];
        $rolUsuario= $_POST["rolUsuario"];
        $apellidoUsuario= $_POST["apellidoUsuario"];
        $nombreUsuario= $_POST["nombreUsuario"];
        $idUsuario= $_POST["idUsuario"];
        $contracifra = password_hash($claveUsuario, PASSWORD_DEFAULT, array("cost"=>12));
       
    
                    
        try{
    
            $base=new PDO('mysql:host=localhost; dbname=biblioteca', 'root', '');
            
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $base->exec("SET CHARACTER SET utf8");		
            
            
            $sql="INSERT INTO usuario(idUsuario, nombreUsuario, apellidoUsuario, direccionUsuario, correoUsuario, claveUsuario, rolUsuario) VALUES (:idUsuario, :nombreUsuario, :apellidoUsuario, :direccionUsuario, :correoUsuario, :claveUsuario, :rolUsuario)";
            
            $resultado=$base->prepare($sql);		
            
            
            $resultado->execute(array(":idUsuario"=>$idUsuario, ":nombreUsuario"=>$nombreUsuario, ":apellidoUsuario"=>$apellidoUsuario, ":direccionUsuario"=>$direccionUsuario, ":correoUsuario"=>$correoUsuario, ":claveUsuario"=>$contracifra, ":rolUsuario"=>$rolUsuario));		
            
            
            echo "Registro insertado";
            
            $resultado->closeCursor();
    
        }catch(Exception $e){			
            
            
            echo "Línea del error: " . $e->getLine();
            
        }finally{
            
            $base=null;
            
            
        }
    } // fin metodo newUser


} # fin clase Database
