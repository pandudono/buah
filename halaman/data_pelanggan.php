<?php 
include 'koneksi.php';
$sql = "SELECT * FROM pelanggan";
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
  <h1 class = "judul">PELANGGAN </h1>
   <table class= "i">
     <tr>
        <th>id_pelanggan</th>
        <th>Nama_pelanggan</th>
        <th>alamat</th>
        <th>email</th>
        <th>no_hp</th>
     </tr>
     <?php while ($row = mysqli_fetch_assoc ($result)):?>
    <tr>
    <td><?= $row['id_pelanggan']?></td>
    <td><?= $row['nama_pelanggan']?></td>
    <td><?= $row['alamat']?></td>
    <td><?= $row['email']?></td>
    <td><?= $row['no_hp']?></td>
    </tr>

  <?php endwhile?>
     </table>
</body>
</html>