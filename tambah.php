<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Barang </td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok"></td>
			</tr>
            <tr>
				<td>Gambar</td>
				<td><input type="text" name="gambar"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>