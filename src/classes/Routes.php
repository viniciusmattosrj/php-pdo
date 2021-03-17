<?php

namespace src\classes;

class Routes
{
    public static function load($routes, $uri)
    {

        if (!array_key_exists($uri, $routes)) {
            throw new \Exception("Rota não existe {$uri}");
        }
        /* A extensão .php está sendo inserida aqui para evitar ficar tratando em cada arquivo. */
        return "../src/{$routes[$uri]}.php";
    }
}
