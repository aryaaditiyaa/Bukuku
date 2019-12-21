<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"insert into tmp_transbuku values('$isbn','$judul','$jumlah','$harga')");
 
// mengalihkan halaman 
echo'<script>alert("Berhasil Menambah Keranjang");window.location ="checkout.php";</script>';

?>