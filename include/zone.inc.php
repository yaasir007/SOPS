<?php  
session_start();

include 'dbh.inc.php';

    if (isset($_SESSION['u_id'])) {
        
        $uid = $_SESSION['u_id'];
        $email = $_SESSION['u_email'];
       
}

$zone1 = mysqli_real_escape_string($conn, $_POST['zone1']);
$_SESSION["zone1"] = "$zone1";
$zone2 = mysqli_real_escape_string($conn, $_POST['zone2']);
$_SESSION["zone2"] = "$zone2";
$zone3 = mysqli_real_escape_string($conn, $_POST['zone3']);
$_SESSION["zone3"] = "$zone3";
$zone4 = mysqli_real_escape_string($conn, $_POST['zone4']);
$_SESSION["zone4"] = "$zone4";

//zone 1
       
if (isset($_POST['zone1'])){
        header("Location: ../slotA.php?zone=success");
             exit();
}	else {

//zone 2

if (isset($_POST['zone2']))  {
          header("Location: ../slotB.php?zone=success");
             exit();
}	else {

//zone 3

if (isset($_POST['zone3']))  {
        header("Location: ../slotC.php?zone=success");
             exit();
}	else {

//zone 4

if (isset($_POST['zone4']))  {
        header("Location: ../slotD.php?zone=success");
             exit();
        	}
    	}
	} 
}	
