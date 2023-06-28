<section class="container">
  <div class="d-flex justify-content-center mt-4">
    <div class="title">
      <h2>Planos</h2>
    </div>
  </div>
  <hr>
  <div class="row d-flex justify-content-center">
    <div class="col-8">
      <table class="table">
        <thead align="center">
          <tr class="table-active">
            <th>Planos</th>
            <th>Valor p/ Mês</th>
          </tr>
        </thead>
        <tbody align="center">
          <tr>
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
    <div class="row mt-5">
      <div class="d-flex justify-content-center">
        <div>
          <h2>Pagamento</h2>
        </div>
      </div>
      <hr>
      <form action="index.php" class="d-flex align-items-center flex-column">
        <input type="hidden" name="page" value="pagamento_cliente">
        <div class="col-4 d-flex flex-column">
          <label class="form-label">Nome Cadastrado</label>
          <input type="text0" class="form-control" name="nome">
        </div>
        <div class="col-4 mt-3">
          <div class=" input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Planos</label>
            <select class="form-select" id="inputGroupSelect01" name="plano">
              <option selected>Escolha...</option>
              <option value="40">Diária</option>
              <option value="80">Mensal</option>
              <option value="95">Bimestral</option>
              <option value="110">Semestral</option>
              <option value="150">Anual</option>
            </select>
          </div>
        </div>
        <div class="">
          <button type="submit" class="btn btn-primary">Efetuar Pagamento</button>
        </div>
      </form>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>