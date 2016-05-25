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
else{ echo 'connected';}
if(isset($_POST['mname']))
{
    $mn=$_POST['mname'];
}
if(isset($_POST['nunit']))
{
    $nu=$_POST['nunit'];
}
$q="SELECT * FROM `pharmacy` WHERE `medname`='$mn'";
if($result=mysql_query($q)){ echo'<h2> <bold>yes'.$mn.'is presesnt</bold></h2><br/>';
       $row = mysql_fetch_assoc($result);
       $cpu=$row["cost"];
       $nou=$row["no.of unit"];
       $p=$cpu*$nu;
       $q2="INSERT INTO `bill`(`MNAME`, `PPU`, `NU`, `TC`) VALUES ('$mn','$cpu','$nu','$p')";
       if($result2=mysql_query($q2)){

          $x=$nou-$nu;
       $q3="UPDATE `pharmacy` SET `no.of unit`='$x' WHERE 1";
        if($result3=mysql_query($q3)){ echo '<button type="button" class="btn btn-success btn-lg btn-block" ><a href="medi.php">to buy another medicine click here</a></button>';
        }
   }


}
else{
	echo 'wrong query';
}
 ?>
