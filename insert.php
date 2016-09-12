<?php

$host = "localhost";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

$data = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_UNIQUE);
var_dump($data) ;

$connection->exes('INSERT INTO users VALUES ()')




