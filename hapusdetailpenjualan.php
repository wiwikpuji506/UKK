<?php 
include 'koneksi.php';
$id = $_GET['DetailID'];
mysql_query("DELETE FROM detail_penjualan WHERE DetailID='$id'")or die(mysql_error());
 
header("location:detail_penjualan.php?pesan=hapus");
?>