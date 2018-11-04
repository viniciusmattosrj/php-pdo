<?php

use app\models\User;

$user = new User;
//$users = $user->all();

$userEncontrado = $user->find('id', 1);
dd($userEncontrado);

$name = 'Vinicius';

require "../app/views/index.php";