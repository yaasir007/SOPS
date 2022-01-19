<?php
  

/* this condition is created because the user MUST click on the submit button to view this file. Else it could be view just by adding the file name to the URL. */


if (isset($_POST['submit']))  {
   #this checks if the submit button is clicked.

	include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);


//Error handlers
    //Check for empty fields
if (empty($first) || empty($last) || empty($city) || empty($email) || empty($phone) || empty($pwd) || empty($cpwd)) {
    header("Location: ../login.php?signup=empty");
    exit();

}  else {

    if (!preg_match("/^[a-zA-Z]*$/", $first))   {
    header("Location: ../login.php?firstname=invalid");
    exit();
} else {

    if (!preg_match("/^[a-zA-Z]*$/", $last))   {
    header("Location: ../login.php?lastname=invalid");
    exit();
} else {

    if (!preg_match("/^[a-zA-Z-]*$/", $city))   {
    header("Location: ../login.php?city=invalid");
    exit();
} else {

    if (!preg_match("/^[0-9]*$/", $phone))   {
    header("Location: ../login.php?phone=invalid");
    exit();
} else { 

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
    header("Location: ../login.php?signup=email_taken");
exit();
} else {

    if ($pwd != $cpwd) {
        header("Location: ../login.php?password_do_not_match");
        exit();
} else {
            //hashing the password
             $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
             //insert the user in the db.
$sql = "INSERT INTO  user (firstname,lastname,city,email,phonenumber,password) VALUES ('$first','$last','$city','$email','$phone' , '$hashedPwd');";
             mysqli_query($conn, $sql);
             header("Location: ../login.php?signup=success");
             exit();
                            }
                        }
                    }        
                }
            }
        }
    }
}


?>


   


