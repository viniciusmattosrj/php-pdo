<?php

namespace src\traits;

use src\models\querybuilder\Insert;
use src\models\querybuilder\Update;

trait PersistDb
{
    public function insert($attributes)
    {
        $attributes = (array) $attributes;
        
        /* É um método estático */
        $sql = Insert::sql($this->table, $attributes);

        $insert = $this->connection->prepare($sql);

        return $insert->execute($attributes);
    }

    public function update($attributes, $where)
    {
        $attributes = (array) $attributes;
        
        /* Não é um método estático */
        $sql = (new Update)->where($where)->sql($this->table, $attributes);

        $update = $this->connection->prepare($sql);

        $update->execute($attributes);

        return $update->rowCount();
    }
}
