<!DOCTYPE html>
<html>
<head>
<?php session_start();?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MakuEvent Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../img/header/logo.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color:#341c6c"><b style="font-weight: bold;">MakuEvent</b> Admin Panel</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">

      <form action="data/admin.php?giris" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="kadi" class="form-control" placeholder="Kullanıcı Adı">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="sifre" class="form-control" placeholder="Şifre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row"  >
          <div class="col-4" style="margin-left: 65%;">
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
          </div>
        </div>
        <?php
         if (!empty($_SESSION['hata'])) { ?>
           <p style="color: #000;font-weight: bold;">Kullanıcı Adı/Şifre Yanlış</p>
            <?php
         }
         elseif (!empty($_SESSION['hata1'])) { ?>
           <p style="color: #000;font-weight: bold;">Kullanıcı adı veya şifre alanı boş!</p>
          
          <?php } ?>
      </form>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
