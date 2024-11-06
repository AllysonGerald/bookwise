<?php

    $controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

    if (!$controller) $controller = 'index';

    if (file_exists("controllers/{$controller}.controller.php")) {
        require "controllers/{$controller}.controller.php";
    } else {
        abort(404);
    }

