<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
      <?php if ($this->session->flashdata('msg')): ?>
        <div class="alert alert-<?=$this->session->flashdata('msg')['type'];?> my-4">
          <p class="text-center p-0 m-0">
            <?=$this->session->flashdata('msg')['text'];?>
          </p>
        </div>
      <?php endif ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Login</div>
      <div class="card-body">
        <form method="post" name="form-login" action="<?=base_url('index.php')?>/auth/login">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            
            <input required="" class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required="" name="senha" class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input name="remember-password" class="form-check-input" type="checkbox">remember password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" >Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url('index.php/sistema/register')?>">Register</a>
          <a class="d-block small" href="#">I forgot my password!</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
