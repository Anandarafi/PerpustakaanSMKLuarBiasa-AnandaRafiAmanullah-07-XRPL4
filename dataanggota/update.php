<?php
include '../connect.php';

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan_anggota= $_POST['jabatan_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "UPDATE data_anggota SET nama_anggota = '$nama_anggota', jabatan_anggota = '$jabatan_anggota',jenis_kelamin='$jenis_kelamin' WHERE id_anggota = '$id_anggota'";

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
