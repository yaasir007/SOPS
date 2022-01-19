
<?php
include_once 'insideheader.php';
?>
<section class="main-container">
<div class="main-wrapper">
    
    <?php
    if (isset($_SESSION['u_id'])) {
        
        $uid = $_SESSION['u_id'];
        $first = $_SESSION['u_first'];
        $last = $_SESSION['u_last'];
        $city = $_SESSION['u_city'];
        $email = $_SESSION['u_email'];
        $phone = $_SESSION['u_phone'];
}
?>

<html>
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Validation Process</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/reservation.css">
</head>
<body>
                                          <?php 

                                            $sql = "SELECT * FROM user WHERE id='$uid'";
                                                $result = mysqli_query($conn,$sql);
                                               while ($row = mysqli_fetch_array($result)) {
                                                    
                                            $credit = $row['credits'];
                                                } 

                                                    if ($credit < 51){


                                    echo "<br><br><br><br><br><br><p class='error'> You need to refill your Credits SOPS Account in order to make more bookings. <br><br> Thank you, <br> SOPS Administrator.";
                                                exit;
                                            }
                                        
                                            
                                            ?>
</div>  
</section>


<br><br><br>


   <p align="center" class="text">MAKE YOUR BOOKING HERE</p>
   
<br><br>

    <form action="include/reservation.inc.php" method="POST"> <br>
        
    <div align="center">
    <input id="datepicker" width="350"  placeholder="Select Date..." name="date" required />  <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            minDate: new Date
        });
    </script>
    </div>
<br><br><br><br>


<div align="center"><button name="submit" class="button"><span>Submit</span></button></div>

<br>
</form>

</body>
</html>