<?php
  include "koneksi.php";

  $perintah="insert into mhs(nim,nm_mhs,alamat) values
  ('$_POST[nim]','$_POST[nama]','$_POST[alamat]')";
  $result = mysqli_query($konek,$perintah);

  if ($result) {
    echo ("<script>");
    echo ("alert(\"Data sudah terinput \");");
    echo ("document.location='mahasiswa.php'");
    echo ("</script>");
  } else {
    echo"Pesan Anda tidak dapat disimpan.";
  }
?>