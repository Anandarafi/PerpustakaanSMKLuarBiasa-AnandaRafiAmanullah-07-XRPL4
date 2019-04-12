<?php

session_start();

if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form.php");
}

include'../connect.php';

$query = "SELECT * FROM data_buku";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Data Buku Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal.css">
  </head>
  </head>





  <body>
  <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center">Data Buku Perpustkaan SMK Luar Biasa</h2>
  </div>
  <form action="search.php" method="get">
  <input type="search" name="cari" placeholder="Masukkan pencarian...">
  <select name="kategori" id="">
    <option value="kode">Kode Buku</option>
    <option value="judul">Judul Buku</option>
    <option value="kategori">Kategori Buku</option>
    <option value="eksemplar">Eksemplar</option>
  </select>
  <input  type="submit" value="Cari"> 
  </form> <br>
    <table border='1'>
      <tr>
      <a href="form-datbuk.php"><input type="submit" name="btnSimpan" value="Tambah Daftar Buku">
      </tr>
      <tr>
        <th>No.</th>
        <th>Kode</th>
        <th>Judul Buku</th>
        <th>Kategori </th>
        <th>Eksemplar</th>
        <th>Aksi</th>
      </tr>
      <?php
      if($num > 0)
      {
        $no = 1;
        while($data = mysqli_fetch_assoc($result))
        { ?>
          <tr>
          <td> <?php echo $no; ?> </td>
          <td> <?php echo $data['kode']; ?> </td>
          <td> <?php echo $data['judul']; ?> </td>
          <td> <?php echo $data['kategori']; ?> </td>
          <td> <?php echo $data['eksemplar']; ?> </td>
            <td>
            <a href="form-update.php?id_buku=<?php echo $data['id_buku']; ?>">Edit </a> |
            <a href="delete.php?id_buku=<?php echo $data['id_buku']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>
          </td>
          </tr>
          <?php
          $no++;
        }
      }
      else
      {
      echo "<td colspan='6'><b>Tidak ada data</b></td>";
      }
      ?>
    </table> <br>
    <tr>
      <td><a href="http://localhost/perpustakaan/index/index.php"><input type="submit" name="btnSimpan" value="Kembali"></td>
    </tr>

  </body>
</html>
