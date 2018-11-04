<?php

use app\models\User;

$user = new User;
//$users = $user->all();

$userEncontrado = $user->find('id',['id' => 2]);
dd($userEncontrado);

$name = 'Vinicius';

require "../app/views/index.php";