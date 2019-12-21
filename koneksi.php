<?php
// KONEKSI DATABASE
$koneksi = mysqli_connect("localhost","root","","db_bukuku");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>