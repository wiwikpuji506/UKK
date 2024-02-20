<!DOCTYPE html>
<html>
<head>
 <title>Tambah Produk Kasir</title>
</head>
<body>
 
 <h2>Tambah Detail Penjualan Kasir</h2>
 <br/>
 <a href="detail_penjualan.php">KEMBALI</a>
 <br/>
 <br/>
 <h3>TAMBAH DATA DETAIL PENJUALAN</h3>
 <form method="post" action="tambah_aksi_detailpenjualan.php">
 <table>
 <tr> 
 <td>DetailID</td>
 <td><input type="text" name="DetailID"></td>
 </tr>
 <tr>
 <td>PenjualanID</td>
 <td><input type="text" name="PenjualanID"></td>
 </tr>
 <tr>
 <td>ProdukID</td>
 <td><input type="text" name="ProdukID"></td>
 </tr>
 <tr>
 <td>JumlahProduk</td>
 <td><input type="text" name="JumlahProduk"></td>
 </tr>
 <tr>
 <td>SubTotal</td>
 <td><input type="text" name="SubTotal"></td>
 </tr>

 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr> 
 </table>
 </form>
</body>
</html>