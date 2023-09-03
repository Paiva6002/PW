<div class="container">
  <div class="d-flex justify-content-center mt-4">
    <div class="title">
      <h2>Cadastro</h2>
    </div>
  </div>
  <hr>
  <div class="bloco-main-cadastrar row d-flex justify-content-center align-items-center">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <!-- Coluna da Equerda -->
      <img src="./assets/images/logo.svg" height="400px">
    </div>

    <div class="col-6 d-flex flex-column">
      <div class="section-form">
        <form action="index.php" method="GET">
          <input type="hidden" name="page" value="cadastrar_cliente">
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
      </div>
    </div>
  </div>
</div>