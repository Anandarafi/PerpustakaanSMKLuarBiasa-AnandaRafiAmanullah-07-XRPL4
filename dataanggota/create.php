<?php
include '../connect.php';

$id_anggota = $_POST['id_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$jabatan_anggota = $_POST['jabatan_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$query = "INSERT INTO data_anggota
           VALUES ('$id_anggota','$nama_anggota','$jabatan_anggota', '$jenis_kelamin')";

           $result = mysqli_query($connect,$query);

           $num = mysqli_affected_rows($connect);

  if($num > 0)
  { echo "Berhasil tambah data"; }
  else
  { echo "Gagal tambah data"; }

  echo "<a href='read.php'>Lihat Data</a>";
 ?>
