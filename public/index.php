<?php

require "../bootstrap.php";

use app\classes\Layout;
use app\classes\Routes;
use app\classes\Uri;

$routes = [
    '/'            => 'controllers/index',
    '/user_create' => 'controllers/user_create',
    '/user_edit'   => 'controllers/user_edit',
    '/user_update' => 'controllers/user_update',
    '/user_store'  => 'controllers/user_store'
];

$uri    = Uri::load();

$layout = new Layout;

require Routes::load($routes, $uri);

require $layout->master('layout');