<?php

use app\models\User;
use app\classes\Validation;

$user  = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$updated  = $user->update($validate, ['id' => $validate->id]);

if($updated) {
    header('location:/');
}