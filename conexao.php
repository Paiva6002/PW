<?php
$host = 'localhost';
$user = 'root';
$database = 'academia';
$password = '';

$connection = new mysqli($host, $user, $password, $database);

if($connection->connect_error){
    die('Falha de conexao: '. $connection->connect_error);
}
?>