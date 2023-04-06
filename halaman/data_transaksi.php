<?php
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.harga, transaksi.total_pembayaran,transaksi.kuantitas, pelanggan.id_pelanggan,pelanggan.nama_pelanggan, tb_buah.id_buah, tb_buah.nama_buah FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN tb_buah on tb_buah.id_buah = transaksi.id_buah ORDER BY id_transaksi";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <style type="text/css">
        .i{
          width: 50%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid  black;
        }
        
  
        </style>
</head>
<body>
   <table class="i">
     <tr>
        <th>id_transaksi</th>
        <th>id_pelanggan</th>
        <th>nama_buah</th>
        <th>kuantitas</th>
        <th>harga</th>
        <th>total pembayaran</th>
     </tr>
     <?php while ($row = mysqli_fetch_array($result)):
      
        ?>
    <tr>
    <td><?= $row['id_transaksi']?></td>
    <td><?= $row['id_pelanggan']?></td>
    <td><?= $row['nama_buah']?></td>
    <td><?= $row['kuantitas']?></td>
    <td><?= $row['harga']?></td>
    <td><?= $row['total_pembayaran']?></td>
    </tr>
  <?php endwhile ?>
     </table>
</body>
</html>