<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
 
// mengupdate data ke database
mysqli_query($koneksi,"update admin set username='$username', password='$password', nama='$nama', telepon='$telepon' where id_admin='$id_admin'");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Edit data berhasil");window.location ="list-transaksi-selesai.php";</script>';
 
?>