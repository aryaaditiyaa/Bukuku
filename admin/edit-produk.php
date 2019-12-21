<?php
include 'header-admin.php';
?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="list-produk.php">Produk</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Produk</div>
            <div class="card-body">

              <?php
              include 'koneksi.php';
              $isbn = $_GET['isbn'];
              $data = mysqli_query($koneksi,"select * from buku where isbn='$isbn'");
              while($d = mysqli_fetch_array($data)){
    ?>

          <form method="post" action="proses-edit-produk.php" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputISBN" class="form-control" name="isbn" placeholder="ISBN" required="required" value="<?php echo $d['isbn']; ?>" autofocus="autofocus">
                    <label for="inputISBN">ISBN</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputJudul" class="form-control" name="judul" placeholder="Judul" value="<?php echo $d['judul']; ?>" required="required">
                    <label for="inputJudul">Judul</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputJumlahHlm" class="form-control" name="jml_hlm" placeholder="Jumlah Halaman" value="<?php echo $d['jml_hlm']; ?>" required="required">
                    <label for="inputJumlahHlm">Jumlah Halaman</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputPenerbit" class="form-control" name="penerbit" placeholder="Penerbit" value="<?php echo $d['penerbit']; ?>" required="required">
                    <label for="inputPenerbit">Penerbit</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="inputTglTer" class="form-control" name="tgl_terbit" placeholder="Tanggal Terbit" value="<?php echo $d['tgl_terbit']; ?>" required="required">
                    <label for="inputTglTer">Tanggal Terbit</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputBerat" class="form-control" name="berat" placeholder="Berat" value="<?php echo $d['berat']; ?>" required="required">
                    <label for="inputBerat">Berat (kg)</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <select class="combo-box" name="kategori">
                      <option value="<?php echo $d['kategori']; ?>"><?php echo $d['kategori']; ?></option>
                      <option value="Komik">Komik</option>
                      <option value="Teknologi">Teknologi</option>
                      <option value="Memasak">Memasak</option>
                      <option value="Travel">Travel</option>
                      <option value="Anak-anak">Anak-anak</option>
                      <option value="Kamus">Kamus</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputHarga" class="form-control" name="harga" placeholder="Harga" value="<?php echo $d['harga']; ?>" required="required">
                    <label for="inputHarga">Harga</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <textarea cols="4" rows="6" id="inputDesk" class="form-control" name="deskripsi" required="required"><?php echo $d['deskripsi']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">

                    <input type="file" id="inputGambar" class="form-control" name="gambar" placeholder="Gambar">
                    <label for="inputGambar">Gambar</label>
                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
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
