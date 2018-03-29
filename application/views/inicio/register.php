<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cadastro</title>
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
      <div class="card-header">Register</div>
      <div data-alert class="alert text-center invisible">
        
      </div>
      <div class="card-body">
        <form method="post" action="<?=base_url('user/register')?>">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First Name</label>
                <input required="required" class="form-control" name="name" type="text" aria-describedby="nameHelp" placeholder="Enter your first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last Name</label>
                <input required="required" class="form-control" name="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter your last name">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input required="required" class="form-control" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter your email">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Profession</label>
            <input required="required" class="form-control" name="profession" type="text" aria-describedby="emailHelp" placeholder="Enter your profession">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input required="required" class="form-control" name="password" type="password" placeholder="Choose your password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm your password</label>
                <input required="required" class="form-control" id="exampleConfirmPassword" type="password" placeholder="Retype your password">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?=base_url('index.php')?>">Login</a>
          <a class="d-block small" href="forgot-password.html">I forgot my password</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('assets/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <script>
    $('button').on('click', (origin)=>{
      origin.preventDefault();
      $email = $('[aria-describedby="emailHelp"]').val();
      
      if (!emailValidate($email)) {
        return
      }

      $.ajax({
        url: 'searchemail',
        method: 'POST',
        data: {
          'email': $email
        }
      })
      .done(function(data) {
        var data = JSON.parse(data);
        if (data.status) {
          $alert = $("[data-alert]");
          $alert.addClass('alert-danger');
          $alert.html('This email has already been registered');
          $alert.removeClass('invisible');
        }else{
          $("form").submit();
        }
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
      
    });



    function emailValidate(email) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(email);
}
  </script>
</body>

</html>
