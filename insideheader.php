<?php
session_start();
include 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="css/insideheader.css">

</head>
<body>
                 <ul> 
          <li><a href="reservation.php">Homepage</a></li>
          <li><a href="profile.php">My Profile</a></li>
          <li><a href="records.php">View Records</a></li> 
          <li style="float:right">
         <?php
        if (isset($_SESSION['u_id'])){
          echo '<form action="include/logout.inc.php" method = "POST">
<button type="submit" name= "submit">Logout</button>
        </form>';
              } else {
          header("Location:../index.html");

        }
        ?>
         </li>
         </ul>
              
              </body>
              </html>