<?php
include 'database/conexao.php';
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">




<section class="container">
  <div class="d-flex justify-content-center">
      <div>
        <?php
        $codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;
        $codigoCliente = isset($_POST['codigoClientee']) ? $_POST['codigoCliente'] : null;
        $nomeCliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
        $dataPagamento = isset($_POST['dataPagamento']) ? $_POST['dataPagamento'] : null;
        $valorPagamento = isset($_POST['valorPagamento']) ? $_POST['valorPagamento'] : null;
        $acao = isset($_POST['acao']) ? $_POST['acao'] : null;
        if ($acao == 'Excluir') {
          $sql = "DELETE FROM pagamento WHERE codigo = $codigo";
          if ($connection->query($sql) === true) {
            echo "<div class='alert alert-success'>Registro apagado com sucesso!</div>";
          } else {
            echo "<div class='alert alert-warning'>Erro ao apagar registro: </div>" . $connection->error;
          }
        }
        if ($acao == 'Atualizar') {
          $sql = "UPDATE pagamento SET codigoCliente = '$codigoCliente', nomeCliente = '$nomeCliente', dataPagamento = '$dataPagamento', valorPagamento = '$valorPagamento' WHERE codigo = $codigo;";
          if ($connection->query($sql) === true) {
            echo "Dados atualizados com sucesso.";
          } else {
            echo "<div class='alert alert-warning'>Erro ao atualizar dados: </div>" . $connection->error;
          }
        }
        if ($acao == 'Consultar') {
          if ($codigo != null) {
            $sql = "SELECT * FROM pagamento WHERE codigo = $codigo";
          }
          if ($codigoCliente != null) {
            $sql = "SELECT * FROM pagamento WHERE nome LIKE '$codigoCliente'";
          }
          if ($nomeCliente != null) {
            $sql = "SELECT * FROM pagamento WHERE nome LIKE '$nomeCliente'";
          }
          if ($dataPagamento != null) {
            $sql = "SELECT * FROM pagamento WHERE dataCadastro = $dataPagamento";
          }
          if ($valorPagamento != null) {
            $sql = "SELECT * FROM pagamento WHERE telefone = $valorPagamento";
          }
          $result = $connection->query($sql);
          if ($result->num_rows > 0) {
            echo "<table class='table table-bordered w-25'>";
            echo "<tr align='center' class='table-active'>
                      <th>Codigo</th>
                      <th>Cod. Cliente</th>
                      <th>Nome Cliente</th>
                      <th>Data Pag.</th>
                      <th>Valor Pag.</th>
                    </tr>
                    <tbody align='center'>
                      ";
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["codigo"] . '<br>' . "</td>";
              echo "<td>" . $row["codigoCliente"] . '<br>' . "</td>";
              echo "<td>" . $row["nomeCliente"] . '<br>' . "</td>";
              echo "<td>" . $row["dataPagamento"] . '<br>' . "</td>";
              echo "<td>" . $row["valorPagamento"] . '<br>' . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<div class='alert alert-warning'>Nenhum registro encontrado!</div>";
          }
          echo "</tbody>";
          echo "<table>";
        }
        if ($acao == 'Listar todos') {
          $sql = "SELECT * FROM pagamento";
          $result = $connection->query($sql);
          if ($result->num_rows > 0) {
            echo "<table class='table table-bordered w-25'>";
            echo "<tr align='center' class='table-active'>
                      <th>Codigo</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Data Cad.</th>
                      <th>Val. Pag.</th>
                    </tr>
                    <tbody align='center'>
                      ";
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["codigo"] . '<br>' . "</td>";
              echo "<td>" . $row["codigoCliente"] . '<br>' . "</td>";
              echo "<td>" . $row["nomeCliente"] . '<br>' . "</td>";
              echo "<td>" . $row["dataPagamento"] . '<br>' . "</td>";
              echo "<td>" . $row["valorPagamento"] . '<br>' . "</td>";
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
</section>