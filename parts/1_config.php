<?php

//define('WEB_ROOT', 'http://localhost/php-test/');
define('WEB_ROOT', '/sennheiser75/');

//  php -S localhost:8000 -t ./
//define('WEB_ROOT', '/');

if (!isset($_SESSION)) {
    session_start();
}

$db_host = 'localhost';
<<<<<<< HEAD
$db_name = 'proj57';
=======
$db_name = 'proj59';
>>>>>>> 2294612aef44c1ea5d6baceb289483d15ab89ec6
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 ",
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
