<?php
session_start();
include 'dbh.inc.php';

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

if (isset($_POST['proceed']))  {

           $sql = "INSERT INTO reservation (date, zone, slot, userid) VALUES ('$date', '$zone1' '$zone2' '$zone3' '$zone4','$slot1' '$slot2' '$slot3' '$slot4' '$slot5' '$slot6' '$slot7' '$slot8' '$slot9' '$slot10' '$slot11' '$slot12' '$slot13' '$slot14' '$slot15' '$slot16' '$slot17' '$slot18' '$slot19' '$slot20', '$uid');";
             mysqli_query($conn, $sql);

 $result = mysqli_query($conn, "SELECT id FROM reservation ORDER BY id DESC LIMIT 1;");
 while ($row = mysqli_fetch_array($result)) {
    $rid = $row['id'];
 }

           $sql1 = "INSERT INTO zone (description, reservationid) VALUES ('$zone1' '$zone2' '$zone3' '$zone4', '$rid');";  
           mysqli_query($conn, $sql1);

            $sql2 = "INSERT INTO slot (slotnumber, reservationid) VALUES ('$slot1' '$slot2' '$slot3' '$slot4' '$slot5' '$slot6' '$slot7' '$slot8' '$slot9' '$slot10' '$slot11' '$slot12' '$slot13' '$slot14' '$slot15' '$slot16' '$slot17' '$slot18' '$slot19' '$slot20', '$rid');";  
           mysqli_query($conn, $sql2);

header("Location: ../payment.php");
             exit();
} else {
        header("Location: ../confirmation.php?confirmation=error");
}
?>

