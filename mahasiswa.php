<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa Royadi</title>
  <link rel="stylesheet" href="mahasiswa.css">
</head>

<body>

  <div class="wrapper-mhs">
    <table width="">
      <div class="table-parent">
        <tr>
          <td height="101"><strong>JUDUL</strong></td>
        </tr>
        <tr>

          <td height="28" valign="top">
            <?php
            if (!empty($_SESSION['username'])) {
              include "menuadmin.php";
            } else {
              include "menu.php";
            }
            ?>

          </td>
        </tr>
        <tr>
          <td height="293" valign="top">
            <p class="data-mahasiswa">Data Mahasiswa</p>
            <?php
            error_reporting(0);
            include "koneksi3.php";
            session_start();
            if (!empty($_SESSION['username'])) {
              $tampil = "select *from mhs order by nim";
              $hasil = mysqli_query($konek, $tampil);
              $no = 1;
            ?>

              <table width="909" height="67" border="1" class="table-parent">
                <tr>
                  <td width="38" bgcolor="#CCCCCC"><strong>No</strong></td>

                  <td width="94" height="33" bgcolor="#CCCCCC">
                    <div align="center"><strong>Nim</strong></div>
                  </td>
                  <td width="197" bgcolor="#CCCCCC">
                    <div align="center"><strong>Nama
                        Mahasiswa</strong></div>
                  </td>
                  <td width="273" bgcolor="#CCCCCC"><strong>Alamat</strong></td>
                  <td width="273" bgcolor="#CCCCCC">
                    <div align="center"><a href="forminputmhs.php"><strong>Input</strong></a></div>
                  </td>
                </tr>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                  if (($no % 2) == 0) {
                    $warna = "grey";
                  } else {
                    $warna = "white";
                  }
                ?>
                  <tr bgcolor=" <?php echo $warna; ?> ">
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data['nim']; ?> </td>
                    <td> <?php echo $data['nm_mhs']; ?> </td>
                    <td> <?php echo $data['alamat']; ?> </td>
                    <td>
                      <a class="edit" href=" <?php echo "editmhs.php?nim=$data[nim]"; ?> "> Edit </a> <span class="ed-wrapper">|</span>
                      <a class="delete" href="deletemhs.php?nim= <?php echo "$data[nim]"; ?> " onClick="return confirm('Apakah anda benar-benar akan menghapus nama yang berada di
<?php echo "$data[nm_mhs]"; ?> ?')">Hapus</a>
                    </td>
                  </tr>

                <?php
                  $no++;
                }
                ?>

              </table>
            <?php
              $tampil2 = mysqli_query($konek, "select * from mhs order by nim");
              $jmldata = mysqli_num_rows($tampil2);
              echo "<p>Total Anggota : <b> $jmldata </b> orang </p>";
            } else {
              $tampil = "select *from mhs";
              $hasil = mysqli_query($konek, $tampil);
              $no = 1;
            ?>
              <table width="630" height="67" border="1" class="table-parent">
                <tr>
                  <td width="40" bgcolor="#CCCCCC"><strong>No</strong></td>
                  <td width="92" height="33" bgcolor="#CCCCCC">
                    <div align="center"><strong>Nim</strong></div>
                  </td>
                  <td width="197" bgcolor="#CCCCCC">
                    <div align="center"><strong>Nama
                        Mahasiswa</strong></div>
                  </td>
                  <td width="273" bgcolor="#CCCCCC">
                    <div align="center"><strong>Alamat</strong></div>
                  </td>
                </tr>
                <?php
                while ($data = mysqli_fetch_array($hasil)) {
                  if (($no % 2) == 0) {
                    $warna = "grey";
                  } else {
                    $warna = "white";
                  }
                ?>
                  <tr bgcolor=" <?php echo $warna; ?> ">
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data['nim']; ?> </td>
                    <td> <?php echo $data['nm_mhs']; ?> </td>
                    <td> <?php echo $data['alamat']; ?> </td>
                  </tr>
                <?php
                  $no++;
                }
                ?>
              </table>
            <?php
              $tampil2 = mysqli_query($konek, "select * from mhs");
              $jmldata = mysqli_num_rows($tampil2);
              echo "<p>Total Anggota : <b> $jmldata </b> orang </p>";
            }
            ?>
            <p>
            </p>
            </p>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </div>
    </table>
  </div>

</body>

</html>