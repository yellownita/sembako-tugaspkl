<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
</head>
<body>
<?php
    session_start();
    if(!isset($_SESSION["login"]))
   
    require 'connect.php';
    $barang = mysqli_query($conn,"SELECT * FROM barang ORDER BY nama_barang");
?>
     
     <h1>Your email has been login </h1>
     
     <a href="logout.php">Logout</a>
     <a href="tambah.php">Tambahkan barang</a>
    
     

    <h1>Stok Barang</h1>
   
    <br> <br>
    <table border = "1" cellpadding = "10" cellspacing = "8">
        <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Nama Baramg</th>
            <th>Harga </th>
            <th>Stok </th>
            <th>Gambar </th>
            <th>Aksi</th>     
            <th>Last Edit By</th>     
        </tr>

         <?php $i = 1; ?>
         <?php foreach( $barang as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
           
            <td> <?= $row["id_barang"]; ?> </td>
            <td> <?= $row["nama_barang"]; ?> </td>
            <td> Rp <?= $row["harga"],',','.'; ?> </td>
            <td> <?= $row["stok"]; ?> </td>
            <td> <img src="./gambar/<?= $row['gambar']?>" width="40%"></td>
            <td>
                <a href="edit.php">Edit</a> 
                    |
                <a href="hapus.php?id=<?= $row['id_barang']?>" onclick="return confirm('Apakah Produk Akan Di Hapus');">Delete</a>
            </td>
            <td><?= $row["id_user"]; ?></td>
           
        </tr>
        <?php $i++; ?>
	    <?php endforeach; ?>
    </table>

    <?php 

 ?>

<body>
    

