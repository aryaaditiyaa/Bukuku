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
 
// mengupdate data ke database
mysqli_query($koneksi,"update order_masuk set id_transaksi='$id_transaksi', judul='$judul', jumlah='$jumlah', nama_pembeli='$nama_pembeli', alamat='$alamat', telepon='$telepon', total='$total', tgl_order='$tgl_order', jam_order='$jam_order', status='$status' where id_transaksi='$id_transaksi'");
 
// mengalihkan halaman kembali ke list admin
echo'<script>alert("Update data berhasil");window.location ="list-order-masuk.php";</script>';
 
?>