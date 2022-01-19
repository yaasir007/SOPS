<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	// Error handlers
	// Check if input are empty

	if (empty($email) || empty($pwd)) {
header("location: ../index.php?login=empty");
     exit();
} else {
	 $sql = "SELECT * FROM user WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

            if ($resultCheck < 1) {
           header("location: ../index.php?login=emailerror");
	exit();
        } else {
        	if ($row = mysqli_fetch_assoc($result)){
             //de-hashing the password
        		$hashedPwdCheck = password_verify($pwd, $row['password']);
        		if ($hashedPwdCheck == false){
           header("location: ../index.php?login=passworderror");
             exit();

        		} elseif ($hashedPwdCheck == true){
               //login the user here
        			$_SESSION['u_id'] = $row['id'];
        			$_SESSION['u_first'] = $row['firstname'];
        			$_SESSION['u_last'] = $row['lastname'];
        			$_SESSION['u_city'] = $row['city'];
                    $_SESSION['u_email'] = $row['email'];
        			$_SESSION['u_phone'] = $row['phonenumber'];
        			 header("location: ../reservation.php?login=success");
             exit();


        		}

        	}
        }
    }   
} else {
	header("location: ../index.php?login=error");
	exit();
}