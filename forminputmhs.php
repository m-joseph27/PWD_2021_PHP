<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Form Input Royadi</title>
  <link rel="stylesheet" href="forminput.css">
</head>

<body>
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td height="101" align="center"><strong>JUDUL</strong></td>
    </tr>
    <tr>
      <td height="28" valign="top" align="center">
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
      <td height="293" valign="top" align="center">
        <p>Data Mahasiswa</p>
        <form action="prosesinputmhs.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <table border="1" class="form-wrapper">
            <tr>
              <td width="450">
                <table width="448" border="0">
                  <tr class="nim-wrapper">
                    <td width="151">Nim</td>
                    <td width="13"> : </td>
                    <td width="270"><label>
                        <input name="nim" type="text" id="nim" />
                      </label></td>
                  </tr>
                  <tr class="mhs-wrapper">
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><label for="nama"></label>
                      <input type="text" name="nama" id="nama" />
                    </td>
                  </tr>
                  <tr class="alamat-wrapper">
                    <td class="add" align="start">Alamat</td>
                    <td>:</td>
                    <td><label for="alamat"></label>
                      <textarea name="alamat" id="alamat"></textarea>
                      <label for="gbr2"></label>
                    </td>
                  </tr>
                  <tr>
                    <td height="23" colspan="4" class="btn-wrapper">
                        <button type="submit" name="Submit" value="Input" class="submit">Submit</button>
                        <button type="reset" name="Submit2" value="Reset" class="reset">Reset</button>
                      </td>
                  </tr>
                </table> <label></label>
              </td>
            </tr>
          </table>
        </form>
        <p>
        </p>
        </p>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</body>

</html>