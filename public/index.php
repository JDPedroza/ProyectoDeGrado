<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Aura\Router\RouterContainer;

require_once '../vendor/autoload.php';

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/curso-platzi-php/public/', '../index.php');
$map->get('formulario', '/Formulario','../formularios/formularioInyección.php');
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
if (!$route) {
    echo 'No route';
}
var_dump($route->handler);