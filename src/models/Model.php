<?php

namespace src\models;

use src\classes\Bind;
use src\models\Connection;
use src\traits\PersistDb;

abstract class Model {

    /* Criação da trait */
    use PersistDb;

    protected $connection;
   
    public function __construct()
    {
        $this->connection = Bind::get('connection');
    }

    public function all()
    {
        $sql  = "SELECT * FROM {$this->table}";
        $list = $this->connection->prepare($sql);
        $list->execute();

        return $list->fetchAll();
    }

    public function find($field, $value)
    {
        $sql  = "SELECT * FROM {$this->table} WHERE {$field} = :{$field}";
        $list = $this->connection->prepare($sql);
        $list->bindValue($field, $value);
        $list->execute();

        return $list->fetch();
    }

    public function delete()
    {
        $sql    = "DELETE FROM {$this->table} WHERE $field = ?";
        $delete = $this->connection->prepare($sql);
        $delete->bindValue(1, $value);
        $delete->execute();

        return $delete->rowCount();
    }
}
