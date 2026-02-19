<?php
$host = '127.0.0.1';
$user = 'root'; 
$pass = ''; 
$db   = 'sistema_login';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>