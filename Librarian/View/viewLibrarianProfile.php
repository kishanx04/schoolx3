<?php
require_once('../Model/usersmodel.php');
session_start();
$librarianid = $_SESSION['librarianid'];
$librarianinfo =  viewLibrarianProfile($librarianid);

?>
<table border="1">
        <tr>
            <th>Librarian ID</th>
            <th>Name</th>
            <th>Mail</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Mobile No.</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><?php echo $librarianinfo['librarianid']; ?></td>
            <td><?php echo $librarianinfo['name']; ?></td>
            <td><?php echo $librarianinfo['mail']; ?></td>
            <td><?php echo $librarianinfo['gender']; ?></td>
            <td><?php echo $librarianinfo['dob']; ?></td>
            <td><?php echo $librarianinfo['mobileno']; ?></td>
            <td><?php echo $librarianinfo['address']; ?></td>
            <td><a href="changeLibrarianPassword.php">Reset Password</a></td>
        </tr>
        <tr><a href="dashboard.php">Go to Dashboard</a></tr>
</table>        