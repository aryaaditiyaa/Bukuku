  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Buku-ku</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

<?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
      echo'<script>alert("Login gagal, username dan password salah");window.location ="index.php";</script>';
    }else if($_GET['pesan'] == "logout"){
      echo'<script>alert("Logout berhasil");window.location ="index.php";</script>';
    }else if($_GET['pesan'] == "belum_login"){
      echo'<script>alert("Anda harus login untuk akses halaman admin");window.location ="index.php";</script>';
    }
  }
  ?>

  <body class="bg-dark">
    
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Admin Buku-ku Login</div>
        <div class="card-body">
          <form method="post" action="cek_login.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required="required" autofocus="autofocus">
                <label for="inputEmail">Username</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Login">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>