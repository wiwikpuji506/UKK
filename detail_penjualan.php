<!DOCTYPE html>
<html>
<head>
 <title>kasir</title>
</head>
<body>
 
 <h2>Aplikasi Kasir</h2>
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="detail_penjualan.php">Detail Penjualan</a></li>
                    <li class="nav-item"><a class="nav-link" href="penjualan.php">Penjualan</a></li>
                    <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>


<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian</h3>
 
<form action="detail_penjualan.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
 <table border="1">
 <tr>
 <th>DetailID</th>
 <th>PenjualanID</th>
 <th>ProdukID</th>
 <th>JumlahProduk</th>
 <th>SubTotal</th>
 <th>OPSI</th>
 </tr>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($koneksi,"select * from detail_penjualan where DetailID like '%".$cari."%'");    
 }else{
  $data = mysqli_query($koneksi,"select * from detail_penjualan");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>

 <tr>
 <td><?php echo $d['DetailID']; ?></td>
 <td><?php echo $d['PenjualanID']; ?></td>
 <td><?php echo $d['ProdukID']; ?></td>
 <td><?php echo $d['JumlahProduk']; ?></td>
 <td><?php echo $d['SubTotal']; ?></td>

 <td>
 <a href="hapusdetailpenjualan.php?id=<?php echo $d["DetailID"]; ?>">Hapus</a>|
 <a href="editdetailpenjualan.php?id=<?php echo $d["DetailID"]; ?>">Edit</a></td>
 </td>
 </tr>
 <?php 
 }
 ?>
 </table>
 <h4><a href="tambahdetailpenjualan.php">+Tambah Detail Penjualan</a></h4>
</body>
</html>

