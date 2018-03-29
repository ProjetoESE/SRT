  <div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-circle"></i>My Profile</div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-10 mx-auto col-xs-12">
                <h1>
                  Olá, <span class="text-success"><?=$user->name?></span>!
                </h1>
                <form action="atualizaperfil" method="post">
                  <div class="row">
                    <div class="col-6 form-group py-3">
                        <input name="name" type="text" class="form-control" value="<?=$user->name?>">
                    </div>
                    <div class="col-6 form-group py-3">
                      <input name="lastname" type="text" class="form-control" value="<?=$user->lastname?>">
                    </div>

                  </div>

                  <div class="form-group">
                      <input name="email" value="<?=$user->email?>" type="email" class="form-control">
                    </div>
                     <div class="form-group">
                      <input name="profission" value="<?=$user->profission?>" type="text" class="form-control">
                    </div>

                    <input type="submit" value="update" class="btn btn-primary">

                </form>
              </div>
              </div>

          </div>
      </div>
    </div>