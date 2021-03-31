<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Royadi</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>

  </nav>
  <table width="100%" cellpadding="0" cellspacing="0">
    <tr>
      <td height="101" class="title"><strong>JUDUL</strong></td>
    </tr>
    <tr>
      <td height="28" valign="top" align="center">
        <?php
        session_start();
        if (!empty($_SESSION['username'])) {
          include "menuadmin.php";
          echo "Welcome $_SESSION[username]";
        } else {
          include "menu.php";
        }
        ?>
      </td>
    </tr>
    <tr>
      <td class="main-menu" height="293" valign="top" align="left"> Selamat Datang di Sistem Informasi Akademik STMIK MAHAKARYA</td>
    </tr>
    <tr class="created">
      <td align="center">Created by Royadi</td>
    </tr>
  </table>

</body>

</html>