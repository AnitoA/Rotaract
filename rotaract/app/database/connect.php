<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'rotaract';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Грешка във връзката с базата данни: ' . $conn->connect_error);
}
