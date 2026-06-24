<?php
session_start();

// Error reporting (remove or change in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Site settings
define('SITE_NAME', 'SGR Ticketing System');
define('BASE_URL', 'http://localhost/ticket-system');

// Load Homepage
require_once __DIR__ . '/../app/views/home/home.php';