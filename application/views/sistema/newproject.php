  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cog"></i> New project</div>
          <div class="card-body">
            <div class="row">

              <div class="col-12">
                <form action="projectsave" method="post">
                  <div class="form-gorup">
                    <label for="title">Title</label>
                    <input name="title" placeholder="Título" type="text" class="form-control" id="title">
                  </div>

                  <div class="form-gorup">
                    <label for="title">Descrição</label>
                    <textarea name="description" rows="3" placeholder="Título" type="text" class="form-control" id="title"></textarea>
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