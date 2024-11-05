<?php
    $controller = 'index';

    if (isset($_SERVER['REQUEST_INFO'])) {
        $controller = str_replace('/', '', $_SERVER['PATH_INFO']);
    }

    require "controllers/{$controller}.controller.php";
