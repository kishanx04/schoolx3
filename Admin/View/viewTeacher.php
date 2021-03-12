<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Teacher</title>
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
                <a href="dashboard.php">Back</a> |
                <a href="../Controller/logout.php">Logout</a>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <tr>
        <td>
          <table width="100%" cellspacing="0" border="1">
            <tr>
              <td width="250px">
                <center>
                  <h3>Login As</h3>
                  <h2>User name</h2>
                  <p>(Admin)</p>
                </center>
                <hr>
                <ul>
                  <li><a href="addTeacher.php">Add Teacher</a></li>
                  <li><a href="viewTeacher.php">View Teacher</a></li>
                  <li><a href="dashboard.php">Dashbord</a></li>
                  <li><a href="../Controller/logout.php">Logout</a></li>

                </ul>
              </td>

              <td>
                <center><h2>Teacher list</h2></center>

                <table width="100%" border="1">
                  <tr align="center" >
                    <td>ID</td>
                    <td>Name</td>
                    <td>Subject</td>
                    <td>Action</td>
                  </tr>

                  <tr align="center">
                    <td>1001</td>
                    <td>Kowhisk</td>
                    <td>English</td>
                    <td>
            					<a href="editTeacher.php?id=1">EDIT</a> |
            					<a href="deleteTeacher.php?id=1">DELETE</a> |
                      <a href="blockTeacher.php?id=1">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>1002</td>
                    <td>a</td>
                    <td>Bangla</td>
                    <td>
            					<a href="editTeacher.php?id=2">EDIT</a> |
            					<a href="deleteTeacher.php?id=2">DELETE</a> |
                      <a href="blockTeacher.php?id=2">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>1003</td>
                    <td>b</td>
                    <td>Math</td>
                    <td>
            					<a href="editTeacher.php?id=3">EDIT</a> |
            					<a href="deleteTeacher.php?id=3">DELETE</a> |
                      <a href="blockTeacher.php?id=3">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>1004</td>
                    <td>c</td>
                    <td>Physics</td>
                    <td>
            					<a href="editTeacher.php?id=4">EDIT</a> |
            					<a href="deleteTeacher.php?id=4">DELETE</a> |
                      <a href="blockTeacher.php?id=4">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>1005</td>
                    <td>b</td>
                    <td>Math</td>
                    <td>
            					<a href="editTeacher.php?id=5">EDIT</a> |
            					<a href="deleteTeacher.php?id=5">DELETE</a> |
                      <a href="blockTeacher.php?id=5">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td>1006</td>
                    <td>b</td>
                    <td>Math</td>
                    <td>
            					<a href="editTeacher.php?id=6">EDIT</a> |
            					<a href="deleteTeacher.php?id=6">DELETE</a> |
                      <a href="blockTeacher.php?id=6">BLOCK</a>
            				</td>
                  </tr>

                  <tr align="center">
                    <td colspan="4"><a href="#">See More</a></td>
                  </tr>
                </table>
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