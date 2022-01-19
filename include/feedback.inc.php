<?php
  

/* this condition is created because the user MUST click on the submit button to view this file. Else it could be view just by adding the file name to the URL. */


if (isset($_POST['submit']))  {
   #this checks if the submit button is clicked.

	include_once 'dbh.inc.php';
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);

//Error handlers
// check if input character are valid.

    if (!preg_match("/^[a-zA-Z]*$/", $name))   {
           
           header("Location: ../index.php?name=invalid");
           exit();

    } else {
             //insert the user in the db.
             $sql = "INSERT INTO  feedback (name, email, subject, details) VALUES ('$name', '$email', '$subject', '$details');";
             mysqli_query($conn, $sql);
             header("location: ../index.php?successful");
              exit();
                }
            } else {
              header("location: ../index.php?feedback=error");
              exit();
            }
?>
