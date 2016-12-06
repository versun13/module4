<?php

require_once 'settings.php';
require_once 'includes.php';
    
$controller = 'index';
$action = 'index';
$parameters = null;
session_start();

if( isset($_GET['route'])) {
    $route = explode('/', $_GET['route']);
    if(isset($route[0])) {
        $controller = $route[0];
    }
    if(isset($route[1])) {
        $action = $route[1];
    }
    if(isset($route[2])) {
        $parameters = $route[2];
    }
}
$controller=ucfirst($controller);
$controllerName = "\\Controller\\{$controller}Controller";

$controllerObj = new $controllerName();
if(is_callable(array($controllerObj, $action))) {
    $controllerObj->$action($parameters);
} else {
    echo 'Starting default!';
    $controllerObj->index($parameters);
}
