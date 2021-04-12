<?php

require_once './libs/autoload.php';

$router = new Router();
$route = $router->match($_SERVER['PATH_INFO']);

$controller = new $route['controller'];
call_user_func_array([
    $controller, 
    $route['action'] ?? 'execute'
], $route['args'] ?? []);
