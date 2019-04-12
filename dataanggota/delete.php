<?php
include '../connect.php';

$id_anggota= $_GET['id_anggota'];

$query = "DELETE FROM data_anggota WHERE id_anggota = $id_anggota";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil hapus data <br>";
}
else
{
  echo "gagal hapus data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";
 ?>
