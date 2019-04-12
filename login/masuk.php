<?php
session_start();
include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
  header("location: form.php");
}
else
{
  $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);

  if($num > 0)
  {
    header("location: ../index/index.php");
    $_SESSION['user'] = $username; 
  }
  else
  {
    header("location: form.php");
  }
}
 ?>
