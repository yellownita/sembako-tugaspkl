<?php 
// koneksi database
include 'functions.php';
 

// menangkap data id yang di kirim dari url
$id = $_GET['id'];

if(hapus($id) > 0 ){
    echo "
    <script>
    alert('produk berhasil di hapus');
    document.location.href = 'barang.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('produk gagal di hapus');
    document.location.href = 'barang.php';
    </script>
    ";
}


 
// mengalihkan halaman kembali ke index.php
header("location:barang.php");
 
?>