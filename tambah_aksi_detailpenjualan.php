<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$DetailID = $_POST['DetailID'];
$PenjualanID = $_POST['PenjualanID'];
$ProdukID = $_POST['ProdukID'];
$JumlahProduk = $_POST['JumlahProduk'];
$SubTotal = $_POST['SubTotal'];
// menginput data ke database
mysqli_query($koneksi,"insert into detail_penjualan values('$DetailID','$PenjualanID','$ProdukID','$JumlahProduk','$SubTotal')");
 
// mengalihkan halaman kembali ke index.php
header("location:detail_penjualan.php");
 
?>