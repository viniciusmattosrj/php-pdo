<?php

use src\models\User;

$user  = new User;
$users = $user->all();

$layout->add('home');
