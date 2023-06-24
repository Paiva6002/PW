<?php 
    $nome = isset($_POST['nome'])? $_POST['nome']:0;
    $telefone = isset ($_POST['telefone'])? $_POST['telefone']:0;
    $dataCadastro = date('d/m/Y');
    if($nome != null && $telefone != null && $dataCadastro !=null){
    
    echo "Cadastro com sucesso!";
}
else { 
    echo "<div class= 'alert alert-danger'>Não pode ser vazio!</div>";
}
    
   ?>