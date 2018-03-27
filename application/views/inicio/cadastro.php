<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url('assets/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url('assets/')?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url('assets/')?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Cadastre-se</div>
      <div class="card-body">
        <form method="post" action="<?=base_url('usuario/cadastrar')?>">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">Primeiro nome</label>
                <input class="form-control" name="nome" type="text" aria-describedby="nameHelp" placeholder="Digite seu primeiro nome">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Segundo nome</label>
                <input class="form-control" name="sobrenome" type="text" aria-describedby="nameHelp" placeholder="Digite seu sobrenome">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Digite seu email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Profissão</label>
            <input class="form-control" name="profissao" type="text" aria-describedby="emailHelp" placeholder="Qual a sua profissão">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <input class="form-control" name="senha" type="password" placeholder="Escolha uma senha">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirme sua senha</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Redigite sua senha">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Registrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url()?>">Login</a>
          <a class="d-block small" href="forgot-password.html">Esqueci minha senha</a>
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
