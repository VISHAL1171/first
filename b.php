<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Sanjeevani HealthCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
   <div class="container-fluid">
   </div>
   </body>
  </html>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $mysql_db='hospital';

  // Create connection
 if(! mysql_connect($servername, $username, $password)||!mysql_select_db($mysql_db)){
    die (mysql_error());}
  else{ echo 'connected<br/>';}
   $q="SELECT * FROM `bill` WHERE 1";
   $result = mysql_query( $q);
if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        echo "medicine name" . $row["MNAME"]. " PRICE PER UNIT" . $row["PPU"]. "NO. OF UNIT" . $row["NU"]."TOTAL COST" . $row["TC"]. "<br>";}
        $q1="SELECT SUM(`TC`) AS `Totalsum` FROM `bill`";

        $result1 = mysql_query( $q1);
         while($row1 = mysql_fetch_assoc($result1)){echo 'total price'.$row1["Totalsum"];}

    echo '<a href ="payment.php"> click here to make payment</a>';
} else {
    echo "0 results";
}

?>
