<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['NamaMenu'];
$harga = $_POST['Harga'];
$jumlah = $_POST['Jumlah'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into menu values('','$nama','$harga','$jumlah')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>