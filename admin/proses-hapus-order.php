<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_transaksi = $_GET['id_transaksi'];
 
// menghapus data dari database
mysqli_query($koneksi,"delete from order_masuk where id_transaksi='$id_transaksi'");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Hapus data berhasil");window.location ="list-order-masuk.php";</script>';
 
?>