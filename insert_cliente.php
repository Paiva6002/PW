<?php 
include 'conexao.php';
include 'cadastro_pagamento.php';

// Declaração SQL a ser executada
$sql = "INSERT INTO cliente  VALUES ($codigo, '$nome', $telefone, $dataCadastro)";

// Executa a declaração SQL
if ($connection->query($sql) === true) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $connection->error;
}


?>