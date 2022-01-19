<?php
include 'insideheader.php';


if(isset($_SESSION['u_email'])){
    
    include 'include/dbh.inc.php' ;
    
    $userid = $_SESSION['u_id'];
    $useremail = $_SESSION['u_email'];
}
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>My Records</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/records.css">
</head>
<body>
<br>
<p align="center" class="l2"><b>You can find all your records here.</b></p> 

<?php

	$sql = "SELECT * FROM reservation WHERE userid='$userid'";
    $result = mysqli_query($conn,$sql);
    $rowcount=mysqli_num_rows($result);

    $sql1 = "SELECT * FROM zone WHERE userid='$userid'";
    $result1 = mysqli_query($conn,$sql1);
    $rowcount1=mysqli_num_rows($result1);

    $sql2 = "SELECT * FROM slot WHERE userid='$userid'";
    $result2 = mysqli_query($conn,$sql2);
    $rowcount2=mysqli_num_rows($result2);

?>


<div align="center">
	<table>
	<table>
		<td>Date:</td>

<?php 
for ($i=1;$i<=$rowcount; $i++){
	$row=mysqli_fetch_array($result);
?>
	<tr>
		<td><?php echo $row['date'] ?> </td>
	</tr>
	</tr>
<?php
}
?>
</table>  </td>

<td>

<table class="l1">
	<tr>
		<td>Description:</td>

<?php 
for ($i=1;$i<=$rowcount1; $i++){
	$row=mysqli_fetch_array($result1);
?>
	<tr>
		<td><?php echo $row['description'] ?> </td>
	</tr>
	</tr>
<?php
}
?>
</table>

</td>

<td>

	<table class="l1">
	<tr>
		<td>Slot Number:</td>

<?php 
for ($i=1;$i<=$rowcount2; $i++){
	$row=mysqli_fetch_array($result2);
?>
	<tr>
		<td><?php echo $row['slotnumber'] ?> </td>
	</tr>
	</tr>
<?php
}
?>
</table>

</td>
</tr>
</table>
</table>
</div>
</body>
</html>