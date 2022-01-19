                                    <?php
                                    include 'insideheader.php';
                                    ?>
                                                    <?php
                                                if (isset($_SESSION['u_id'])) {
                                                    
                                                    $uid = $_SESSION['u_id'];
                                                    $email = $_SESSION['u_email'];
                                                  }
                                                    ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/zone.css">
</head>
<body align="center">
  <br><br>
    <b class="text">Select Zone For Parking</b>
  <div align="center">
  <table> <tr><td>
  <form action="include/zone.inc.php" method="POST">
<button name="zone1" class="button" value="Zone 1"> Zone 1 </button>
</td>

<td>
<button name="zone2" class="button" value="Zone 2"> Zone 2 </button>
</td></tr>

<br><br><br>
   <tr> <td>
<button name="zone3" class="button" value="Zone 3"> Zone 3 </button>
</td>

<td> 
<button name="zone4" class="button" value="Zone 4"> Zone 4 </button>
</form>
</td></tr>

</table>

</div>



</body>
</html>