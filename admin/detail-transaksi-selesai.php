<?php
include 'header-admin.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="list-order-masuk.php">Transaksi Selesai</a>
            </li>
            <li class="breadcrumb-item active">Detail</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Detail Transaksi Selesai</div>
              <form method="post" action="proses-update-order.php" enctype="multipart/form-data">
            <div class="card-body">
          <div class="table-responsive">
                <table class="" id="dataTable" width="70%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Jumlah</th>
                      <th></th>
                    </tr>
                  </thead>
                  <?php include 'koneksi.php';
                  $no = 1;
                  $id_transaksi = $_GET['id_transaksi'];
                  $data = mysqli_query($koneksi,"select * from transaksi_selesai where id_transaksi='$id_transaksi'");
                  while($d = mysqli_fetch_array($data)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['judul']; ?></td>
                      <td><?php echo $d['jumlah']; ?></td>
                    </tr>
                  </tbody>
                  
                </table>

                <br>
                <h6>ID Transaksi: <b><?php echo $d['id_transaksi']; ?></b></h6>
                <h6>Nama Pembeli: <b><?php echo $d['nama_pembeli']; ?></b></h6>
                <h6>Alamat: <b><?php echo $d['alamat']; ?></b></h6>
                <h6>Telepon: <b><?php echo $d['telepon']; ?></b></h6>
                <h6>Tanggal Order: <b><?php echo $d['tgl_order']; ?></b></h6>
                <h6>Jam Order: <b><?php echo $d['jam_order']; ?></b></h6>
                <h6>Total yang harus dibayar: <b>Rp. <?php echo $d['total']; ?></b></h6>
                <h6>Status Order: <b><?php echo $d['status']; ?></b></h6>
              </div>
            <br>
            <input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>">
            <input type="hidden" name="judul" value="<?php echo $d['judul']; ?>">
            <input type="hidden" name="jumlah" value="<?php echo $d['jumlah']; ?>">
            <input type="hidden" name="nama_pembeli" value="<?php echo $d['nama_pembeli']; ?>">
            <input type="hidden" name="alamat" value="<?php echo $d['alamat']; ?>">
            <input type="hidden" name="telepon" value="<?php echo $d['telepon']; ?>">
            <input type="hidden" name="tgl_order" value="<?php echo $d['tgl_order']; ?>">
            <input type="hidden" name="jam_order" value="<?php echo $d['jam_order']; ?>">
            <input type="hidden" name="total" value="<?php echo $d['total']; ?>">
            <input type="hidden" name="status" value="<?php echo $d['status']; ?>">
                  
          </form>
            </div>
          </div>

        </div>
                  <?php
                  }
                  ?>
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
