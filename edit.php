<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
 
	
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h5>Edit Data</h5>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from menu where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Item</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="NamaMenu" value="<?php echo $d['NamaMenu']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="Harga" value="<?php echo $d['Harga']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="Jumlah" value="<?php echo $d['Jumlah']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>