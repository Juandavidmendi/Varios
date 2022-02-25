<?php

class Status
{

    private $id;
    private $name;
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
            $strSql = 'SELECT * FROM status';
            $query = $this->pdo->select($strSql);
            return $query;
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    } # fin metodo getAll

    public function newStatus($data)
    {
        try {
            $this->pdo->insert('status', $data);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } // fin metodo newUser

    public function getById($id)
    {
        try {
            $strSql = 'SELECT * FROM status WHERE id = :id';
            $array = ['id' => $id];
            $query = $this->pdo->select($strSql, $array);
            return $query;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function editStatus($data)
    {
        try {
            $srtWhere = 'id = ' . $data['id'];
            $this->pdo->update('status', $data, $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function deleteStatus($data)
    {
        try {
            $srtWhere = 'id = ' . $data['id'];
            $this->pdo->delete('status', $srtWhere);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
} # fin clase Role
