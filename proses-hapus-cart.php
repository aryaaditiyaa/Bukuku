<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$isbn = $_GET['isbn'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tmp_transbuku where isbn='$isbn'");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Hapus item berhasil");window.location ="checkout.php";</script>';
 
?>
