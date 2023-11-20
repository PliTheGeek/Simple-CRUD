<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Lis Cosmetic</title>
</head>
<body>
 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lis Cosmetic</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact Us</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>	

	

	<center><h2>Lis Cosmetic - User Catalogue</h2></center>
	<br/>
	
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
				
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>