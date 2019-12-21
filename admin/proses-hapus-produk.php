<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$isbn = $_GET['isbn'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from buku where isbn='$isbn'");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Hapus data berhasil");window.location ="list-produk.php";</script>';
 
?>
