<!DOCTYPE html>
<html>
<head>
  <title> Toko Buah | X PPLG - SMKN 1 DEPOK</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
 
  <header>  
    <h1 class="judul">Toko Buah</h1>
    <h3 class="deskripsi">Dono Store</h3>
  </header>

  <div class="menu">
    <ul>
      <li><a href="index.php?page=buah">buah</a></li>
      <li><a href="index.php?page=pelanggan">Pelanggan</a></li>
      <li><a href="index.php?page=transaksi">Transaksi</a></li>
     </ul>
  </div>

  <div class="badan">
 
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'buah':
        include "halaman/tb_buah.php";
        break;
      case 'pelanggan':
        include "halaman/data_pelanggan.php";
        break;
      case 'transaksi':
        include "halaman/data_transaksi.php";
        break;
    }
  }   
 
   ?>
 
  </div>
</div>
</div>
</body>
</html>