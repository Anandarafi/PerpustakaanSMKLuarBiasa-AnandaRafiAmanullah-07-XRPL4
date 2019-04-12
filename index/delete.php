<?php
include '../connect.php';

$id_buku = $_GET['id_buku'];

$query = "DELETE FROM data_buku WHERE id_buku = $id_buku";

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
