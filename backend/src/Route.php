<?php

namespace App;

class Route
{
    public static function get($route, $action)
    {

        if (Route::scannerMethod('GET', $route)) {
            $parametres = \explode("::", $action);
            $classe = new $parametres[0]();
            $methode = $parametres[1];

            $classe->$methode();
        }
    }

    public static function post($route, $action)
    {
        if (Route::scannerMethod('POST', $route)) {
            $parametres = \explode("::", $action);
            $classe = new $parametres[0]();
            $methode = $parametres[1];

            $classe->$methode();
        }
    }

    public static function scannerMethod(string $method, string $path_info)
    {
        return ($_SERVER['REQUEST_METHOD'] == strtoupper($method) && $_SERVER['PATH_INFO'] === $path_info);
    }
}
