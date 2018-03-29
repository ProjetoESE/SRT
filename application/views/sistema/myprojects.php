  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cog"></i> My projects</div>
          <div class="card-body">
            <div class="row">
              <?php foreach ($myprojects as $my_projects): ?>
              <div class="col-4 my-2 p-1">

                <div class="card bg-success text-white">
                  <div class="card-header ">
                    <div class="card-title text-center">
                      <h5 class="text-center">
                       <?=$my_projects['project']->titulo?>
                      </h5>
                      <a title="Delete" href="delete/<?=$my_projects['project']->id?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> <a title="Edit" href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <p class="text-justify">
                      <?=$my_projects['project']->descricao?>
                    </p>
                    <hr>
                    <div class="text-center">
                      Add member
                    </div>
                    <form action="invite" method="post">
                      <input type="email" name="email_member" class="form-control">
                      <input name="project_id" type="hidden" value="<?=$my_projects['project']->id?>">
                      <button class="btn btn-primary mt-1">add member</button>
                    </form>
                  </div>
                  <div class="card-footer">
                    <p class="lead text-center">
                      Participants
                    </p>
                    <ul class="list-group">
                      <?php foreach ($my_projects['participants'] as $participant): ?>
                      <li class="list-group-item bg-success my-2">
                        <i class="fa fa-user"></i> <?=$participant->nome?> <span class="badge badge-primary">visualize</span> <span class="badge badge-secondary">edit</span>
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
 <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content p-4">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Invite member</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Insert the email for the invitation</div>
          <div class="input-group my-3">
            <input type="text" class="form-control" id="email">
            
          </div>
          <button class="btn btn-primary" id="invite">
              <i class="fa fa-plus"></i> Invite User
            </button>
        </div>
      </div>
    </div>