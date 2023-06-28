<section class="container">
  <div class="d-flex justify-content-center mt-4">
    <div class="title">
      <h2>Consulta Cliente</h2>
    </div>
  </div>
  <hr>
  <section class="d-flex justify-content-center mt-5">
    <form action="content/cliente_crud.php" method="POST">
      <div class="row d-flex justify-content-center ">
        <div class="col-10 d-flex justify-content-center flex-row gap-5">
          <div>
            <label for="codigo" class="form-label">Código Cliete</label>
            <input type="text" class="form-control form-input" name="codigo">
          </div>
          <div>
            <label for="nome-cliente" class="form-label">Nome</label>
            <input type="text" class="form-control form-input" name="nome-cliente">
          </div>
          <div>
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control form-input" name="telefone">
          </div>
          <div>
            <label for="data-cadastro" class="form-label">Data de Cadastro</label>
            <input type="text" class="form-control form-input" name="data-cadastro">
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="mt-3 d-flex flex-row gap-2 justify-content-center">
            <div class="button">
              <input type="submit" value="Listar todos" name="acao" class="btn btn-primary">
              <input type="submit" value="Atualizar" name="acao" class="btn btn-primary">
            </div>
            <div class="button">
              <input type="submit" value="Excluir" name="acao" class="btn btn-primary">
              <input type="submit" value="Consultar" name="acao" class="btn btn-primary">
            </div>
            <div class="button">
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
</section>