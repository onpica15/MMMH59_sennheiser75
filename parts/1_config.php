<?php

//define('WEB_ROOT', 'http://localhost/php-test/');
define('WEB_ROOT', '/sennheiser75/');

//  php -S localhost:8000 -t ./
// define('WEB_ROOT', '/sennheiser75/');

if (!isset($_SESSION)) {
    session_start();
}

$db_host = 'localhost';
<<<<<<< HEAD
$db_name = 'proj57';
=======
$db_name = 'sennheiser75';
<<<<<<< HEAD
>>>>>>> e79b1b8f66fb5dc65eba97bd7c53c46d053a4b86
$db_user = 'root';
$db_pass = '';
=======
$db_user = 'kim';
$db_pass = 'adobe30';
>>>>>>> 068b053de1b54014fd0b37962b3f428ea1f65405

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
