<?php

session_start();

require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/config/database.php';

$controller = $_GET['a'] ?? 'home';

$controllerMap = [
    'home'     => 'HomeController',
    'auth'     => 'AuthController',
    'dashboard'=> 'DashboardController',
];

if (!isset($controllerMap[$controller])) {
    die('Page not found');
}

$controllerName = $controllerMap[$controller];

$action = $_GET['action'] ?? 'index';

require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';

$controller = new $controllerName();

if (!method_exists($controller, $action)) {
    die('Method not found');
}

$controller->$action();