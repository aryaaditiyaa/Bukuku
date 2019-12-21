<?php
include 'header-admin.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Produk</a>
            </li>
            <li class="breadcrumb-item active">List</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List Produk</div>
            <div class="card-body">
              
              <input type="button" class="btn_tambah" value="Tambah Produk" onclick="window.location='tambah-produk.php';"/>

              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>ISBN</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <?php include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from buku");
                  while($d = mysqli_fetch_array($data)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo "<img src='foto_buku/".$d['gambar']."' width='80' height='120'> "?></td>
                      <td><?php echo $d['isbn']; ?></td>
                      <td><?php echo $d['judul']; ?></td>
                      <td><?php echo $d['kategori']; ?></td>
                      <td>Rp. <?php echo $d['harga']; ?></td>
                      <td>
                        <a href="edit-produk.php?isbn=<?php echo $d['isbn']; ?>">Edit</a>
                        <a href="proses-hapus-produk.php?isbn=<?php echo $d['isbn']; ?>">Hapus</a>
                        
                      </td>
                    </tr>
                  </tbody>
                  <?php
                    }
                  ?>
                </table>
              </div>
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
