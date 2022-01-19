<?php
include_once 'insideheader.php';
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>

 <div align="center">
<p class="l2">Profile Information</p> <br>
<?php

if(isset($_SESSION['u_email'])){
     
    include_once 'include/dbh.inc.php' ;
    
    $userid = $_SESSION['u_id'];
    $useremail = $_SESSION['u_email'];

  }
    
    
    $sql = "SELECT * FROM user WHERE id='$userid'";
    $result = mysqli_query($conn,$sql);
   while ($row = mysqli_fetch_array($result)) {
        
$first = $row['firstname'];
$last = $row['lastname'];
$city = $row['city'];
$email = $row['email'];
$phone = $row['phonenumber'];
$credit = $row['credits'];

    } 
    
echo"
<div>
<p><b>Welcome $first!</b></p> <br>
</div> "; ?>
<div>
    <table  class="l1">
<tr> <td>First Name:</td> <td> <?php echo $first ?> </td> </tr> 
<tr> <td>Last Name:</td> <td> <?php echo $last ?> </td> </tr>
<tr> <td>E-mail:</td> <td> <?php echo $email ?> </td> </tr> 
<tr> <td>Phone Number:</td> <td> <?php echo $phone ?> </td> </tr>
<tr> <td>City:</td> <td> <?php echo $city ?> </td> </tr> 
<tr> <td>Credits:</td> <td> <?php echo $credit ?> </td> </tr> 
    </table>
</div>

<br>
<br>
</div>


<div align="center"><br><br><br><br>
    <p>Click <b><a href="editprofile.php" class="l1">HERE</a></b> to update your profile information.</p>
</div>
</body>
</html>