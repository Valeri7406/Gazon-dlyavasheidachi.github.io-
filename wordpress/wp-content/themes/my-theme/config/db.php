<?php
    $host = 'localhost';
    $username = 'timofef5_wordpre';
    $password = 'iua*wX3&';
    $database = 'timofef5_wordpre';

    // Пример PDO:
    // $dsn = 'mysql:host=localhost;dbname=to-do';
	// $pdo = new PDO($dsn, 'root', '');
    
    $dsn = 'mysql:host=localhost;dbname=to-do';
	$pdo = new PDO($dsn, 'root', '');

    $conn = new mysqli($host, $username,  $password, $database);
    if ($conn->connect_error) {
        die("Ошибка подключения к БД: " . $conn-connect_error);
    }
?>