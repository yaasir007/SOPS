<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/login.css">

  
</head>

  <body>

  <div class="login-page">
  <div class="form">
    <form class="register-form" action="include/signup.inc.php" method="POST">
      <p style="font-size: 35px;">Sign Up</p>
      <input type="text" name="first" placeholder="Firstname..." required>
    <input type="text" name="last" placeholder="Lastname..." required>
    <input type="text" name="city" placeholder="City..." required>
    <input type="text" name="email" placeholder="E-mail/Username..." required>
    <input type="text" name="phone" maxlength="8" placeholder="Phone Number..." required>
    <input type="password" id="psw" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" placeholder="Password..." required>
    <input type="password" name="cpwd" minlength="8" placeholder="Confirm Password..." required> <br>

   <button type="submit" name="submit">Sign Up</button>
<div id="message">
  <h4>Password must contain the following:</h4>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<script src="javascript/password.js"></script>

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
   elseif (strpos($fullUrl, "signup=email_taken") == true) {
    echo "<p align='center'>This username/e-mail is taken, please enter a new one!</p>";
    exit();
   } 
   elseif (strpos($fullUrl, "password_do_not_match") == true) {
    echo "<p align='center'>The two passwords do not match!</p>";
    exit();
   } 
   elseif (strpos($fullUrl, "signup=success") == true) {
    echo "<p align='center'>You have successfully been signed up. Please log in now!</p>";
    exit();
   } 

   ?>


   <br> <p align="center">All payments need to be made <a style="font-size: 18px; color:green;" href="transfer.php">HERE</a></p>

   
<p class="message">Already registered? <a href="#">Sign In</a></p>

    </form>
    
    <form  class="login-form" action="include/login.inc.php" method = "POST">
      <p style="font-size: 35px;">LOG IN</p>
            <input type="text" name="email" placeholder="E-mail/Username..." required>
            <input type="password" name="pwd" placeholder="Password..." required>
            <button type="submit" name="submit">Login</button>
        </form>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      <p align="center" class="message"><a href="index.php">Home</a></p>
    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/login.js"></script>


</body>

</html>
