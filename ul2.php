<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysql_db='patient';

// Create connection
if(! mysql_connect($servername, $username, $password)||!mysql_select_db($mysql_db)){
  die (mysql_error());
}else{ echo '';}
if(isset($_POST['fileToUpload'])){
		$ftu=$_POST['fileToUpload'];
         echo $ftu;
}
if(isset($_POST['name'])){
		$nm=$_POST['name'];
         echo $nm;
}
if(isset($_POST['ID'])){
		$id=$_POST['ID'];
         echo $id;
}
$query1="UPDATE `p_info` SET `file`='$ftu' WHERE `NAME`='$nm'";
if($query_run=mysql_query($query1)){ echo'<h1>updated!!!</h1>';}else{echo'ss';}
?>
