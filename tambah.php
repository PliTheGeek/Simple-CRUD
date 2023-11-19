<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Barang</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Item</td>
				<td><input type="text" name="NamaMenu"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="Harga"></td>
			</tr>
			<tr>
				<td>Jumlah Item</td>
				<td><input type="number" name="Jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>