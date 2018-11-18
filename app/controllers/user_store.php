<?php

use app\classes\Validation;


$validation = new Validation;
$validate   = $validation->validate($_POST); 

$user = new app\models\User;

$cadastrado = $user->insert($validate);

if($cadastrado) {
    header('location:/');
}

