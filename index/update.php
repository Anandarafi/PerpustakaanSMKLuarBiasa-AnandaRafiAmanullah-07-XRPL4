<?php
include '../connect.php';

$id_buku = $_POST['id_buku'];
$kode = $_POST['kode'];
$judul= $_POST['judul'];
$kategori = $_POST['kategori'];
$eksemplar = $_POST['eksemplar'];

$query = "UPDATE data_buku SET kode = '$kode', judul = '$judul',kategori ='$kategori',eksemplar='$eksemplar' WHERE id_buku = '$id_buku'";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil update data <br>";
}
else
{
  echo "Gagal update data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";

 ?>
