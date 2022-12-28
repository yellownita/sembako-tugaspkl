<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<a href="barang.php">KEMBALI</a>
	<br/> 
	<br/>
 
	<?php
	include 'connect.php';
	$id = $_POST['id'];
	$data = mysqli_query($conn,"SELECT * FROM barang WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="functions.php">
			<table>
				<tr>			
					<td>Nama Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
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
					<td></td>
					<td><input type="submit" value="simpan"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>

