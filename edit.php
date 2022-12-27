<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'connect.php';

	$id_barang = $_POST['id_barang'];
	$data = mysqli_query($conn,"SELECT * FROM barang WHERE id_barang='$id_barang'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Barang</td>
						<input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" value="<?php echo $d['stok']; ?>"></td>
				</tr>
                <tr>
					<td>Gambar</td>
					<td><input type="text" name="gambar" value="<?php echo $d['gambar']; ?>"></td>
				</tr>
				<tr>
					<td>SIMPAM</td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>