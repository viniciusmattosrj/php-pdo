<?php

use app\classes\Validation;
use app\models\Transaction;

$validation = new Validation;
$validate   = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function() use($transaction, $validate) {

    $transaction->user->insert($validate);

    $transaction->post->insert([
        'title'       => 'teste',
        'user'        => 78,
        'description' => 'description teste',
    ]);
});

#$validation = new Validation;
#$validate   = $validation->validate($_POST); 
#
#$user = new app\models\User;
#
#$cadastrado = $user->insert($validate);
#
#if($cadastrado) {
#    header('location:/');
#}