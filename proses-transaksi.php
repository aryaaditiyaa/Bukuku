<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$id_transaksi = $_POST['id_transaksi'];
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];
$nama_pembeli = $_POST['nama_pembeli'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$total = $_POST['total'];
$tgl_order = $_POST['tgl_order'];
$jam_order = $_POST['jam_order'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($koneksi,"insert into order_masuk values('','$id_transaksi','$judul','$jumlah','$nama_pembeli','$alamat','$telepon','$total','$tgl_order','$jam_order','$status')");
mysqli_query($koneksi,"TRUNCATE TABLE tmp_transbuku;");
// mengalihkan halaman 
echo'<script>alert("Pesanan Berhasil Dibuat");window.location ="payment.php";</script>';

?>