<?php
include_once 'insideheader.php';
?>
<?php
    if (isset($_SESSION['u_id'])) {
        
        $uid = $_SESSION['u_id'];
        $email = $_SESSION['u_email'];
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Select Slot</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/slot.css">
  </head>
<body> 					<br>
	<p align="center" class="text">Zone 4</p>       
	<p align="center" class="para">Select Slot</p>   
                <br>

<div align="center">

<form action="include/slotD.inc.php" method="POST">

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 1';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 1</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot1' value='Slot 1'>Slot 1</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 2';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 2</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot2' value='Slot 2'>Slot 2</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 3';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 3</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot3' value='Slot 3'>Slot 3</button>";
                                      }
                                    }
?>


<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 4';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 4</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot4' value='Slot 4'>Slot 4</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 5';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 5</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot5' value='Slot 5'>Slot 5</button>";
                                      }
                                    }
?>

<br><br>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 6';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 6</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot6' value='Slot 6'>Slot 6</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 7';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 7</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot7' value='Slot 7'>Slot 7</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 8';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 8</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot8' value='Slot 8'>Slot 8</button>";
                                      }
                                    }
?>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 9';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 9</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot9' value='Slot 9'>Slot 9</button>";
                                      }
                                    }
?>


<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 10';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 10</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot10' value='Slot 10'>Slot 10</button>";
                                      }
                                    }
?>
<br><br>
<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 11';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 11</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot11' value='Slot 11'>Slot 11</button>";
                                      }
                                    }
?>


<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 12';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 12</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot12' value='Slot 12'>Slot 12</button>";
                                      }
                                    }
?>


<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 13';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 13</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot13' value='Slot 13'>Slot 13</button>";
                                      }
                                    }
?>



<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 14';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 14</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot14' value='Slot 14'>Slot 14</button>";
                                      }
                                    }
?>



<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 15';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 15</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot15' value='Slot 15'>Slot 15</button>";
                                      }
                                    }
?>

<br><br>

<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 16';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 16</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot16' value='Slot 16'>Slot 16</button>";
                                      }
                                    }
?>



<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 17';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 17</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot17' value='Slot 17'>Slot 17</button>";
                                      }
                                    }
?>



<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 18';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 18</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot18' value='Slot 18'>Slot 18</button>";
                                      }
                                    }
?>



<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 19';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 19</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot19' value='Slot 19'>Slot 19</button>";
                                      }
                                    }
?>


<?php 
$date=$_SESSION["date"];
$zone=$_SESSION["zone4"]; 


$sql="SELECT date, zone, slot FROM reservation WHERE date='$date' AND zone='$zone' AND slot='Slot 20';";
 

                                          if ($result=mysqli_query($conn,$sql)){
                                          $rowcount=mysqli_num_rows($result);
                                          if ($rowcount >=1) {

                                        echo "<button class='slotbutton' style='color:red;'>Slot 20</button>";
                                      } else {
                          echo "<button class='slotbutton' name='slot20' value='Slot 20'>Slot 20</button>";
                                      }
                                    }
?>


    <br><br>

</form>

</div>

<p class="para" style="color: red;">If the text is red, please select another slot since a user has already booked this one,<br> Thank you</p>


</body>
</html>