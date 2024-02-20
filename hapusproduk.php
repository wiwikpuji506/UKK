<?php 
include 'koneksi.php';
$id = $_GET['ProdukID'];
mysql_query("DELETE FROM produk WHERE ProdukID='$id'")or die(mysql_error());
 
header("location:produk.php?pesan=hapus");
?>