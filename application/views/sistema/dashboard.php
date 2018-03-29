  <div class="content-wrapper">
    <div class="container-fluid">
      <?php if ($this->session->flashdata('info')): ?>
      <div class="alert alert-<?=$this->session->flashdata('info')['type'];?>">
        <?=$this->session->flashdata('info')['text'];?>
      </div>
    <?php endif ?>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cog"></i>Latest projects</div>
          <div class="card-body">
            <div class="row">

              <?php foreach ($projects as $project): ?>
              <div class="col-4 my-2 p-1">
                <div class="card bg-success text-white">
                  <div class="card-header ">
                    <div class="card-title text-center">
                      <h5 class="text-center">
                        <?=$project['project']->title?>
                      </h5>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-justify">
                      <?=$project['project']->description?>
                    </p>
                    <div class="blockquote-footer text-white">
                      <i class="fa fa-user-circle"></i> <?=$project['project']->creator?>
                    </div>
                  </div>
                  <div class="card-footer">
                    <p class="lead text-center">
                      Participants
                    </p>
                    <ul class="list-group">
                      <?php foreach ($project['participants'] as $participants): ?>
                      <li class="list-group-item bg-success my-2">
                        <i class="fa fa-user"></i> <?=$participants->name?> <span class="badge badge-primary">visualize</span> <span class="badge badge-secondary">edit</span>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </div>

          </div>
      </div>
    </div>