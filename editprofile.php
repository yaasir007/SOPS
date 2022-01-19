<?php
  include 'insideheader.php';

  if(isset($_SESSION['u_email'])){
    
    $userid = $_SESSION['u_id'];
    $useremail = $_SESSION['u_email'];
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/editprofile.css">  
</head>
<body>


<section class="main-container">
<div class="main-wrapper">


<?php
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
     
?>
	<br><br><br>
      <h2>You can update your personal information here.</h2>
	
	<form class="signup-form" action="include/editprofile.inc.php" method="POST">
		<input type="text" name="first" placeholder="<?php echo $first; ?>" required><br>
		<input type="text" name="last" placeholder="<?php echo $last; ?>" required><br>
		<input type="text" name="city" placeholder="<?php echo $city; ?>" required><br>
		<input type="text" name="email" placeholder="<?php echo $email; ?>" required><br>
		<input type="text" name="phone" maxlength="8" placeholder="<?php echo $phone; ?>" required>  <br><br>
	<button type="submit" name="submit">Update</button>
</div>	
</section>

<?php
   $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

   if (strpos($fullUrl, "firstname=invalid") == true) {
   	echo "<p align='center'>You have entered an invalid first name!</p>";
   	exit();
   }
    elseif (strpos($fullUrl, "lastname=invalid") == true) {
   	echo "<p align='center'>You have entered an invalid last name!</p>";
   	exit();
   } 
   elseif (strpos($fullUrl, "city=invalid") == true) {
   	echo "<p align='center'>You have entered an invalid City!</p>";
   	exit();
   } 
   elseif (strpos($fullUrl, "phone=invalid") == true) {
   	echo "<p align='center'>You have entered an invalid Phone Number.(8 digits)!</p>";
   	exit();
   } 
   elseif (strpos($fullUrl, "editprofile=email_taken") == true) {
   	echo "<p align='center'>This username/e-mail is taken, please enter a new one!</p>";
   	exit();
   } 
   elseif (strpos($fullUrl, "editprofile=success") == true) {
   	echo "<p align='center'>You have successfully updated your information. Thank you!</p>";
   	exit();
   }

?>


</body>
</html>
