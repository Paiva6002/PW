<section class="container">
    <div class="d-flex justify-content-center mt-4">
      <div class="title">
        <h2>Consulta Pagamento</h2>
      </div>
    </div>
    <hr>
    <section class="d-flex justify-content-center mt-5">
        <form action="content/pagamento_crud.php" method="POST">
          <input type="hidden" value="crud_pagamento">
          <div class="row d-flex justify-content-center ">
            <div class="col-10 d-flex justify-content-center flex-row gap-5">
              <div>
                <label for="nome" class="form-label">Código Pagemento</label>
                <input type="text" class="form-control form-input" name="codigo">
              </div>
              <div>
                <label for="codigo-cliente" class="form-label">Código Cliente</label>
                <input type="text" class="form-control form-input" name="codigo-cliente">
              </div>
              <div>
                <label for="nome-cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control form-input" name="nome-cliente">
              </div>
              <div>
                <label for="data-pagamento" class="form-label">Data Pagamento</label>
                <input type="text" class="form-control form-input" name="data-pagamento">
              </div>
              <div>
                <label for="valor-pagamento" class="form-label">Valor do Pagamento</label>
                <input type="text" class="form-control form-input" name="valor-pagamento">
              </div>
            </div>
            <div class="row d-flex justify-content-center">
              <div class="mt-3 d-flex flex-row gap-2 justify-content-center">
                <div class="button">
                  <input type="submit" value="Listar todos" name="acao" class="btn btn-primary">
                  <input type="submit" value="Atualizar" name="acao" class="btn btn-primary">
                </div>
                <div class="button">
                  <input type="submit" value="Consultar" name="acao" class="btn btn-primary">
                  <input type="submit" value="Excluir" name="acao" class="btn btn-primary">
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>
    </section>
