<?php 
include 'config.php';
$id=$_POST['id'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

mysql_query("update barang_laku set tanggal='$tanggal', nama='$nama', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang_laku.php");

?>