<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login App V1</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <br>
    <div class="card-header text-center">
      <h1>LOGIN APP</h1>
    </div>
    <br>
    <div class="card-body">

      <form action="proses-login.php" id="formLogin" method="post">
        <div class="input-group mb-3">
          <input type="number" class="form-control" id="nik" name="nik" placeholder="masukkan nik...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password ...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-light fa-lock"></span>
            </div>
          </div>
        </div>
       
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="submit"><b>LOGIN</b></button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <br>
      <div class="text-center">
        <span><b>version 1.0.0</b></span>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

<script>
  $(function () {
  $('#formLogin').validate({
    rules: {
      nik: {
        required: true,
        minlength: 16,
        maxlength: 16,
      },
      password: {
        required: true,
      },
    },
    messages: {
      nik: {
        required: "Mohon diisi nik nya!",
        minlength: "Minimal 16 angka",
        maxlength: "Maksimal 16 angka",
      },
      password: {
        required: "Mohon diisi password nya!",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.input-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
