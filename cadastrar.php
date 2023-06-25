<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/cadastro.css">
</head>

<body>
  <div class="container-fluid">
    <div class="header d-flex">
      <div class="flex-item item1 align-self-start">
        <a href="./index.php">Home</a>
      </div>

      <div class="w-100 d-flex justify-content-end">
        <div class="flex-item item2">
          <a href="./planos.php">Planos</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center left-side">
        <!-- Coluna da Equerda -->
        <img src="./assets/images/logo.svg" class="left_side__brand img-fluig" height="500px" width="500px">
      </div>

      <div class="col-6 d-flex flex-column justify-content-center align-items-center right-side">
        <form action="cadastrar.php" method="post">
          <div class="mb-3">
            <div class="container-label"><label for="nome" class="form-label ">Nome</label>
            </div>
            <input type="text" class="form-control form-input" name="nome">
          </div>
          <div class="container-label">
            <label for="telefone" class="form-label">Telefone</label>
          </div>
          <input type="tel" name="telefone" plac class="form-control form-input">
          <div class="container-button"><button type="submit"
              class="form-button btn btn-outline-warning mt-3">Cadastrar</button>
          </div>
        </form>

        <div class="col-4 d-flex justify-content-center mt-3">
          <?php
          $nome = isset($_POST['nome']) ? $_POST['nome'] : 0;
          $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 0;
          $dataCadastro = date('d/m/Y');
          if ($nome != null && $telefone != null && $dataCadastro != null) {
            echo "<div class= 'alert alert-success'>Cadastrado com sucesso!</div>";
          } else {
            echo "<div class= 'alert alert-danger'>Campo(s) vazio(s)</div>";
          }
          ?>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>