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
mysqli_query($koneksi,"insert into transaksi_selesai values('$id_transaksi','$judul','$jumlah','$nama_pembeli','$alamat','$telepon','$total','$tgl_order','$jam_order','$status')");
// menghapus data dari database
mysqli_query($koneksi,"delete from order_masuk where id_transaksi='$id_transaksi'");
// mengalihkan halaman 
echo'<script>alert("Transaksi Selesai");window.location ="list-order-masuk.php";</script>';

?>