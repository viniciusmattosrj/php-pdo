<?php

namespace app\models;

use app\models\Connection;
use app\traits\PersistDb;

abstract class Model {

    /* Criação da trait */
    use PersistDb;

    protected $connection;
   
    public function __construct()
    {
        $this->connection = Connection::connect();
    }

    public function all() {
        $sql  = "SELECT * FROM {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $parameters) {
        $sql  = "SELECT * FROM {$this->table} WHERE {$field} = :id";
        $list = $this->connection->prepare($sql);
        //$list->bindValue('id', 2);
        $list->execute($parameters);

        return $list->fetch();
    }

    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE $field = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}