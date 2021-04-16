<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
    <style media="screen">
      #error_messege{
        color: red;
        font-weight: bold;
      }
    </style>
    <script src="../Script/adminloginVal.js"></script>
  </head>
  <body>
    <table border="1" cellspacing="0" width="100%" >
      <tr>
        <td>
          <table width="100%">
            <tr>
              <td><img height="50px" weight="50px" src="../Resources/logo.png" alt=""></td>
              <td align = "center"><h1>School Management System</h1></td>
              <td align = "right">
                <a href="../../Home/index.html">Back</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table align="center" >
            <tr>
              <td>
                <form class="" id="inform" action="../Controller/logCheck.php" onsubmit="return validation()" method="post">
                  <fieldset>
                    <legend>LOGIN</legend>
                    <table>
                      <tr>
                        <td colspan="2">
                          <center>
                          <div id="error_messege">
                          </div>
                        </center>
                      </tr>
                      <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="id" value=""></td>
                      </tr>
                      <tr>
                        <td>Password</td>
                        <td>: <input type="password" id="password" name="password" value=""></td>
                      </tr>
                    </table>
                    <input type="checkbox" name="" value=""> Remember Me <br>
                    <br>
                    <input type="submit" name="submit" value="LOGIN">
                    <a href="ForgotPassword.php">FORGOT PASSWORD?</a>
                    <br>
                    <a href="regester.php">SIGN UP</a>
                  </fieldset>
                </form>
            </td>

          </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td align="center" >Copyright Ⓒ 2021</td>
      </tr>

    </table>

  </body>
</html>
