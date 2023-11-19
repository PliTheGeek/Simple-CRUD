<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['NamaMenu'];
$harga = $_POST['Harga'];
$jumlah = $_POST['Jumlah'];
 
// update data ke database
mysqli_query($koneksi,"update menu set NamaMenu='$nama',Harga='$harga',Jumlah='$jumlah' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>