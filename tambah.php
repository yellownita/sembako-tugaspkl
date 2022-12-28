<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<a href="barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Barang </td>
				<td><input type="text" name="nama_barang" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok" required></td>
			</tr>
            <tr>
				<td>Gambar</td>
				<td><input type="text" name="gambar" required></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>