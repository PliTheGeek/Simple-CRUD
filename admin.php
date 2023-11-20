<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Lis Cosmetic-Admin</title>
</head>
<body>
 
	
	<center><h2 >Lis Cosmetic - Admin Page</h2></center>
	<br/>
	<a href="tambah.php">+ Tambah Item</a>
	<br/>
	<br/>
	<table border="1" class="table table-sm">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Jumlah</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from menu");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['NamaMenu']; ?></td>
				<td><?php echo $d['Harga']; ?></td>
                <td><?php echo $d['Jumlah']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>