<?php

use app\classes\Routes;
use app\classes\Uri;

require "../bootstrap.php";

$routes = [
    '/' => 'controllers/index.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$uri = Uri::load();

require Routes::load($routes, $uri);