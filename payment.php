<?php
include 'insideheader.php';

if(isset($_SESSION['u_email'])){

    
    $userid = $_SESSION['u_id'];
    $useremail = $_SESSION['u_email'];
}
?>

<?php
 $sql = "SELECT * FROM user WHERE id='$userid'";
                          $result = mysqli_query($conn,$sql);
                         while ($row = mysqli_fetch_array($result)) {
                      $credit = $row['credits'];
                          }
                       



                          if ($credit > 50) {
                                                        $remainder = $credit - 50;  
                $sql="UPDATE user SET credits ='$remainder' WHERE id='$userid';";
                mysqli_query($conn,$sql);
             }
?>
											

<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
		<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
           	<link rel="stylesheet" type="text/css" href="css/payment.css">
           </head>
           <body>
           
          
           <br><br><br><br>

<div align="center" class="text">


	<p>Credits = Rs <?php echo $credit ?></p>	
	<br>
	<p>Payment for slot = Rs 50</p>
	<br>
	<p>Remaining Credit = Rs <u><?php echo $remainder; ?></u></p>
  <br>  <br>  <br>

</div>
<div align="center" class="home"><a href="reservation.php">Home</a></div>
</body>
</html>