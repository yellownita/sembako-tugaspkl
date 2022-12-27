<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO barang VALUES('','$id_user','$nama_barang','$harga','$stok', '$gambar')"); 



 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
 
?>