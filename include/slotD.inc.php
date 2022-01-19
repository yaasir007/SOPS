<?php  
session_start();

include 'dbh.inc.php';


 if (isset($_SESSION['u_id'])) {
        
        $uid = $_SESSION['u_id'];
        $first = $_SESSION['u_first'];
        $last = $_SESSION['u_last'];
        $city = $_SESSION['u_city'];
        $email = $_SESSION['u_email'];
        $phone = $_SESSION['u_phone'];
}

$slot1 = mysqli_real_escape_string($conn, $_POST['slot1']);
$_SESSION["slot1"]="$slot1";
$slot2 = mysqli_real_escape_string($conn, $_POST['slot2']);
$_SESSION["slot2"]="$slot2";
$slot3 = mysqli_real_escape_string($conn, $_POST['slot3']);
$_SESSION["slot3"]="$slot3";
$slot4 = mysqli_real_escape_string($conn, $_POST['slot4']);
$_SESSION["slot4"]="$slot4";
$slot5 = mysqli_real_escape_string($conn, $_POST['slot5']);
$_SESSION["slot5"]="$slot5";
$slot6 = mysqli_real_escape_string($conn, $_POST['slot6']);
$_SESSION["slot6"]="$slot6";
$slot7 = mysqli_real_escape_string($conn, $_POST['slot7']);
$_SESSION["slot7"]="$slot7";
$slot8 = mysqli_real_escape_string($conn, $_POST['slot8']);
$_SESSION["slot8"]="$slot8";
$slot9 = mysqli_real_escape_string($conn, $_POST['slot9']);
$_SESSION["slot9"]="$slot9";
$slot10 = mysqli_real_escape_string($conn, $_POST['slot10']);
$_SESSION["slot10"]="$slot10";
$slot11 = mysqli_real_escape_string($conn, $_POST['slot11']);
$_SESSION["slot11"]="$slot11";
$slot12 = mysqli_real_escape_string($conn, $_POST['slot12']);
$_SESSION["slot12"]="$slot12";
$slot13 = mysqli_real_escape_string($conn, $_POST['slot13']);
$_SESSION["slot13"]="$slot13";
$slot14 = mysqli_real_escape_string($conn, $_POST['slot14']);
$_SESSION["slot14"]="$slot14";
$slot15 = mysqli_real_escape_string($conn, $_POST['slot15']);
$_SESSION["slot15"]="$slot15";
$slot16 = mysqli_real_escape_string($conn, $_POST['slot16']);
$_SESSION["slot16"]="$slot16";
$slot17 = mysqli_real_escape_string($conn, $_POST['slot17']);
$_SESSION["slot17"]="$slot17";
$slot18 = mysqli_real_escape_string($conn, $_POST['slot18']);
$_SESSION["slot18"]="$slot18";
$slot19 = mysqli_real_escape_string($conn, $_POST['slot19']);
$_SESSION["slot19"]="$slot19";
$slot20 = mysqli_real_escape_string($conn, $_POST['slot20']);
$_SESSION["slot20"]="$slot20";


//slot 1
if (isset($_POST['slot1']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
} 


//slot 2

 if (isset($_POST['slot2']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}


//slot 3

 if (isset($_POST['slot3']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 4 

 if (isset($_POST['slot4']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 5

 if (isset($_POST['slot5']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 6

 if (isset($_POST['slot6']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 7

 if (isset($_POST['slot7']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 8

 if (isset($_POST['slot8']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}


//slot 9
 if (isset($_POST['slot9']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 10


 if (isset($_POST['slot10']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 11


 if (isset($_POST['slot11']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 12


 if (isset($_POST['slot12']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}


//slot 13


 if (isset($_POST['slot13']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 14


 if (isset($_POST['slot14']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}


//slot 15


 if (isset($_POST['slot15']))  {
            header("Location: ../confirmation.php");
                    exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 16


 if (isset($_POST['slot16']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

//slot 17


 if (isset($_POST['slot17']))  {
            header("Location: ../confirmation.php");
                         exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 18

 if (isset($_POST['slot18']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 19

 if (isset($_POST['slot19']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}

 //slot 20

 if (isset($_POST['slot20']))  {
            header("Location: ../confirmation.php");
             exit();
} else {
 			header("Location: ../slotD.php?slot=error");
}


 ?>