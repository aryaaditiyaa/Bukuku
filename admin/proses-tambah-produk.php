<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$jml_hlm = $_POST['jml_hlm'];
$penerbit = $_POST['penerbit'];
$tgl_terbit = $_POST['tgl_terbit'];
$berat = $_POST['berat'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$gambar;
// Set path folder tempat menyimpan fotonya
$path = "foto_buku/".$fotobaru;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

// menginput data ke database
mysqli_query($koneksi,"insert into buku values('$isbn','$judul','$jml_hlm','$penerbit','$tgl_terbit','$berat','$deskripsi','$harga','$kategori','$fotobaru')");
 
// mengalihkan halaman kembali ke list produk
echo'<script>alert("Tambah data berhasil");window.location ="list-produk.php";</script>';
}
?>