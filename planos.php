<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Planos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

  <section class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-8">
        <table class="table">
          <thead align="center">
            <tr>
              <th>Planos</th>
              <th>Valor p/ Mês</th>
            </tr>
          </thead>
          <tbody align="center">
            <tr class="table-active">
              <td>Diária</td>
              <td>R$ 40,00</td>
            </tr>
            <tr>
              <td>Mensal</td>
              <td>R$ 80,00</td>
            </tr>
            <tr>
              <td>Bimestral</td>
              <td>R$ 95,00</td>
            </tr>
            <tr>
              <td>Semestral</td>
              <td>R$ 110,00</td>
            </tr>
            <tr>
              <td>Anual</td>
              <td>R$ 150,00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <form action="planos.php">
          <div>
            <label></label>
            <input type="text">
          </div>
          <div>
          </div>
        </form>

      </div>
    </div>
  </section>
  
  <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
    <ul class="dropdown-menu">
      <li>si</li>
      <li>no</li>
      <li>maybe</li>
    </ul>
  </div>
</body>

</html>