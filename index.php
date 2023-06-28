<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Academia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="shortcut icon" href="./assets/images/logo-site.ico" type="image/x-icon" />
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <?php
  session_start();

  include 'content/database/conexao.php';
  ?>

  <?php
  include 'header/header.php';
  ?>

  <?php
  $page = isset($_GET['page']) ? $_GET['page'] : null;

  if ($page == 'cadastrar') {
    include 'content/cadastrar.php';
  }

  if ($page == 'planos') {
    include 'content/planos.php';
  }

  if ($page == 'consultas') {
    include 'content/consultas.php';
  }

  if ($page == 'consulta_cliente') {
    include 'content/consulta_cliente.php';
  }

  if ($page == 'consulta_pagamento') {
    include 'content/consulta_pagamento.php';
  }

  if ($page == 'cadastrar_cliente') {
    $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
    $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
    $dataCadastro = date('d/m/Y');

    if ($nome != null && $telefone != null) {
      $sql = "INSERT INTO cliente  VALUES (0, '$nome', '$telefone', '$dataCadastro')";

      if ($connection->query($sql) === true) {
        echo "<div class='alert alert-success'>Dados inseridos com sucesso!</div>";
      } else {
        echo '<div class="alert alert-danger">Falha ao cadastrar</div>' . $connection->error;
      }
    } else {
      echo '<div class="alert alert-danger">Campo(s) Vazio(s)</div>';
    }
  }

  if ($page == 'pagamento_cliente') {
    $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
    $plano = isset($_GET['plano']) ? $_GET['plano'] : null;
    $dataCadastro = date('d/m/Y');

    if ($nome != null && $plano != null) {
      $sql = "INSERT INTO pagamento VALUES (0, 0, '$nome', '$dataCadastro', $plano)";

      if ($connection->query($sql) === true) {
        echo "<div class='alert alert-success'>Dados inseridos com sucesso!</div>";
      } else {
        echo '<div class="alert alert-danger">Falha ao cadastrar</div>' . $connection->error;
      }
    } else {
      echo '<div class="alert alert-danger">Campo(s) Vazio(s)</div>';
    }
  }

  
  ?>

  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-6 d-flex flex-column align-items-center">
        <h1 class="text-center mt-5">"Quem cresce natural é planta"</h1>
        <img src="./assets/images/logo.svg" class="left-side__brand   img-fluig" height="400px" width="400px" />
      </div>
    </div>
  </div>
  </div>

</body>
</html>