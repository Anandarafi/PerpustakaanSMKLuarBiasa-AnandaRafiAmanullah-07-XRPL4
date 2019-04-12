<?php

session_start();

if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form.php");
}

include'../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT kode, judul, kategori, eksemplar FROM data_buku WHERE $kategori LIKE '%$cari%' ORDER BY id_buku";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Pencarian Data Buku Perpustakaan SMK Luar Biasa</title>
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
    <table border='1'>
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
      echo "<td colspan='6'>Tidak ada data</td>";
      }
      ?>
    </table>
    <tr>
      <td><a href="http://localhost/perpustakaan/index/read.php"><input type="submit" name="btnSimpan" value="Kembali"></td>
    </tr>

  </body>
</html>
