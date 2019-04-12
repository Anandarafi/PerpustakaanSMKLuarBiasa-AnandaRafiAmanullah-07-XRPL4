<?php
include '../connect.php';

$id_anggota = $_GET['id_anggota'];

$query = "SELECT * FROM data_anggota WHERE id_anggota = $id_anggota";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);

 ?>
 <!DOCTYPE html>
 <html >
   <head>
   <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Update Daftar Anggota Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal1.css">
   </head>
   <body>
   <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center"> Update Daftar Anggota Perpustkaan SMK Luar Biasa</h2>
  </div>
     <form action="update.php" method="post">
       <table>
       <tr>
            <td><label for="nama_anggota">Nama Anggota</label></td>
            <td>:</td>
            <td><input type="text" name="nama_anggota" id="nama_anggota" value="<?php echo $row['nama_anggota']; ?>"></td>
        </tr>
        <tr>
            <td><label for="jabatan_anggota">Jabatan Anggota</label></td>
            <td>:</td>
            <td><input type="text" name="jabatan_anggota" id="jabatan_anggota" value="<?php echo $row['jabatan_anggota']; ?>"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin</label></td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>"></td>
        </tr>
       <tr>
         <td></td>
         <td><input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>"></td>
         <td><input type="submit" value="Simpan" name="btnSimpan"></td>
       </tr>
       </table>
     </form>

   </body>
 </html>
