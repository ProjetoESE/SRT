  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="alert alert-success">
        Saudação, <strong><?=$this->session->get_userdata('usuario')['usuario']->nome?></strong>. Bem vindo de volta
      </div>

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cog"></i> Últimos projetos</div>
          <div class="card-body">
            <div class="row">
              <?php foreach ($projetos as $projeto): ?>
              <div class="col-4 my-2 p-1">
                <div class="card bg-success text-white">
                  <div class="card-header ">
                    <div class="card-title text-center">
                      <h5 class="text-center">
                        <?=$projeto->titulo?>
                      </h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt non commodi asperiores fuga, quos ratione esse totam laborum quam blanditiis.
                    </p>
                    <p class="text-right p-0 m-0">
                      <a href="#" class="btn btn-primary">detalhes</a>
                    </p>
                  </div>
                  <div class="card-footer">
                    <p class="lead text-center">
                      Participantes
                    </p>
                    <ul class="list-group">
                      <li class="list-group-item bg-success my-2">
                        <i class="fa fa-user"></i> Fulano <span class="badge badge-primary">vizualizar</span> <span class="badge badge-secondary">editar</span>
                      </li>
                      <li class="list-group-item bg-success my-2">
                        <i class="fa fa-user"></i> Fulano <span class="badge badge-primary">vizualizar</span> <span class="badge badge-secondary">editar</span>
                      </li>
                      <li class="list-group-item bg-success my-2">
                        <i class="fa fa-user"></i> Fulano <span class="badge badge-primary">vizualizar</span> <span class="badge badge-secondary">editar</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </div>

          </div>
      </div>
    </div>