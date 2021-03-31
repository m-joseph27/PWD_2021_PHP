<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Royadi</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <main>
    <div class="text-login">
      <h3>Login</h3>
    </div>
    <div class="form-wrapper">
      <form id="form1" name="form1" method="post" action="ceklogin.php">
        <table width="100%" align="center" cellpadding="0" cellspacing="0">
          <div class="form-parent">
            <tr class="user-wrapper">
              <td width="64%">
                <label for="username">Username</label><br><br>
                <input type="text" name="username" id="username" placeholder="Username" /><br><br>
              </td>
            </tr>
            <tr>
              <td><label for="password">Password</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password" />
              </td>
            </tr>
          </div>
          <tr>
            <td height="26" colspan="3" align="left">
              <button name="button" value="Cancel" type="reset" class="btn-cancel">Cancel</button>
              <button name="button" value="Login" type="submit" class="btn-login">Login</button>
            </td>
          </tr>
        </table>
      </form>
    </div>
  </main>
</body>

</html>