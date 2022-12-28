<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$gambar = $_POST['gambar'];
 
// update data ke database
mysqli_query($conn,"UPDATE barang SET nama_barang='$nama_barang', harga='$harga', stok='$stok', gambar='$gambar' WHERE id_barang='$id_barang'");
 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
 
?>