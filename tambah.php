<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
</head>
<body>
 
	
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h5>Tambah Data Barang</h5>
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