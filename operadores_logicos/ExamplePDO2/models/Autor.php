<?php

class Autor
{

    private $idAutor;
    private $nombreAutor;
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
            $strSql = 'SELECT * FROM autor';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    } # fin metodo getAll

    public function newAutor($data)
    {
        try {
            $this->pdo->insert('autor', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } // fin metodo newUser

    public function getById($idAutor)
    {
        try {
            $strSql = 'SELECT * FROM autor WHERE idAutor = :idAutor';
            $array = ['idAutor' => $idAutor];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editAutor($data)
    {
        try {
            $srtWhere = 'idAutor = ' . $data['idAutor'];
            $this->pdo->update('autor', $data, $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteAutor($data)
    {
        try {
            $srtWhere = 'idAutor = ' . $data['idAutor'];
            $this->pdo->delete('autor', $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
} # fin clase Role
