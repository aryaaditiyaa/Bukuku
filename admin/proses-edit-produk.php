<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$jml_hlm = $_POST['jml_hlm'];
$penerbit = $_POST['penerbit'];
$tgl_terbit = $_POST['tgl_terbit'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$gambar;
  
  // Set path folder tempat menyimpan fotonya
  $path = "foto_buku/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM buku WHERE isbn='".$isbn."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("foto_buku/".$data['gambar'])) // Jika foto ada
      unlink("foto_buku/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE buku SET isbn='".$isbn."', judul='".$judul."', jml_hlm='".$jml_hlm."', penerbit='".$penerbit."', tgl_terbit='".$tgl_terbit."', berat='".$berat."', deskripsi='".$deskripsi."', harga='".$harga."', kategori='".$kategori."', gambar='".$fotobaru."' WHERE isbn='".$isbn."'";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo'<script>alert("Edit data berhasil");window.location ="list-produk.php";</script>'; // Redirect ke halaman list-produk.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit-produk.php'>Kembali ke Form Edit</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='edit-produk.php'>Kembali ke Form Edit</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE buku SET isbn='".$isbn."', judul='".$judul."', jml_hlm='".$jml_hlm."', penerbit='".$penerbit."', tgl_terbit='".$tgl_terbit."', berat='".$berat."', deskripsi='".$deskripsi."', harga='".$harga."', kategori='".$kategori."' WHERE isbn='".$isbn."'";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo'<script>alert("Edit data berhasil");window.location ="list-produk.php";</script>'; // Redirect ke halaman list-produk.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit-produk.php'>Kembali Ke Form Edit</a>";
  }
}
?>