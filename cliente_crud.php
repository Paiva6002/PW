<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cliente Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="shortcut icon" href="./assets/images/logo-site.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/css/cliente_crud.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="flex-container d-flex">
            <div class="flex-item item1 align-self-start"><a href="./index.php">Home</a></div>
            <div class="flex-item item2"><a href="./cadastrar.php">Cadastrar</a></div>
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center left-side">
                <?php 
                $dataPagamento = isset($_POST["dataPagamento"]) ? $_POST["dataPagamento"] :0;
                $valorPagamento = isset($_POST["dataPagamento"]) ? $_POST["dataPagamento"] :0;
                if ($dataPagamento != null && $valorPagamento != null) {
                    echo "<div class='alert alert-success mt-3 container-alert'>Pagamento cadastrado com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger container-alert'>Não pode ser vazio!</div>";
                }
                include 'cadastro_pagamento.php';

                ?>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center right-side">
                <form action="cliente_crud.php" method="post">
                    <div class="container-label"><label for="codigo" class="form-label">Codigo</label></div>
                    <input type="text" name="codigo" class="form-control form-input">
                    <div class="container-label">
                        <label for="telefone" class="form-label">Telefone</label>
                    </div>
                    <input type="tel" name="telefone"  class="form-control form-input">
                    <div class="container-label"><label for="dataCadastro">Data Cadastro</label></div>
                    <input type="date" name="dataCadastro" class="form-control form-input">
                    <div class="container-input-submit"><input type="submit" value="inserir" name="acao"></div>
                    <div class="container-input-submit"><input type="submit" value="atualizar" name="acao"></div>
                    <div class="container-input-submit"><input type="submit" value="deletar" name="acao"></div>
                    <div class="container-input-submit"><input type="submit" value="consultar" name="acao"></div>
                    <div class="container-input-submit"><input type="submit" value="selectAll" name="acao"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>