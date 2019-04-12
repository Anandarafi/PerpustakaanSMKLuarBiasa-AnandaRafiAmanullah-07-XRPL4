<?php
include '../connect.php';

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$eksemplar = $_POST['eksemplar'];
$id_buku = $_POST['id_buku'];

$query = "INSERT INTO data_buku
           VALUES ('$kode','$judul','$kategori', '$eksemplar', '$id_buku')";

           $result = mysqli_query($connect,$query);

           $num = mysqli_affected_rows($connect);

  if($num > 0)
  { echo "Berhasil tambah data"; }
  else
  { echo "Gagal tambah data"; }

  echo "<a href='read.php'>Lihat Data</a>";
 ?>
