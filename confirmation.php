<?php  
include 'insideheader.php';

    if (isset($_SESSION['u_id'])) {
        
        $uid = $_SESSION['u_id'];
        $email = $_SESSION['u_email'];
       
}

//date
$date=$_SESSION["date"];
//zone
$zone1=$_SESSION["zone1"];
$zone2=$_SESSION["zone2"];
$zone3=$_SESSION["zone3"];
$zone4=$_SESSION["zone4"];
//slotA,B,C,D.
$slot1=$_SESSION["slot1"];
$slot2=$_SESSION["slot2"];
$slot3=$_SESSION["slot3"];
$slot4=$_SESSION["slot4"];
$slot5=$_SESSION["slot5"];
$slot6=$_SESSION["slot6"];
$slot7=$_SESSION["slot7"];
$slot8=$_SESSION["slot8"];
$slot9=$_SESSION["slot9"];
$slot10=$_SESSION["slot10"];
$slot11=$_SESSION["slot11"];
$slot12=$_SESSION["slot12"];
$slot13=$_SESSION["slot13"];
$slot14=$_SESSION["slot14"];
$slot15=$_SESSION["slot15"];
$slot16=$_SESSION["slot16"];
$slot17=$_SESSION["slot17"];
$slot18=$_SESSION["slot18"];
$slot19=$_SESSION["slot19"];
$slot20=$_SESSION["slot20"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Please Confirm</title>
	<link rel="stylesheet" type="text/css" href="css/confirmation.css">
</head>
<body>
<div class="middle">
<p>The date entered is <?php echo $date; ?></p>
<p><?php echo 'The zone entered is ' .$zone1. '' .$zone2. '' .$zone3. '' .$zone4. '<br>';   ?></p> 
<p><?php echo 'The slot number entered is ' .$slot1. '' .$slot2. '' .$slot3. '' .$slot4. '' .$slot4. '' .$slot5. '' .$slot6. '' .$slot7. '' .$slot8.'' .$slot9. '' .$slot10. '' .$slot11. '' .$slot12. '' .$slot13. '' .$slot14. '' .$slot15. '' .$slot16. '' .$slot17. '' .$slot18. '' .$slot19. '' .$slot20.'<br>';   ?></p> 



<p>If you are satisfied with the above details, we shall proceed to payment. Click on <b>Proceed</b> to advance.</p>

<form action="include/confirmation.inc.php" method="POST">
	<button name="proceed">Proceed</button>
</form>
</div>
</body>
</html>