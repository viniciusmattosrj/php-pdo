<?php

use src\classes\Validation;
use src\models\Post;
use src\models\Transaction;
use src\models\User;

$validation = new Validation;
$validate   = $validation->validate($_POST);

$transaction = new Transaction;

$transaction->transactions(function() use($transaction, $validate) {

    $transaction->model(User::class)->insert($validate);

    $transaction->model(Post::class)->insert([
        'title'       => 'teste',
        'user'        => 3,
        'description' => 'description teste'
    ]);
});
