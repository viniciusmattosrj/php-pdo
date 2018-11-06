<?php

namespace app\models;

class User extends Model{

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
}