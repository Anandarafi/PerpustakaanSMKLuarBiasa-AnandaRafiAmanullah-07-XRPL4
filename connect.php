<?php

$host = "localhost";
$db = "perpustakaan";
$pass = "";
$uname = "root";

$connect = mysqli_connect($host, $uname, $pass, $db);

if(!$connect)
{
  echo "Koneksi ke database gagal : " .mysqli_connect_error();

}
 ?>
