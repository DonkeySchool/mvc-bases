<?php

require_once './libs/autoload.php';

$router = new Router();
$controller = $router->dispatch($_GET['url']);

$controller->execute();