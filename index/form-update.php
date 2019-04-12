<?php
include '../connect.php';

$id_buku = $_GET['id_buku'];

$query = "SELECT * FROM data_buku WHERE id_buku = $id_buku";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

 ?>
 <!DOCTYPE html>
 <html >
   <head>
   <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Update Data Buku Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal1.css">
   </head>
   <body>
   <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center"> Update Data Buku Perpustkaan SMK Luar Biasa</h2>
  </div>
     <form action="update.php" method="post">
       <table>
       <tr>
            <td><label for="kode">Kode Buku</label></td>
            <td>:</td>
            <td><input type="text" name="kode" id="kode" value="<?php echo $row['kode']; ?>"></td>
        </tr>
        <tr>
            <td><label for="judul">Judul Buku</label></td>
            <td>:</td>
            <td><input type="text" name="judul" id="judul" value="<?php echo $row['judul']; ?>"></td>
        </tr>
        <tr>
            <td><label for="kategori">Kategori Buku</label></td>
            <td>:</td>
            <td><input type="text" name="kategori" id="kategori" value="<?php echo $row['kategori']; ?>"></td>
        </tr>
        <tr>
          <td><label for="eksemplar">Eksemplar</label> </td>
          <td>:</td>
          <td><input type="text" name="eksemplar" id="eksemplar" value="<?php echo $row['eksemplar']; ?>"></td>
       </tr>
       <tr>
         <td></td>
         <td><input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>"></td>
         <td><input type="submit" value="Simpan" name="btnSimpan"></td>
       </tr>
       </table>
     </form>

   </body>
 </html>
