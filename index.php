<?php
/* change on prod
    if (!empty($arguments[1])) {
        $controller = $arguments[1] ?? null;
        $action = $arguments[2] ?? null;
    } 
*/

require 'includes/sessionStart.php';
require 'autoloader.php';

$controller = 'index';
$action = '';

if (count($_GET) > 0) {
    $params = $_GET['params']; 
    $arguments = explode('/', $params);
   
    if (!empty($arguments)) {
        $controller = $arguments[0] ?? null;
        $action = $arguments[1] ?? null;
    } 
}

$controllerNamespace = 'Controller\\' . ucfirst($controller) . 'Controller';

if (class_exists($controllerNamespace)) {
    $instance = new $controllerNamespace();

    if (null !== $action && method_exists($instance, $action)) {
        $instance->$action();
    } else {
        $instance();
    }
}   