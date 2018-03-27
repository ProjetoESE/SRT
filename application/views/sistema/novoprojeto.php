  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cog"></i> Novo projeto</div>
          <div class="card-body">
            <div class="row">

              <div class="col-12">
                <form action="salvaprojeto" method="post">
                  <div class="form-gorup">
                    <label for="titulo">Título</label>
                    <input name="titulo" placeholder="Título" type="text" class="form-control" id="titulo">
                  </div>

                  <div class="form-gorup">
                    <label for="titulo">Descrição</label>
                    <textarea name="descricao" rows="3" placeholder="Título" type="text" class="form-control" id="titulo"></textarea>
                  </div>
                  <button type="submit" class="btn mt-4 btn-success">
                    salvar
                  </button>
                </form>
              </div>
            </div>

          </div>
      </div>
    </div>