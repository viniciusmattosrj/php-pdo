<?php

use src\classes\Validation;
use src\models\User;

$user  = new User;
$validation = new Validation;

$validate = $validation->validate($_POST);

$updated  = $user->update($validate, ['id' => $validate->id]);

if ($updated) {
    header('location:/');
}
