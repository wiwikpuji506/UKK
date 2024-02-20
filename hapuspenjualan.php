<?php 
include 'koneksi.php';
$id = $_GET['PenjualanID'];
mysql_query("DELETE FROM penjualan WHERE PenjualanID='$id'")or die(mysql_error());
 
header("location:penjualan.php?pesan=hapus");
?>