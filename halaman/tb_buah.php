<?php 
include 'koneksi.php';
$sql = "SELECT * FROM tb_buah ";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        .i {
          width: 50%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid black;
        }
        </style>
</head>
<body>
  <h1 class = "judul">toko buah</h1>
   <table class= "i">
     <tr>
        <th>id_buah</th>
        <th>Nama_buah</th>
        <th>harga</th>
        <th>exp_buah</th>
     </tr>
     <?php while ($row = mysqli_fetch_assoc ($result)):?>
    <tr>
    <td><?= $row['id_buah']?></td>
    <td><?= $row['nama_buah']?></td>
    <td><?= $row['harga']?></td>
    <td><?= $row['exp_buah']?></td>
    </tr>
    
  <?php endwhile ?>
     </table>
</body>
</html>