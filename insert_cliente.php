<?php 
include 'conexao.php';
$codigo = isset($_POST['codigo'])?$_POST['codigo']:0;
$nome = isset($_POST['nome'])?$_POST['nome']:0;
$telefone = isset($_POST['telefone'])?$_POST['telefone']:0;
$dataCadastro = isset($_POST['dataCadastro'])?$_POST['dataCadastro']:0;

// Declaração SQL a ser executada
$sql = "INSERT INTO cliente  VALUES ($codigo, '$nome', $telefone, $dataCadastro)";

// Executa a declaração SQL
if ($connection->query($sql) === true) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $connection->error;
}


?>