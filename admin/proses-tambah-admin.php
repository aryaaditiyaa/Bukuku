<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into admin values('','$username','$password','$nama','$telepon')");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Tambah data berhasil");window.location ="list-admin.php";</script>';
 
?>