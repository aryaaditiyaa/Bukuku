<?php
include 'header-admin.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="list-transaksi-selesai.php">Transaksi Selesai</a>
            </li>
            <li class="breadcrumb-item active">List</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              List Transaksi Selesai</div>
            <div class="card-body">
              <a <a href="javascript:printDiv('table');"><input type="" class="btn btn-cetak-struk" value="Cetak Laporan Transaksi"></a>
              <div class="table-responsive" id="table">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Transaksi</th>
                      <th>Nama Pembeli</th>
                      <th>Telepon</th>
                      <th>Tanggal Order</th>
                      <th>Jam Order</th>
                      <th>Total</th>
                      <th>Status</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <?php include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi,"select * from transaksi_selesai order by 9 desc");
                  while($d = mysqli_fetch_array($data)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['id_transaksi']; ?></td>
                      <td><?php echo $d['nama_pembeli']; ?></td>
                      <td><?php echo $d['telepon']; ?></td>
                      <td><?php echo $d['tgl_order']; ?></td>
                      <td><?php echo $d['jam_order']; ?></td>
                      <td>Rp. <?php echo $d['total']; ?></td>
                      <td><?php echo $d['status']; ?></td>
                      <td>
                        <a href="detail-transaksi-selesai.php?id_transaksi=<?php echo $d['id_transaksi']; ?>">Detail</a>
                        
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

    <textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_struk" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_struk"].document.title = document.title;
 window.frames["print_struk"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_struk"].window.focus();
 window.frames["print_struk"].window.print();
}
</script>

  </body>

</html>
