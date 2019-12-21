<?php
include 'header-admin.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="list-admin.php">Admin</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Admin</div>
            <div class="card-body">

              <?php
              include 'koneksi.php';
              $id_admin = $_GET['id_admin'];
              $data = mysqli_query($koneksi,"select * from admin where id_admin='$id_admin'");
              while($d = mysqli_fetch_array($data)){
    ?>
          <form method="post" action="proses-edit-admin.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="hidden" name="id_admin" value="<?php echo $id_admin; ?>">
                    <input type="text" id="username" class="form-control" placeholder="Username" name="username" required="required" value="<?php echo $d['username']; ?>" autofocus="autofocus">
                    <label for="username">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" required="required" value="<?php echo $d['nama']; ?>">
                    <label for="nama">Nama</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required="required" value="<?php echo $d['password']; ?>">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="telepon" class="form-control" name="telepon" placeholder="Telepon" required="required" value="<?php echo $d['telepon']; ?>">
                    <label for="telepon">Telepon</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Update">
          </form>
          <?php
        }
        ?>
            </div>
          </div>
    

        </div>
        <!-- /.container-fluid -->

        <?php
        include 'footer-admin.php'
        ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php
    include 'menu-logout.php';
    ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>

  </body>

</html>
