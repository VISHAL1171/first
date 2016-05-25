<?php
require "connection.php";
$dbname='patient';

$con = mysqli_connect($servername, $username, $password, $dbname)
if($query_run=mysqli_query($con,$q2)){echo'sexxxy';}else{echo'aaaa';}
if($query_run=mysqli_query($con,$q2)){echo'working';
while($query_row=mysqli_fetch_assoc($query_run)){
	$im=$query_row['Image'];
	echo $im;
}
}
else{
	echo 'wrong query';
}
?>
/*Gouravna gag841 Vishal0294 accirctc&1171
100000493317515
