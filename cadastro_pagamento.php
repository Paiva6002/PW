<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Academia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/logo-site.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/css/cadastro_pagamento.css">
</head>

<body>
    <div class="container-fluid">
        <div class="flex-container d-flex">
            <div class="flex-item item1 align-self-start"><a href="./index.php">Home</a></div>
            <div class="flex-item item2"><a href="./cadastrar.php">Cadastrar</a></div>
        </div>
        <div class='row'>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <?php
                $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
                $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 0;
                $dataCadastro = date('d/m/Y');
                if ($nome != null && $telefone != null) {
                    echo "<div class='alert alert-success mt-3 container-alert'>Cadastrado com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger container-alert'>Não pode ser vazio!</div>";
                }
                ?>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center right-side">
                <form action="consultar.php" method="post">
                    <div class="mb-3">
                        <div class="container-label"><label for="dataPagamento" class="form-label">Data Pagamento</label></div>
                        <input type="date" class="form-control form-input" name="dataPagamento">
                    </div>
                    <div class="container-label">
                        <label for="valorPagamento" class="form-label">Valor pagamento</label>
                    </div>
                    <input type="text" name="valorPagamento"  class="form-control form-input">
                    <div class="container-button">
                        <button type="submit" class="form-button btn btn-outline-warning mt-3">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



</html>