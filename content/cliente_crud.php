<?php
include 'database/conexao.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



<section class="container">
    <div class="d-flex justify-content-center">
      <div class="">
        <?php
            $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
            $nomeCliente = isset($_POST['nome-cliente']) ? $_POST['nome-cliente'] : null;
            $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;
            $dataCadastro = isset($_POST['data-cadastro']) ? $_POST['data-cadastro'] : null;
            $acao = isset($_POST['acao']) ? $_POST['acao'] : null;
            if ($acao == 'Excluir') {
              $sql = "DELETE FROM cliente WHERE codigo = $codigo";
              if ($connection->query($sql) === true) {
                echo "<div class='alert alert-success'>Registro apagado com sucesso!</div>";
              } else {
                echo "<div class='alert alert-warning'>Erro ao apagar registro: </div>" . $connection->error;
              }
            }
            if ($acao == 'Atualizar') {
              $sql = "UPDATE cliente SET nome = '$nomeCliente', telefone = '$telefone', dataCadastro = '$dataCadastro' WHERE codigo = $codigo;";
              if ($connection->query($sql) === true) {
                echo "Dados atualizados com sucesso.";
              } else {
                echo "<div class='alert alert-warning'>Erro ao atualizar dados: </div>" . $connection->error;
              }
            }
            if ($acao == 'Consultar') {
              if ($codigo != null) {
                $sql = "SELECT * FROM cliente WHERE codigo = $codigo";
              }
              if ($nomeCliente != null) {
                $sql = "SELECT * FROM cliente WHERE nome LIKE '$nomeCliente'";
              }
              if ($dataCadastro != null) {
                $sql = "SELECT * FROM cliente WHERE dataCadastro = $dataCadastro";
              }
              if ($telefone != null) {
                $sql = "SELECT * FROM cliente WHERE telefone = $telefone";
              }
              $result = $connection->query($sql);
              if ($result->num_rows > 0) {
                echo "<table class='table table-bordered w-25'>";
                echo "<tr align='center' class='table-active'>
                      <th>Codigo</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Data Cad.</th>
                    </tr>
                    <tbody align='center'>
                      ";
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["codigo"] . '<br>' . "</td>";
                  echo "<td>" . $row["nome"] . '<br>' . "</td>";
                  echo "<td>" . $row["telefone"] . '<br>' . "</td>";
                  echo "<td>" . $row["dataCadastro"] . '<br>' . "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<div class='alert alert-warning'>Nenhum registro encontrado!</div>";
              }
              echo "</tbody>";
              echo "<table>";
            }
            if ($acao == 'Listar todos') {
              $sql = "SELECT * FROM cliente";
              $result = $connection->query($sql);
              if ($result->num_rows > 0) {
                echo "<table class='table table-bordered w-25'>";
                echo "<tr align='center' class='table-active'>
                      <th>Codigo</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Data Cad.</th>
                    </tr>
                    <tbody align='center'>
                      ";
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["codigo"] . '<br>' . "</td>";
                  echo "<td>" . $row["nome"] . '<br>' . "</td>";
                  echo "<td>" . $row["telefone"] . '<br>' . "</td>";
                  echo "<td>" . $row["dataCadastro"] . '<br>' . "</td>";
                  echo "</tr>";
                }
              } else {
                echo "<div class='alert alert-warning'>Nenhum registro encontrado!</div>";
              }
              echo "</tbody>";
              echo "<table>";
            }
            ?>
      </div>
    </div>
  </div>
</section>