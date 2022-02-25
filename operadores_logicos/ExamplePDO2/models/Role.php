<?php

class Role
{

    private $idCategoria;
    private $tipoCategoria;
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
            $strSql = 'SELECT * FROM categoria';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    } # fin metodo getAll

    public function newRole($data)
    {
        try {
            $this->pdo->insert('categoria', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } // fin metodo newUser

    public function getById($idCategoria)
    {
        try {
            $strSql = 'SELECT * FROM categoria WHERE idCategoria = :idCategoria';
            $array = ['idCategoria' => $idCategoria];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editRole($data)
    {
        try {
            $srtWhere = 'idCategoria = ' . $data['idCategoria'];
            $this->pdo->update('categoria', $data, $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteRole($data)
    {
        try {
            $srtWhere = 'idCategoria = ' . $data['idCategoria'];
            $this->pdo->delete('categoria', $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
} # fin clase Role
