<?php
  $host='localhost';
  $user='root';
  $pass='';
  $database='php2';
  $konek=mysqli_connect($host, $user, $pass);
  // mysqli_select_db($konek, $database);
  mysqli_select_db($konek, $database);
  if ($konek)
  {
    // echo "connection succesfully";
  }
  else
  {
    echo "connection failed";
  }
?>