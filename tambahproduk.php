<!DOCTYPE html>
<html>
<head>
 <title>Tambah Produk Kasir</title>
</head>
<body>
 
 <h2>Tambah Produk Kasir</h2>
 <br/>
 <a href="produk.php">KEMBALI</a>
 <br/>
 <br/>
 <h3>TAMBAH DATA PRODUK</h3>
 <form method="post" action="tambah_aksi_produk.php">
 <table>
 <tr> 
 <td>ProdukID</td>
 <td><input type="text" name="ProdukID"></td>
 </tr>
 <tr>
 <td>NamaProduk</td>
 <td><input type="text" name="NamaProduk"></td>
 </tr>
 <tr>
 <td>Harga</td>
 <td><input type="text" name="Harga"></td>
 </tr>
 <tr>
 <td>Stok</td>
 <td><input type="text" name="Stok"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="SIMPAN"></td>
 </tr> 
 </table>
 </form>
</body>
</html>