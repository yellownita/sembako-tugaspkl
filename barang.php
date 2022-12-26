<table border = "1" cellpadding = "10" cellspacing = "8">
        <tr>
            <th>Id Barang</th>
            <th>Nama Baramg</th>
            <th>Harga Barang</th>
            <th>Stok Produk</th>
            <th>Gambar Produk</th>
            <th>Aksi</th>          
        </tr>
        <?php

include "connect.php";
echo '<img  src="gambar.php">';


$no=1;
$ambildata = mysqli_query($conn, "Select * from barang");
while ($tampil = mysqli_fetch_array($ambildata)){
    echo "
    <tr> 
        <td>$tampil[id_barang]</td>
        <td>$tampil[nama_barang]</td>
        <td>$tampil[harga]</td>
        <td>$tampil[stok]</td>
        <td>$tampil[gambar]</td>
        <td>Aksi</td>
        
    </tr>";
    $no++;
}
?>
