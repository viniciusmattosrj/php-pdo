<?php

namespace app\models;

class User extends Model
{

    protected $table = 'users';

    #public function insert(array $attributes){
    #    $sql = "INSERT INTO {$this->table}(name,email,password) VALUES(:name,:email,:password)";
    #
    #    $insert = $this->connection->prepare($sql);
    #
    #    foreach ($attributes as $key => $value){
    #        $insert->bindValue($key, $value);
    #    }
    #
    #    return $insert->execute($attributes);
    #}

    public function update(array $attributes)
    {
        $sql = "UPDATE {$this->table} SET name = :name, email = :email, password = :password WHERE id = :id";

        $update = $this->connection->prepare($sql);
        $update->execute($attributes);

        return $update->rowCount();
    }
}