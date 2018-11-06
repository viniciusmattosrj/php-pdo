<?php

namespace app\traits;

use app\models\querybuilder\Insert;

trait PersistDb{

    public function insert($attributes) {

        $sql = (new Insert)->sql($this->table, $attributes);

        $insert = $this->connection->prepare($sql);

        return $insert->execute($attributes);

    }

    public function update() {

    }
}