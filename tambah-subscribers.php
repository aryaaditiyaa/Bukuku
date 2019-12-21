<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$email = $_POST['email'];

// menginput data ke database
mysqli_query($koneksi,"insert into subscribers values('$email')");
 
// mengalihkan halaman 
echo'<script>alert("Berhasil Subscribe");window.location ="index.php";</script>';

?>