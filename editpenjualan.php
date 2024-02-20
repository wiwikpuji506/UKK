<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$PenjualanID = $_POST['PenjualanID'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];
$TotalHarga = $_POST['TotalHarga'];

// update data ke database
mysqli_query($koneksi,"update penjualan set PenjualanID='$PenjualanID', TanggalPenjualan='$TanggalPenjualan', TotalHarga='$TotalHarga' where PenjualanID='$PenjualanID'");
 
// mengalihkan halaman kembali ke index.php
header("location:editpenjualan.php");
 
?>