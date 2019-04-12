<?php

session_start();

if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form.php");
}

include '../connect.php';

$query = "SELECT * FROM data_anggota";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="P.png">
    <title>Daftar Anggota Perpustakaan SMK Luar Biasa</title>
    <link rel="stylesheet" href="awal.css">
  </head>
  </head>





  <body>
  <header>
  <p><img src="P.png" style="float:left; width: 25px; "><h2 align="left">Perpustakaan SMK Luar Biasa</h2></p>
  </header>
  <div class="top">
  <h2 align="center">Daftar Anggota Perpustkaan SMK Luar Biasa</h2>
  </div>  
  </form> <br>
    <table border='1'>
      <tr>
      <a href="form-datbuk.php"><input type="submit" name="btnSimpan" value="Tambah Daftar Anggota">
      </tr>
      <tr>
        <th>No.</th>
        <th>Nama Anggota</th>
        <th>Jabatan Anggota</th>
        <th>Jenis Kelamin</th>
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
          <td> <?php echo $data['nama_anggota']; ?> </td>
          <td> <?php echo $data['jabatan_anggota']; ?> </td>
          <td> <?php echo $data['jenis_kelamin']; ?> </td>
            <td>
            <a href="form-update.php?id_anggota=<?php echo $data['id_anggota']; ?>">Edit </a> |
            <a href="delete.php?id_anggota=<?php echo $data['id_anggota']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>
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
