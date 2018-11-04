<?php

use app\models\User;

$user = new User;
$users = $user->all();

dd($users);

$name = 'Vinicius';

require "../app/views/index.php";