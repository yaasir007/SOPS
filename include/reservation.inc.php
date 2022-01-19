<?php  
session_start();

include 'dbh.inc.php';

$uid = $_SESSION['u_id'];
$email = $_SESSION['u_email'];

$date = mysqli_real_escape_string($conn, $_POST['date']);
$_SESSION["date"] = "$date";


if (isset($_POST['submit']))  {
        header("Location: ../zone.php?reservation=success");
            exit();
} else {
        header("location: ../reservation.php?reservation=error");
}