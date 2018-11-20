<?php

use app\classes\Validation;
use app\models\User;

$user  = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$updated  = $user->update($validate, ['id' => $validate->id]);

if ($updated) {
    header('location:/');
}