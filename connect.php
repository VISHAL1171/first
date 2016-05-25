<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysql_db='hospital';

// Create connection
if(! mysql_connect($servername, $username, $password)||!mysql_select_db($mysql_db)){
  die (mysql_error());
}else{ echo 'connected';}
?>
