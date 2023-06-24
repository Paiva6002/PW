<?php 
    $nome = isset($_POST['nome'])? $_POST['nome']:0;
    $telefone = isset ($_POST['telefone'])? $_POST['telefone']:0;
    $dataCadastro = date('Y/m/d');
    echo $nome . '<br>';
    echo $telefone . '<br>';
    echo $dataCadastro . '<br>';
    
   ?>