<?php

namespace app\models;

use PDO;

class Connection
{
    public static function connect()
    {
        $config = require "../config.php";
        $pdo    = new PDO("mysql:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']}",$config['db']['username'], $config['db']['password']);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /* FETCH_OBJ irá listar no formato de objeto e não de array! */
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
}