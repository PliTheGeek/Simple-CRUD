<!DOCTYPE html>
<html>
<head>
	<title>Lis Cosmetic</title>
</head>
<body>
 
	<h2>Lis Cosmetic - Admin Page</h2>
	<br/>
	<a href="tambah.php">+ Tambah Item</a>
	<br/>
	<br/>
	<table border="1">
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