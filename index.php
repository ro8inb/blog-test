<?php

session_start();
include_once 'Autoloader.php';
Autoloader::register();

if(isset($_GET['p'])) {
    $request = $_GET['p'];
}
else {
    $request = 'home';
}
if(strpos($request, '/') != false){
    $request = explode('/', $request);
    $argument = $request[1];
    $page = $request[0];
}
else {
    $page = $request;
    $argument = null;
}

$router = new Router($page, $argument);
$router->renderController();
