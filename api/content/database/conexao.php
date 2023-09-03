<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'academia';

$connection = new mysqli($host, $user, $password, $database);

if($connection->connect_error){
    die('Falha de conexao: '. $connection->connect_error);
}
?>