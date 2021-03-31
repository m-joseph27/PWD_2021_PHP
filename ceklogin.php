<?php
  session_start();
  include 'koneksi.php';

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = mysqli_query($konek, "SELECT * from admin where username='$username' and password='$password'");
  $cek = mysqli_num_rows($query);
  $row = mysqli_fetch_array($query);
  if ($row['username'] === $username && $row['password'] === $password) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location:index.php');
  } else {
    echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
      Username atau Password Anda tidak benar.<br>";
    echo "<br>";
    echo "<input class='btn btn-blue' type=button value='ULANGI LAGI'
    onclick=location.href='login.php'></a></center>";
  }

  // echo $cek;

  // session_start();
  // include "koneksi.php";
  // // $username = $_POST['username'];
  // $username = $_POST['username'];
  // $pass = md5($_POST['password']);
  // $login = mysqli_query($konek, "SELECT * FROM `admin` WHERE username = '$username' AND
  // password = '$pass'");
  // $row=mysqli_fetch_array($login);
  // if ($row['username'] === $username AND $row['password'] === $pass)
  // {
  // session_start();
  // $_SESSION['username'] = $row['username'];
  // $_SESSION['password'] = $row['password'];
  // header('location:index.php');
  // }
  // else
  // {
  //   header('location:index.php');
  // echo "<center><br><br><br><br><br><br><b>LOGIN GAGAL! </b><br>
  // Username atau Password Anda tidak benar.<br>";
  // echo "<br>";
  // echo "<input class='btn btn-blue' type=button value='ULANGI LAGI'
  // onclick=location.href='login.php'></a></center>";
  // }

?>