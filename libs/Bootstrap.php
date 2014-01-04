<?php

class Bootstrap {

    function __construct() {
        $url = array_filter(explode("/", $_GET["url"]));

        if (sizeof($url) == 0 || !file_exists("controllers/$url[0].php")) {
            require "controllers/error.php";
            $controller = new Error();
            return false;
        }
        require "controllers/$url[0].php";
        $controller = new $url[0];
        if (isset($url[2]) && method_exists($controller, "$url[1]")) {
            $controller->{$url[1]}($url[2]);
        } else if (isset($url[1]) && method_exists($controller, "$url[1]")) {
            $controller->{$url[1]}();
        }
    }

}